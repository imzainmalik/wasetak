<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Post;
use Carbon\Carbon;
use App\Models\FlagedPost;
use Yajra\DataTables\Facades\DataTables;

class AdminFlaggedPostController extends Controller
{
    public function index(Request $request){

        if ($request->ajax()) {

            $flagged_post = FlagedPost::all();

            return DataTables::of($flagged_post) 
            ->addColumn('reported_by', function($row){
                    $reported_by_user = $row->flaggedPostByUser->name .'<br>';
                    $reported_by_user .= '<small>'.$row->flaggedPostByUser->email.'</small><br>';
                    $reported_by_user .= '<small>Username: '.$row->flaggedPostByUser->username.'</small><br>';
                     if($row->flaggedPostByUser->email_verified_at == null){
                        $reported_by_user .= '<div class="badge rounded-pill bg-danger">Email is not verified</div>';
                     }else{
                        $reported_by_user .= '<div class="badge rounded-pill bg-success">Email verified</div>';
                     }

                return $reported_by_user;
            })

            ->addColumn('post_details', function($row){
                $post_details = '<b>'.$row->flaggedPostDetails->title.'</b><br>';
                $post_details .= '<a href="'.route('user.post_detail',$row->flaggedPostDetails->id).'"> Click to view Complete Details </a><br>';

                if($row->flaggedPostDetails->status == 3){
                    $post_details .= '<div class="badge rounded-pill bg-danger">This post is removed</div>';
                }

                if($row->flaggedPostDetails->status == 1){
                    $post_details .= '<div class="badge rounded-pill bg-warning">Approved by admin</div>';
                }

                if($row->flaggedPostDetails->status == 2){
                    $post_details .= '<div class="badge rounded-pill bg-info">Rejected by admin</div>';
                }

                if($row->flaggedPostDetails->is_active == 1){
                    $post_details .= '<div class="badge rounded-pill bg-success">This post is publish</div>';
                }
                
                return $post_details;
            })

            ->addColumn('posted_by', function($row){
                $post_user =  $row->flaggedPostDetails->getUserInfo->name.'<br>';
                $post_user .=  '<small>'.$row->flaggedPostDetails->getUserInfo->email.'</small><br>';
                $post_user .=  '<small>Username: '.$row->flaggedPostDetails->getUserInfo->username.'</small><br>';
                 if($row->flaggedPostDetails->getUserInfo->email_verified_at == null){
                    $post_user .= '<div class="badge rounded-pill bg-danger">Email is not verified</div>';
                 }else{
                    $post_user .= '<div class="badge rounded-pill bg-success">Email verified</div>';
                 }
 
                 if($row->flaggedPostDetails->getUserInfo->is_active == 0){
                    $post_user .= '<div class="badge rounded-pill bg-danger">Account is Disabled</div>';
                 }else{
                    $post_user .= '<div class="badge rounded-pill bg-success">Account is Active</div>';
                 }
                return $post_user;
            })

           
            ->addColumn('created_at', function($row){
                return isset($row->created_at) != null ? Carbon::create($row->created_at)->diffForHumans() : 'None';
            }) 

            ->addColumn('actions', function($row){
                if($row->flaggedPostDetails->getUserInfo->is_active == 1){
                    $btn = '<a href="javascript:void()" onclick="change_account_status('.$row->flaggedPostDetails->getUserInfo->id.',\'0\')" class="btn btn-danger">Disable User Account</a> | ';
                }else{
                    $btn = '<a href="javascript:void()" onclick="change_account_status('.$row->flaggedPostDetails->getUserInfo->id.',\'1\')" class="btn btn-success">Enable User Account</a> | ';
                }
                
                if($row->flaggedPostDetails->status == 1){
                    $btn .= '<a href="javascript:void()" onclick="approval_confirmation('.$row->flaggedPostDetails->id.',\'3\')" class="btn btn-danger">Remove Post From Application</a>';
                }else{
                    $btn .= '<a href="javascript:void()" onclick="approval_confirmation('.$row->flaggedPostDetails->id.',\'1\')" class="btn btn-success">Restore This Post</a>';
                }
                 return $btn;
            })

            ->addIndexColumn() 

                ->rawColumns(['created_at','reported_by','post_details','posted_by','actions'])
                ->make(true);

        }
        return view('Admin.post.flagged.index');
    }
}   
