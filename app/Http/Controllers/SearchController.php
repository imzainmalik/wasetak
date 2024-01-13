<?php

namespace App\Http\Controllers;

use App\Models\ForumCategory;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\PostReply;
use App\Models\SubCategory;

class SearchController extends Controller
{
    //

    public function index(Request $request){
        $query_input = $request->input('query');
        
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



    
}
