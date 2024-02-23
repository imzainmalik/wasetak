<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Yajra\DataTables\Facades\DataTables;
use App\Mail\UserCredentialsMail;
use App\Models\Admin;
use Carbon\Carbon;

class AdminUserController extends Controller
{
        public function index(Request $request){
            
            // $user  = User::all()->toArray();
            //     $admin = Admin::all()->toArray();
                
            //     $data = array_merge($user, $admin);
            //     dd($data);
                

            if ($request->ajax()) {
                //  [];
                $user  = User::all()->toArray();
                $admin = Admin::all()->toArray();
                
                $data = array_merge($user, $admin);
                // dd($data);
                return DataTables::of($data) 
                ->addColumn('username', function($row){
                    if(isset($row['username'])){
                       $u_name =  $row['username']; 
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
                            $name = 'None' ;
                        }
                    }
                    return $name;
                })

                ->addColumn('created_at', function($row){
                    return isset($row['created_at']) != null ? Carbon::create($row['created_at'])->diffForHumans() : 'None';
                }) 

                ->addColumn('action', function($row){
                    return '<a href="'.route("admin.users.edit",encrypt($row["email"])).'" class="btn btn-info">Edit</a>';
                })

                ->addColumn('email_verified_at', function($row){
                    
                    if(isset($row['email_verified_at'])  && $row['email_verified_at'] != null){
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

                ->rawColumns(['email_verified_at', 'created_at','action', 'name','acc_status'])
                ->make(true);

            }
            return view('Admin.user.index');
        }


        public function create(){
            return view('Admin.user.create');
        }

        public function store(Request $request){
                // dd($request->all());
            if($request->role == "user"){
                $user_create = new User;
                $user_create->name = $request->name;
                $user_create->username = $request->username;
                $user_create->email = $request->email;
                $user_create->password = Hash::make($request->password);
                
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
                return redirect('admin/users/index')->with('Success','User has been created');
            }
            else{
                
                if($request->hasFile('d_picture')){
                    $attechment = $request->file('d_picture');
                    $avatar = time() . $attechment->getClientOriginalName();
                    $attechment->move(public_path('assets/images/users'), $avatar); 
                }else{
                    $avatar = 'avatar.png';
                }
                $admin = new Admin;
                $admin->name = $request->name;
                $admin->email = $request->email;
                $admin->d_picture = 'assets/images/users/'.$avatar;
                $admin->password = Hash::make($request->password);
                $admin->save();

                if($request->credentials != NULL){
                    Mail::to([$request->get('email')])->send(new UserCredentialsMail($request));
                }
 
                return redirect('admin/users/index')->with('Success','User has been created');
            }
        }

        public function edit(Request $request, $email){
            $check_is_user = User::where('email', decrypt($email))->first();

            if($check_is_user != NULL){
                $details = User::where('email', decrypt($email))->first();
                $type = "user";
            }else{
                $details = Admin::where('email', decrypt($email))->first();
                 $type = "admin";
            }
            return view('Admin.user.edit', compact('details','type'));
        }

        public function update(Request $request, $email){

            $check_is_user = User::where('email', decrypt($email))->first();
            if($check_is_user != NULL){ 
                if($request->hasFile('d_picture')){
                    $attechment = $request->file('d_picture');
                    $img_2 = time() . $attechment->getClientOriginalName();
                    $attechment->move(public_path('assets/images/users'), $img_2);
                }else{
                    $img_2 = $check_is_user->d_picture;
                }
               User::where('email', decrypt($email))->update(array(
                  'name' => $request->name,
                  'username' => $request->username,
                  'email' => $request->email,
                  'd_picture' => 'assets/images/users/'.$img_2,
                  'is_active' => $request->status,
                  'password' => Hash::make($request->password),
               ));
             }else{
                $admin_details = Admin::where('email', decrypt($email))->first();
                
               Admin::where('email', decrypt($email))->update(array(
                  'first_name' => $request->first_name,
                  'last_name' => $request->last_name,
                  'email' => $request->email,
                  'is_active' => $request->status,
                  'password' => Hash::make($request->password),
               ));
            }
            return redirect('admin/users/index')->with('Success','User has been updated successfuly');
        }


        public function change_status(Request $request, $user_id){
            // dd($user_id, $status);
            User::where('id', $user_id)->update(array(
                'is_active' => $request->status
            ));

            return response()->json([
                'message' => 'success'
            ]);
        }
}
