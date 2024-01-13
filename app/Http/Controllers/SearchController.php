<?php

namespace App\Http\Controllers;

use App\Models\ForumCategory;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\PostReply;
use App\Models\SubCategory;

use App\Models\User;
use App\Models\PostLike;
use App\Models\PostView;
use App\Models\Bookmark;
use Auth;
class SearchController extends Controller
{
    //

    public function index(Request $request){
        $query_input = $request->input('query');
        
        // dd($request->all());
        $categories = ForumCategory::where('is_active', 1)->get();
        foreach ($categories as $key => $value) {
            $all_categories[$key]['id'] =  $value->id;
            $all_categories[$key]['name'] =  $value->name;
            $all_categories[$key]['description'] =  $value->description;
            $all_categories[$key]['color'] =  $value->color;
            $sub_cats = SubCategory::where('forum_category_id',$value->id)->get();
                foreach ($sub_cats as $k => $val) {
                    $all_categories[$key][$k]['child_id'] = $val->id;
                    $all_categories[$key][$k]['child_name'] = $val->name ;
                    $all_categories[$key][$k]['child_color'] = $val->color; 
                    $all_categories[$key][$k]['child_description'] = $val->description; 
                } 
        }
            // dd($all_categories);
        $posts = Post::with('getUserInfo')->where('is_active', 1);
        
        if($request->query != null){
           $posts->where('title','LIKE','%'. $request->input('query'). '%');
        }

        if($request->main_cate != null){
            $posts->where('category_id',$request->input('main_cate'));
            $main_category = ForumCategory::where('id', $request->main_cate)->first();
        }

        if($request->daterange != null){ 
            $posts->whereDate('created_at','>=',\Carbon\Carbon::parse($request->input('daterange')));
            // dd($posts->get());
        } 

        if($request->where_topics != null){
        
            if($request->input('where_topics') == 0){ 
               
                $posts->withCount('getPostReplies as getPostReplies_count')
                ->having('getPostReplies_count', '<', 1); 
                // dd($posts->get());
            }elseif($request->input('where_topics') == 1){
                
                $posts->withCount('getPostLikes as getPostLikes_count')
                ->having('getPostLikes_count', '<', 1);
                // dd($posts->get());
            }elseif($request->input('where_topics') == 2){
                
                $posts->withCount('getPostViews as getPostViews_count')
                ->having('getPostViews_count', '<', 1);
                // dd($posts->get());
            }
            $where_topics = $request->where_topics;
           
        }
        // dd($where_topics);
        $posts = $posts->get();
        return view('User.search_listing',get_defined_vars());
    }


        if($request->matching_title != null){
            $posts->where('title', $request->input('query'));

            $matching_title = $request->matching_title;
        }
        if($request->main_cate != null){
            $posts->where('category_id',$request->input('main_cate'));
            $main_category = ForumCategory::where('id', $request->main_cate)->first();
        }
        if($request->daterange != null){ 
            $posts->whereDate('posts.created_at','>=',\Carbon\Carbon::parse($request->input('daterange')));
            // dd($posts->get());
        }
        if($request->where_topics != null){ 
            if($request->input('where_topics') == 0){  
                $posts->withCount('getPostReplies as getPostReplies_count')
                ->having('getPostReplies_count', '<', 1);

            }elseif($request->input('where_topics') == 1){ 
                $posts->withCount('getPostLikes as getPostLikes_count')
                ->having('getPostLikes_count', '<', 1);

            }elseif($request->input('where_topics') == 2){
                $posts->withCount('getPostViews as getPostViews_count')
                ->having('getPostViews_count', '<', 1);
                // dd($posts->get());
            }
            $where_topics = $request->where_topics;
        } 
        if($request->posted_by != null){

            $get_user = User::where('username', $request->posted_by)->first();

            if($get_user != null){
                $posts->where('user_id', $get_user->id);
            }
            $posted_by = $request->posted_by;
        } 
        if($request->i_liked != null){ 
           $get_my_liked = PostLike::where('user_id',Auth::user()->id)->pluck('post_id')->toArray(); 
           $posts->whereIn('posts.id',$get_my_liked);
           $i_liked = $request->i_liked;
        }
        if($request->i_read != null){
            $get_my_viewed_post = PostView::where('user_id', Auth::user()->id)->pluck('post_id')->toArray(); 
             
            $posts->whereIn('posts.id',$get_my_viewed_post);
            // dd($posts->get());
            $i_read = $request->i_read;
        }
        if($request->i_bookmarked != null){
            $get_my_bookmarked = Bookmark::where('user_id',Auth::user()->id)->pluck('post_id')->toArray();
            $posts->whereIn('posts.id',$get_my_bookmarked);
            // dd($posts->get());
            $i_bookmarked = $request->i_bookmarked;
        }
        if($request->min_views && $request->max_views){
            $minViews = $request->min_views;
            $maxViews = $request->max_views;

            $posts->join('post_views', 'posts.id', '=', 'post_views.post_id')
            ->whereBetween('post_views.id', [$minViews, $maxViews]);
                // dd($posts->toSql());
            
                // $posts->whereHas('getPostViews', function ($query) use ($minViews, $maxViews) {
                //     $query->select('post_id')
                //         ->groupBy('post_id')
                //         ->havingRaw('COUNT(*) BETWEEN ? AND ?', [$minViews, $maxViews]);
                // })->count();
                // dd($posts->get());
        }

        if($request->min_likes && $request->max_likes){

            $minLikes = $request->min_likes;
            $maxLikes = $request->max_likes;

            $posts->whereHas('getPostLikes', function ($query) use ($minLikes, $maxLikes) {
                $query->select('post_id')
                    ->groupBy('post_id')
                    ->havingRaw('COUNT(*) BETWEEN ? AND ?', [$minLikes, $maxLikes]);
            });
            
            // dd($posts->get());
        }
        // dd($where_topics);
        $posts = $posts->get();
        return view('User.search_listing',get_defined_vars());
    } 
}
