<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Yajra\DataTables\Facades\DataTables;

class AdminPostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(Request $request){

        if ($request->ajax()) {
            $data = Post::where('status','!=',3);

            return DataTables::of($data)
                    
                    ->addColumn('user_info', function($row){
                            $user_info = $row->getUserInfo ? $row->getUserInfo->name . '<br/><small>' . $row->getUserInfo->email . '</small>' : '';
                            return $user_info;
                    })

                    ->addColumn('Category', function($row){
                        $category = $row->getCategoryInfo ? $row->getCategoryInfo->name : '';

                        return $category;
                    })

                    ->addColumn('Title', function($row){
                        $title = $row->title;

                        return $title;
                    })

                    ->addColumn('Price', function($row){
                        $price = $row->price;

                        return '$'.$price;
                    })

                    ->addColumn('status', function($row){
                        if($row->status == 0){
                            $status = "<div class='badge rounded-pill bg-warning'>Pending</div>";
                        }elseif($row->status == 1){
                            $status = "<div class='badge rounded-pill bg-success'>Approved</div>";
                        }else{
                            $status = "<div class='badge rounded-pill bg-danger'>Rejected</div>";
                        } 

                        return  $status;
                    })

                    ->addColumn('date_created', function($row){
                        return  $row->created_at->diffForHumans();
                    })

                    ->addColumn('Post_type', function($row){
                        if($row->post_type == 0){
                            $post_type = 'Discussions';
                        }elseif($row->post_type == 1){
                            $post_type = 'Trading';
                        }else{
                            $post_type = 'Auction';
                        }

                        return $post_type;
                    })

                    ->addIndexColumn()
                    ->addColumn('action', function($row){

                    $btn = '<a href="'.route("admin.post.view_post",["$row->id"]).'" class="edit btn btn-primary btn-sm">View</a>';
                    
                    if($row->status == 0){ 
                        $btn .= '| <a href="javascript:void(0)" onclick="approval_confirmation('.$row->id.',\'1\')" data-id="approve" class="edit btn btn-success btn-sm">Approve</a>';
                        $btn .= '|<a href="javascript:void(0)" onclick="approval_confirmation('.$row->id.',\'2\')" class="edit btn btn-warning btn-sm">Reject</a>';

                        $btn .= '|<a href="javascript:void(0)" onclick="approval_confirmation('.$row->id.',\'3\')" class="edit btn btn-danger btn-sm">Deleted</a>';

                    }

                    if($row->status == 1){
                        $btn .= '|<a href="javascript:void(0)" onclick="approval_confirmation('.$row->id.',\'2\')" class="edit btn btn-warning btn-sm">Reject</a>';

                        $btn .= '|<a href="javascript:void(0)" onclick="approval_confirmation('.$row->id.',\'3\')" class="edit btn btn-danger btn-sm">Deleted</a>';

                    }

                    if($row->status == 2){
                        $btn .= '| <a href="javascript:void(0)" onclick="approval_confirmation('.$row->id.',\'1\')" data-id="approve" class="edit btn btn-success btn-sm">Approve</a>';
                        $btn .= '|<a href="javascript:void(0)" onclick="approval_confirmation('.$row->id.',\'3\')" class="edit btn btn-danger btn-sm">Deleted</a>';
                    }

                    // if($row->status == 1){
                    //     $btn .= '| <a href="javascript:void(0)" class="edit btn btn-warning btn-sm">pending</a>';
                    // }



                            return $btn;
                    })
                    ->rawColumns(['action', 'user_info','Category','Title','Post_type','Price','status','date_created'])
                    ->make(true);
        }
        return view('Admin.post.index');
    }


    public function view_post($id){
        $post = Post::findorfail($id);
        return view('Admin.post.view',compact('post'));
    }

    public function change_status(Request $request, $id){
            Post::where('id',$id)->update(array(
                'status' => $request->status,
            ));

            if($request->status == '2'){
                Post::where('id',$id)->update(array(
                    'is_active' => 0, 
                ));    
            }

            if($request->status == '1'){
                Post::where('id',$id)->update(array(
                    'is_active' => 1, 
                ));  
            }

            if($request->status == '3'){
                Post::where('id',$id)->update(array(
                    'is_active' => 0, 
                ));  
            }

            return response()->json(array(
                'message' => 'success',
            ));
    }
}
