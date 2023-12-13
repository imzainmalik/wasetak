<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\SubCategory;
use App\Models\ForumCategory;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class AdminSubCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(Request $request)
    {
   
        if ($request->ajax()) {
            $data = SubCategory::get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                           $btn = '<a href="'.route('admin.subcategory.edit', [$row->id]).'" class="edit btn btn-primary btn-sm">Edit</a>';
                            return $btn;
                    })
                    ->addColumn('status', function($row){
                           $status = $status = $row->is_active == 1 ? '<div class="badge rounded-pill bg-success">Active</div>' : '<div class="badge rounded-pill bg-danger">In-Active</div>';
                            return $status;
                    })
                    ->addColumn('parent_category', function($row){
                           $cat = $row->forum_category ? $row->forum_category->name : '';
                            return $cat;
                    })
                    ->addColumn('color', function($row){
                           $color = '<div class="topic_social topic_social_media" style="background-color:'.$row->color.';
                           margin: 10px; "></div>';
                            return $color;
                    })
                    ->rawColumns(['action', 'status', 'color', 'parent_category'])
                    ->make(true);
        }
        
        return view('Admin.SubCategory.index');
    }
    
    public function create()
    {   $sub_category = null;
        $categories = ForumCategory::get();

        return view('Admin.SubCategory.create',get_defined_vars());
    }
    public function store(Request $request)
    {
    
        $validated = $request->validate([
            "name" => "required",
            "forum_category_id" => "required",
            "color" => "required",
            "description" => "sometimes",
            "is_active" => "required"
        ]);
            if($request->id){
            $sub_category = SubCategory::find($request->id);
            $sub_category->name = $validated['name'];
            $sub_category->color = $validated['color'];
            $sub_category->forum_category_id = $validated['forum_category_id'];
            $sub_category->description = $validated['description'];
            $sub_category->is_active = $validated['is_active'];
            $sub_category->save();
            $notification = "Sub Category Update Successfully";
            }else{
                SubCategory::create($validated);
                $notification = "Sub Category Create Successfully";
            }
        return redirect()->route('admin.subcategory.index')->with('Success', $notification);
    }



    public function edit($id , Request $request)
    {   $sub_category =  SubCategory::find($id);
        $categories = ForumCategory::get();
        return view('Admin.SubCategory.create', get_defined_vars());
    }


   



}
