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
               
            if ($request->ajax()) {
                //  [];
                $user  = User::all()->toArray();
                $admin = Admin::all()->toArray();
                
                $data = array_merge($user, $admin);
                // dd($data);
                return DataTables::of($data) 
                ->addColumn('username', function($row){
                    return isset($row['username']) != null ? $row['username'] : 'None';
                })

                ->addColumn('created_at', function($row){
                    return isset($row['created_at']) != null ? Carbon::create($row['created_at'])->diffForHumans() : 'None';
                }) 

                ->addColumn('action', function($row){
                    return '<a href="/admin/users/edit/'.$row['email'].'" class="btn btn-info">Edit</a>';
                })  

                ->addColumn('email_verified_at', function($row){

                    if($row['email_verified_at'] == NULL){
                        return '<div class="badge rounded-pill bg-danger">Not Verified</div>';
                    }else{
                        return '<div class="badge rounded-pill bg-success">Verified</div>';
                    }
                })

                ->addColumn('acc_status', function($row){
                    if($row['is_active'] == 0){
                        return '<div class="badge rounded-pill bg-danger">DeActivated</div>';
                    }else{
                        return '<div class="badge rounded-pill bg-success">Activated</div>';
                    }
                })

                ->addIndexColumn() 

                ->rawColumns(['email_verified_at', 'created_at','action','acc_status'])
                ->make(true);

            }
            return view('admin.user.index');
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
                    $img_2 = time() . $attechment->getClientOriginalName();
                    $attechment->move(public_path('assets/images/users'), $img_2);
                }
                $user_create->d_picture = $img_2 ?? NULL;
                $user_create->save();
                
                if($request->credentials != NULL){
                    Mail::to([$request->get('email')])->send(new UserCredentialsMail($request));
                }
                
                return redirect('admin/users/index')->with('Success','User has been created');
            }
            else{

                if($request->hasFile('d_picture')){
                    $attechment = $request->file('d_picture');
                    $img_2 = time() . $attechment->getClientOriginalName();
                    $attechment->move(public_path('assets/images/users'), $img_2);
                }

                $admin = new Admin;
                $admin->name = $request->name;
                $admin->email = $request->email;
                $admin->d_picture = $img_2 ?? NULL;
                $admin->password = Hash::make($request->password);
                $admin->save();

                if($request->credentials != NULL){
                    Mail::to([$request->get('email')])->send(new UserCredentialsMail($request));
                }
 
                return redirect('admin/users/index')->with('Success','User has been created');
            }
        }

        public function edit(Request $request, $email){
            $check_is_user = User::where('email', $email)->first();

            if($check_is_user != NULL){
                $details = User::where('email', $email)->first();
                $type = "user";
            }else{
                $details = Admin::where('email', $email)->first();
                 $type = "admin";
            }
            return view('Admin.user.edit', compact('details','type'));
        }

        public function update(Request $request, $email){

            $check_is_user = User::where('email', $email)->first();
            if($check_is_user != NULL){ 
                if($request->hasFile('d_picture')){
                    $attechment = $request->file('d_picture');
                    $img_2 = time() . $attechment->getClientOriginalName();
                    $attechment->move(public_path('assets/images/users'), $img_2);
                }else{
                    $img_2 = $check_is_user->d_picture;
                }
               User::where('email', $email)->update(array(
                  'name' => $request->name,
                  'username' => $request->username,
                  'email' => $request->email,
                  'd_picture' => $img_2,
                  'is_active' => $request->status,
                  'password' => Hash::make($request->password),
               ));
             }else{
                $admin_details = Admin::where('email', $email)->first();
                if($request->hasFile('d_picture')){
                    $attechment = $request->file('d_picture');
                    $img_2 = time() . $attechment->getClientOriginalName();
                    $attechment->move(public_path('assets/images/users'), $img_2);
                }else{
                    $img_2 = $admin_details->d_picture;
                }
               Admin::where('email', $email)->update(array(
                  'name' => $request->name,
                  'email' => $request->email,
                  'd_picture' => $img_2,
                  'is_active' => $request->status,
                  'password' => Hash::make($request->password),
               ));
            }
            return redirect('admin/users/index')->with('Success','User has been updated successfuly');
        }
}
