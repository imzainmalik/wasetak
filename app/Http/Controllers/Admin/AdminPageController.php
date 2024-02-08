<?php

namespace App\Http\Controllers\Admin;

use App\Models\AdminPage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\FlagedPage;
use App\Models\PageLike;
use App\Models\PageReply;
use App\Models\PushNotification;
use App\Models\UserNotifiedAllow;
use App\Models\User;
use Carbon\Carbon;
use Yajra\DataTables\Facades\DataTables;

class AdminPageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
         
        if ($request->ajax()) {
            $data = AdminPage::get();
            return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        // 
                           $btn = '<a href="'.route('admin.pages.edit', [$row->id]).'" class="edit btn btn-primary m-1 btn-sm">Edit</a>';
                           $btn .= '<a href="'.route('admin.page.page_comments', [$row->id]).'" class="edit btn btn-primary btn-sm">View Comment</a>';
                            return $btn;
                    })
                    ->addColumn('status', function($row){
                           $status = $row->is_active == 1 ? '<div class="badge rounded-pill bg-success">Active</div>' : '<div class="badge rounded-pill bg-danger">In-Active</div>';
                            return $status;
                    })
                    ->addColumn('content', function($row){
                           $content = strlen(strip_tags($row->content)) > 40 ?  substr_replace(strip_tags($row->content),"...   ", 90, ) : '' ;
                            return $content;
                    })
                    ->rawColumns(['action', 'status'])
                    ->make(true);
        }
        return view('Admin.Pages.index', get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $page = null;
        $parent_pages = AdminPage::whereNull('parent_id')->get();
        $admins = Admin::get();
        return view('Admin.Pages.create', get_defined_vars());
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            "name" => "required",
            "heading" => "required",
            "sub_heading" => "sometimes",
            "content" => "required",
            "parent_id" => "sometimes",
            "is_active" => "required",
            "admin_id" => "required"
        ]); 
            if($request->id){
                $admin_page = AdminPage::find($request->id);
                $admin_page->name = $validated['name'];
                $admin_page->heading = $validated['heading'];
                $admin_page->sub_heading = $validated['sub_heading'];
                $admin_page->parent_id = $validated['parent_id'];
                $admin_page->content = $validated['content'];
                $admin_page->is_active = $validated['is_active'];
                $admin_page->admin_id = $validated['admin_id'];
                $admin_page->save();
                $notification = "Page Create Successfully";
            }else{
                AdminPage::create($validated);
                $notification = "Page Create Successfully";
            }
            return redirect()->route('admin.pages.index')->with('Success', $notification);
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id,AdminPage $adminPage)
    { 
        $parent_pages = AdminPage::whereNull('parent_id')->get();
        $admins = Admin::get();
        $page = AdminPage::find($id);
        return view('Admin.Pages.create', get_defined_vars()); 
    }
 
    public function view_page_likes(Request $request){ 

        if ($request->ajax()) {

                $data = PageLike::all();

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
                    $post_by = $row->getPageByAdminInfo ? $row->getPageByAdminInfo->getAdminInfo->first_name . '<br/><small>' . $row->getPageByAdminInfo->getAdminInfo->email . '</small><br>' : '';
                    return $post_by;
                })

                ->addColumn('post_details', function($row){
                    $post_details = $row->getPageDetails ? $row->getPageDetails->heading : '';
                    return $post_details;
                })

                ->addColumn('created_at', function($row){
                    return Carbon::create($row->created_at)->diffForHumans();
                })  
                ->addColumn('action', function($row){
                    $delt = '<a href="'. route('admin.pages.page_like_delete', [$row->id]) .'" class="btn btn-danger"> Delete</a>'; 
                    return $delt;
                })   
                ->rawColumns(['action','liked_by','post_by','post_details','created_at'])->make(true); 
        } 
        return view('Admin.pages.like.index');
    }


    function page_like_delete($id){
        $page_like = PageLike::find($id);
        if($page_like){
            $page_like->delete();
        }else{
            abort(403);
        }
        $notification = "Like Successfully Deleted";
        return redirect()->route('admin.pages.view_page_likes')->with('Success', $notification);
    }
    
    public function view_page_comments( Request $request , $page_id = null ){
        
 
        if($page_id){
            $page = AdminPage::where('id',$page_id)->first(); 
            $data = PageReply::where('page_id',$page_id)->get(); 
        }else{
            $data = PageReply::all();
        }
        if ($request->ajax()) { 
            return DataTables::of($data)
                ->addColumn('commented_by', function($row){ 
                    $user_info = $row->getCommentedByUserInfo ? $row->getCommentedByUserInfo->name . '<br/><small>' . $row->getCommentedByUserInfo->email . '</small><br>' : '';
                    if($row->getCommentedByUserInfo == null){
                        $user_info .= '<div class="badge rounded-pill bg-danger">Email is not verified</div>';
                     }else{
                        $user_info .= '<div classdiv="badge rounded-pill bg-success">Email verified</div>';
                     }
                    return $user_info;
                })

                ->addColumn('posted_by', function($row){
                    $user_info = $row->getPageByAdminInfo->getAdminInfo ? $row->getPageByAdminInfo->getAdminInfo->first_name . '<br/><small>' . $row->getPageByAdminInfo->getAdminInfo->email . '</small><br>'   : '';
                    return $user_info;
                })

                ->addColumn('post_details', function($row){
                    $post_by = $row->getPageDetails ? $row->getPageDetails->name : '';
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
                        return '<a href="javascript:void(0)" onclick="delete_comment_page('.$row->id.',\'0\')" class="btn btn-danger">Un-Published</a>';
                    }else{
                        return '<a href="javascript:void(0)" onclick="delete_comment_page('.$row->id.',\'1\')" class="btn btn-success">Published</a>';
                    }
                    // return Carbon::create($row->created_at)->diffForHumans();
                })  

                ->addColumn('created_at', function($row){
                    return Carbon::create($row->created_at)->diffForHumans();
                })  
                ->rawColumns(['commented_by','post_details','posted_by','created_at','actions','comment_status'])
            ->make(true); 
        }

        return view('Admin.Pages.comment.index', get_defined_vars());
    }  


    
    public function delete_comments_page(Request $request,$comment_id){ 

   
        $page_reply =  PageReply::where('id', $comment_id)->first();
        
        $comment = $page_reply->reply;
        preg_match_all('/@(\w+)/', $comment, $matches);
        $mentionedUsers = $matches[1];
        $page = AdminPage::find($page_reply->page_id);

       
        if($request->status == 1){
            foreach ($mentionedUsers as $user) {
                $userid = User::where('username', $user)->first();
                if ($userid) {
                    $user_notified = UserNotifiedAllow::where('user_id',$userid->id)->where('type',0)->where('type_id',$page->id)->first();
                    if($user_notified && $user_notified->notification_type == 4){
                    }else{
                        $send_notification['user_id'] = [$userid->id];
                        $send_notification['title'] = $page_reply->getCommentedByUserInfo ? $page_reply->getCommentedByUserInfo->name : '';
                        $send_notification['body'] = "Mention on his Page - @". $userid->username;
                        $send_notification['url'] = route('user.userPage',[$page->slug]);
                        $send_notification['user_id_from'] = $page_reply->user_id;
                        $send_notification['type'] = 4;
                        $send_notification['type_id'] = $page_reply->id;
                        like_notification($send_notification);
                    }
                }
            }
            $user_notified_watching = UserNotifiedAllow::where('notification_type', 1)->where('type',0)->where('type_id',$page->id)->get()
            ->pluck('user_id')->toArray();
        
            if(count($user_notified_watching) > 0){
                $send_notification['user_id'] = $user_notified_watching;
                $send_notification['title'] = $page_reply->getPageDetails ? $page_reply->getPageDetails->name : '';
                $send_notification['body'] = "SomeOne Reply to this Page";
                $send_notification['url'] = route('user.userPage',[$page->slug]);
                $send_notification['user_id_from'] = $page_reply->user_id;
                $send_notification['type'] = 4;
                $send_notification['type_id'] = $page_reply->id;
                like_notification($send_notification);
            }
    

        }else{
            foreach ($mentionedUsers as $user) {
                $userid = User::where('username', $user)->first();
                if ($userid) {
                    $notifications = PushNotification::where('user_id_to', $userid->id)
                                                        ->where('user_id_from', $page_reply->user_id)
                                                        ->where('type',4)->where('type_id',$page_reply->id)
                                                        ->get();
                    if(count($notifications) > 0){
                        foreach($notifications as $noti){
                            $noti->delete(); 
                        }
                    }
                }
            }
        }


        $page_reply->is_active = $request->status;
        $page_reply->save();

        
        return response()->json([
            'message' => 'success'
        ]);
    } 
    public function flaged_pages(Request $request){
 
        if ($request->ajax()) { 
            $flagged_post = FlagedPage::all();

            return DataTables::of($flagged_post) 
            ->addColumn('reported_by', function($row){
                    $reported_by_user = $row->flaggedPageByUser->name .'<br>';
                    $reported_by_user .= '<small>'.$row->flaggedPageByUser->email.'</small><br>';
                    $reported_by_user .= '<small>Username: '.$row->flaggedPageByUser->username.'</small><br>';
                     if($row->flaggedPageByUser->email_verified_at == null){
                        $reported_by_user .= '<div class="badge rounded-pill bg-danger">Email is not verified</div>';
                     }else{
                        $reported_by_user .= '<div class="badge rounded-pill bg-success">Email verified</div>';
                     }

                return $reported_by_user;
            })

            ->addColumn('post_details', function($row){
                $post_details = '<b>'.$row->flaggedPageDetails->name.'</b><br>';
                return $post_details;
            })

            ->addColumn('posted_by', function($row){
                $post_user =  $row->flaggedPageDetails->getAdminInfo->first_name.'<br>';
                $post_user .=  '<small>'.$row->flaggedPageDetails->getAdminInfo->email.'</small><br>';
                return $post_user;
            })
            ->addColumn('reason_status', function($row){

                if($row->reveal == 1){
                    $reason_status = 'URL/@Handle Reveal';
                }
                elseif($row->inappropriate = 1){
                    $reason_status = 'It\'s Inappropriate';
                }
                elseif($row->its_spam == 1){
                    $reason_status = 'It\'s Spam';
                }
                elseif($row->something_else == 1){
                    $reason_status = 'Something Else';
                }else{
                    $reason_status = 'None';
                } 
                // URL/@Handle Reveal
                return $reason_status;
            })

            ->addColumn('created_at', function($row){
                return isset($row->created_at) != null ? Carbon::create($row->created_at)->diffForHumans() : 'None';
            }) 

            ->addColumn('actions', function($row){ 
                if($row->flaggedPageDetails->is_active == 1){
                    $btn = '<a href="javascript:void()" onclick="approval_confirmation_page('.$row->flaggedPageDetails->id.',\'0\')" class="btn btn-danger">Remove Page From Application</a>';
                }else{
                    $btn = '<a href="javascript:void()" onclick="approval_confirmation_page('.$row->flaggedPageDetails->id.',\'1\')" class="btn btn-success">Restore This Page</a>';
                }
                 return $btn;
            })

            ->addIndexColumn() 
                ->rawColumns(['created_at','reported_by','post_details','posted_by','actions', 'reason_status'])
                ->make(true);
        }
        return view('admin.pages.flagged.index');
    } 

    public function flaged_change_status(Request $request, $id){
  
        AdminPage::where('id',$id)->update(array(
            'is_active' => $request->status,
            
        ));

        return response()->json(array(
            'message' => 'success',
        ));
}



}
