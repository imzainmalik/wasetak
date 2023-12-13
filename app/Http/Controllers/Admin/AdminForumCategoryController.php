<?php

namespace App\Http\Controllers\Admin;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Models\ForumCategory;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class AdminForumCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(Request $request)
    {
        
        if ($request->ajax()) {
            $data = ForumCategory::get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                           $btn = '<a href="'.route('admin.category.edit', [$row->id]).'" class="edit btn btn-primary btn-sm">Edit</a>';
                            return $btn;
                    })
                    ->addColumn('status', function($row){

                           $status = $row->is_active == 1 ? '<div class="badge rounded-pill bg-success">Active</div>' : '<div class="badge rounded-pill bg-danger">In-Active</div>';
                            return $status;
                    })
                    ->addColumn('color', function($row){
                           $color = '<div class="topic_social topic_social_media" style="background-color:'.$row->color.';
                           margin: 10px; "></div>';
                            return $color;
                    })
                    ->rawColumns(['action', 'status', 'color'])
                    ->make(true);
        }
        
        return view('Admin.Category.index');
    }
    
    public function create()
    {   $category = null;
        return view('Admin.Category.create',get_defined_vars());
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            "name" => "required",
            "color" => "required",
            "description" => "sometimes",
            "is_active" => "required"
        ]);
            if($request->id){
            $category = ForumCategory::find($request->id);
            $category->name = $validated['name'];
            $category->color = $validated['color'];
            $category->description = $validated['description'];
            $category->is_active = $validated['is_active'];
            $category->save();
            $notification = "Category Update Successfully";
            }else{
                ForumCategory::create($validated);
                $notification = "Category Create Successfully";
            }
        return redirect()->route('admin.category.index')->with('Success', $notification);
    }



    public function edit($id , Request $request)
    {   $category =  ForumCategory::find($id);
        return view('Admin.Category.create', get_defined_vars());
    }


    public function change_status(Request $request, $id)
    {
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
