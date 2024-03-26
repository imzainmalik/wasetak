<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\UserCredentialsMail;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Yajra\DataTables\Facades\DataTables;


class AdminEmployesController extends Controller
{
    //

    public function index(Request $request){
        if ($request->ajax()) {
            //  [];
            $count = 1;
            $data  = User::where('role', '!=', 0)->get();
            // $admin = Admin::all()->toArray();
 
             // dd($data);
            return DataTables::of($data) 
            ->addColumn('username', function($row){
                if(isset($row['username'])){
                   $u_name =  '<a href="'.route('user.user_profile',$row['username']).'">'. '@'.$row['username'].'</a>'; 
                }else{
                    if(isset($row['first_name'])){
                       $u_name = $row['first_name'] .'_'.$row['last_name'];
                    }else{
                        $u_name = 'None';
                    }
                }
                return $u_name;
            })
            
            ->addColumn('name', function($row){
                if(isset($row['name'])){
                   $name =  $row['name'];
                }else{
                    if(isset($row['first_name'])){
                       $name = $row['first_name'];
                    }else{
                        $name = 'None';
                    }
                }
                return $name;
            })

            ->addColumn('d_picture', function($row){
                $img = '<img src="'.asset($row['d_picture']).'" style="width: 77px;border-radius: 100px;height: 77px;">';
                return $img;
            })
            
            ->addColumn('acc_lable', function($row){

                if($row['acc_lable'] == 1){
                    return '<div class="badge rounded-pill bg-primary">Staff Member</div>';
                }
                
                if($row['acc_lable'] == 2){
                    return '<div class="badge rounded-pill bg-info">Moderator</div>'; 
                } 

                if($row['acc_lable'] == 3){
                    return '<div class="badge rounded-pill bg-warning">Admin</div>';
                }
                
                if($row['acc_lable'] == 4){
                    return '<div class="badge rounded-pill bg-success">Staff Leader</div>';
                }
                // return $row['acc_lable'];
            })  
            ->addColumn('created_at', function($row){
                return isset($row['created_at']) != null ? Carbon::create($row['created_at'])->diffForHumans() : 'None';
            }) 

            ->addColumn('action', function($row){
                return '<a href="'.route("admin.employes.edit",encrypt($row["email"])).'" class="btn btn-info">Edit</a>';
            })

            ->addColumn('email_verified_at', function($row){

                if(isset($row['email_verified_at']) && $row['email_verified_at'] != null){
                    return '<div class="badge rounded-pill bg-danger">Not Verified</div>';
                }else{
                    return '<div class="badge rounded-pill bg-success">Verified</div>';
                }
            })

            ->addColumn('acc_status', function($row){
                if(isset($row['is_active']) && $row['is_active'] == 0){
                    return '<div class="badge rounded-pill bg-danger">DeActivated</div>';
                }else{
                    return '<div class="badge rounded-pill bg-success">Activated</div>';
                }
            }) 
            ->addIndexColumn() 

            ->rawColumns(['email_verified_at', 'created_at','action', 'name','acc_status','acc_lable','d_picture', 'username'])
            ->make(true);

        }
        return view('admin.employe.index');
    }

    public function add(){
        return view('admin.employe.add');
    }


    public function store(Request $request){
        $user_create = new User;
        $user_create->name = $request->name;
        $user_create->username = $request->username;
        $user_create->email = $request->email;
        $user_create->password = Hash::make($request->password);
        $user_create->acc_lable = $request->acc_lable;
        $user_create->role = 1;

        if($request->hasFile('d_picture')){
            $attechment = $request->file('d_picture');
            $avatar = time() . $attechment->getClientOriginalName();
            $attechment->move(public_path('assets/images/users'), $avatar);
        }else{
            $avatar = 'avatar.png';
        }
        $user_create->d_picture = 'assets/images/users/'.$avatar;
        $user_create->save();
        
        if($request->credentials != NULL){
            Mail::to([$request->get('email')])->send(new UserCredentialsMail($request));
        } 
        return redirect('admin/employes/index')->with('Success','Staff memeber has been created');
    }

    public function edit(Request $request, $email){
        $details = User::where('email', decrypt($email))->first();
        return view('Admin.employe.edit',compact('details'));
    }

    public function update(Request $request, $email){
        $check_is_user = User::where('email', decrypt($email))->first();
        if($request->hasFile('d_picture')){
            $attechment = $request->file('d_picture');
            $img_2 = time() . $attechment->getClientOriginalName();
            $attechment->move(public_path('assets/images/users'), $img_2);
            $image = 'assets/images/users/'.$img_2;
        }else{
            $image = $check_is_user->d_picture;
        }
        // dd($request->all(), $img_2);

        User::where('email', decrypt($email))->update(array(
          'name' => $request->name,
          'username' => $request->username,
          'email' => $request->email,
          'd_picture' => $image,
          'is_active' => $request->status,
          'password' => Hash::make($request->password),
          'acc_lable' => $request->acc_lable 
       ));
       return redirect('admin/employes/index')->with('Success','Staff memeber details has been updated');
    }

    public function findusername(Request $request){

        if($request->username != null){
            
            $users = User::where('username', $request->username)->first(); 
            if($users != null){
                if($request->user_id ==  $users->id){
                    return response()->json([
                        'code' => 200,  
                        'message' => '<p class="text-success py-4"><i class="fa fa-check-circle text-success" aria-hidden="true"></i> Username '.$request->username.' available</p> '
                    ]); 
                }else{
                    return response()->json([
                        'code' => 403,
                        'message' => '<p class="text-danger py-4"><i class="fa fa-times-circle text-danger" aria-hidden="true"></i> Username '.$request->username.' already taken</p> ' 
                    ]);
                }
            } else{
                return response()->json([
                    'code' => 200,  
                    'message' => '<p class="text-success py-4"><i class="fa fa-check-circle text-success" aria-hidden="true"></i> Username '.$request->username.' available</p> '
                ]);
            }  
        }else{
            return response()->json([
                'code' => 403,
                'message' => '<p class="text-danger py-4"><i class="fa fa-times-circle text-danger" aria-hidden="true"></i>Username feild is required. Start typing username</p> ' 
            ]);
        }

    }
}
 