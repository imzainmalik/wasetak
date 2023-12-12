<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Yajra\DataTables\Facades\DataTables;

class AdminUserController extends Controller
{
        public function index(Request $request){
               
            if ($request->ajax()) {
                $data = User::all();
              
                return DataTables::of($data)
                  
                
                ->addColumn('name', function($row){
                         return $row->name;
                })

                ->addColumn('username', function($row){
                    return $row->username;
                })

                ->addColumn('email', function($row){
                    return $row->email;
                })

                ->addColumn('isEmail_Verified', function($row){
                    if($row->email_verified_at == NULL){
                        return '<div class="badge rounded-pill bg-danger">Not veriffied</div>';
                    }else{
                        return '<div class="badge rounded-pill bg-success">veriffied</div>';
                    }
                })
 

                ->addColumn('date_created', function($row){
                    return  $row->created_at->diffForHumans();
                }) 
                ->addIndexColumn() 
                ->rawColumns(['name', 'username','email','isEmail_Verified','date_created'])
                ->make(true);

            }
            return view('admin.user.index');
        }


        public function create(){
            return view('Admin.user.create');
        }
}
