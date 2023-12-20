<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\PostLike;
use App\Models\PostReply;
use App\Models\PostViews;
use Carbon\Carbon;
use Yajra\DataTables\Facades\DataTables;

class AdminPostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(Request $request){
    //    $post = Post::find(1);
    //    dd($post->getSubCategoryInfo);
        if ($request->ajax()) {
            $data = Post::where('status','!=',3);

            return DataTables::of($data)
                    
                    ->addColumn('user_info', function($row){
                            $user_info = $row->getUserInfo ? $row->getUserInfo->name . '<br/><small>' . $row->getUserInfo->email . '</small>' : '';
                            return $user_info;
                    })

                    ->addColumn('Category', function($row){
                        $category =  $row->getCategoryInfo ? $row->getCategoryInfo->name : '';

                        return $category;
                    })

                    ->addColumn('total_views', function($row){
                        if($row->getPostTotal != null){
                            $views = 'his post has <i class="fa fa-eye"></i> '.$row->getPostTotal->count().'times Views';
                        }else{
                            $views = 'his post has <i class="fa fa-eye"></i> 0 times Views';
                        }
                        return $views;
                    })

                    ->addColumn('sub_category_id', function($row){
                        $sub_category = 
                        $row->getSubCategoryInfo ? $row->getSubCategoryInfo->name : '';

                        return $sub_category;
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
                    ->rawColumns(['action','total_views', 'user_info','Category','Title','Post_type','Price','status','date_created','sub_category_id'])
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


    public function view_post_likes(Request $request){
        if ($request->ajax()) {

                $data = PostLike::all();

                return DataTables::of($data)
                    
                ->addColumn('liked_by', function($row){
                    $user_info = $row->getLikedUserInfo ? $row->getLikedUserInfo->name . '<br/><small>' . $row->getLikedUserInfo->email . '</small><br>' : '';
                    if($row->getLikedUserInfo->email_verified_at == null){
                        $user_info .= '<div class="badge rounded-pill bg-danger">Email is not verified</div>';
                     }else{
                        $user_info .= '<div class="badge rounded-pill bg-success">Email verified</div>';
                     }
                    return $user_info;
                })
                 
                ->addColumn('post_by', function($row){
                    $post_by = $row->getPostByUserInfo ? $row->getPostByUserInfo->getUserInfo->name . '<br/><small>' . $row->getPostByUserInfo->getUserInfo->email . '</small><br>' : '';
                    if($row->getPostByUserInfo->getUserInfo->email_verified_at == null){
                        $post_by .= '<div class="badge rounded-pill bg-danger">Email is not verified</div>';
                     }else{
                        $post_by .= '<div class="badge rounded-pill bg-success">Email verified</div>';
                     }
                    return $post_by;
                })

                ->addColumn('post_details', function($row){
                    $post_by = $row->getPostDetails ? $row->getPostDetails->title . '<br/><small>' . 
                     '$'.$row->getPostDetails->price . '</small><br>' : '';
                    
                    if($row->getPostDetails->status == 3){
                        $post_by .= '<div class="badge rounded-pill bg-danger">This post is removed</div>';
                    }
    
                    if($row->getPostDetails->status == 1){
                        $post_by .= '<div class="badge rounded-pill bg-warning">Approved by admin</div>';
                    }
    
                    if($row->getPostDetails->status == 2){
                        $post_by .= '<div class="badge rounded-pill bg-info">Rejected by admin</div>';
                    }
    
                    if($row->getPostDetails->is_active == 1){
                        $post_by .= '<div class="badge rounded-pill bg-success">This post is publish</div>';
                    }
                    return $post_by;
                })

                ->addColumn('created_at', function($row){
                    return Carbon::create($row->created_at)->diffForHumans();
                })  
 
                ->rawColumns(['liked_by','post_by','post_details','created_at'])
                ->make(true); 
        }

        return view('Admin.post.like.index');
    }

    public function view_post_comments(Request $request){
        if ($request->ajax()) {
            $data = PostReply::all();

            return DataTables::of($data)
                    
                ->addColumn('commented_by', function($row){
                    $row->getCommentedByUserInfo->name;

                    $user_info = $row->getCommentedByUserInfo ? $row->getCommentedByUserInfo->name . '<br/><small>' . $row->getCommentedByUserInfo->email . '</small><br>' : '';
                    if($row->getCommentedByUserInfo->email_verified_at == null){
                        $user_info .= '<div class="badge rounded-pill bg-danger">Email is not verified</div>';
                     }else{
                        $user_info .= '<div class="badge rounded-pill bg-success">Email verified</div>';
                     }
                    return $user_info;
                })

                ->addColumn('posted_by', function($row){
                    $user_info = $row->getPostedUserInfo->getUserInfo ? $row->getPostedUserInfo->getUserInfo->name . '<br/><small>' . $row->getPostedUserInfo->getUserInfo->email . '</small><br>' : '';
                    if($row->getPostedUserInfo->getUserInfo->email_verified_at == null){
                        $user_info .= '<div class="badge rounded-pill bg-danger">Email is not verified</div>';
                     }else{
                        $user_info .= '<div class="badge rounded-pill bg-success">Email verified</div>';
                     }
                    return $user_info;
                })

                ->addColumn('post_details', function($row){
                    $post_by = $row->getPostDetailsFromReply ? $row->getPostDetailsFromReply->title . '<br/><small>' . 
                     '$'.$row->getPostDetailsFromReply->price . '</small><br>' : '';
                    
                    if($row->getPostDetailsFromReply->status == 3){
                        $post_by .= '<div class="badge rounded-pill bg-danger">This post is removed</div>';
                    }

                    if($row->getPostDetailsFromReply->status == 1){
                        $post_by .= '<div class="badge rounded-pill bg-warning">Approved by admin</div>';
                    }
 
                    if($row->getPostDetailsFromReply->status == 2){
                        $post_by .= '<div class="badge rounded-pill bg-info">Rejected by admin</div>';
                    }
 
                    if($row->getPostDetailsFromReply->is_active == 1){
                        $post_by .= '<div class="badge rounded-pill bg-success">This post is publish</div>';
                    }

                    return $post_by;
                })

                ->addColumn('comment_status', function($row){
                    if($row->is_active == 1){
                        return '<div class="badge rounded-pill bg-success">This comment is visible for everyone</div>';
                    }else{
                        return '<div class="badge rounded-pill bg-danger">This comment is not visible to anyone</div>';
                    }
                    // return Carbon::create($row->created_at)->diffForHumans();
                })  

                ->addColumn('actions', function($row){
                    if($row->is_active == 1){
                        return '<a href="javascript:void(0)" onclick="delete_comment('.$row->id.',\'0\')" class="btn btn-danger">Delete this comment</a>';
                    }else{
                        return '<a href="javascript:void(0)" onclick="delete_comment('.$row->id.',\'1\')" class="btn btn-success">Restore Comment</a>';
                    }
                    // return Carbon::create($row->created_at)->diffForHumans();
                })  

                ->addColumn('created_at', function($row){
                    return Carbon::create($row->created_at)->diffForHumans();
                })  
 
                ->rawColumns(['commented_by','post_details','posted_by','created_at','actions','comment_status'])

            ->make(true); 
        }

        return view('Admin.post.comment.index');
    }   


    public function delete_comments(Request $request,$comment_id){
        PostReply::where('id', $comment_id)->update(array(
            'is_active' => $request->status
        ));
        return response()->json([
            'message' => 'success'
        ]);
    }
}
