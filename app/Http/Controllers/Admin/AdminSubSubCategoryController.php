<?php

namespace App\Http\Controllers\Admin;

use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Models\SubSubCategory;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class AdminSubSubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */


     public function __construct()
    {
        $this->middleware('auth');
    }




    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = SubSubCategory::get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                           $btn = '<a href="'.route('admin.subsubcategory.edit', [$row->id]).'" class="edit btn btn-primary btn-sm">Edit</a>';
                            return $btn;
                    })
                    ->addColumn('status', function($row){
                           $status = $status = $row->is_active == 1 ? '<div class="badge rounded-pill bg-success">Active</div>' : '<div class="badge rounded-pill bg-danger">In-Active</div>';
                            return $status;
                    })
                    ->addColumn('parent_category', function($row){
                           $cat = $row->sub_category ? $row->sub_category->name : '';
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
        
        return view('Admin.SubSubCategory.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $sub_sub_category = null;
        $sub_categories = SubCategory::get();

        return view('Admin.SubSubCategory.create',get_defined_vars());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            "name" => "required",
            "sub_category_id" => "required",
            "color" => "required",
            "description" => "sometimes",
            "is_active" => "required"
        ]);
            if($request->id){
            $sub_sub_category = SubSubCategory::find($request->id);
            $sub_sub_category->name = $validated['name'];
            $sub_sub_category->color = $validated['color'];
            $sub_sub_category->sub_category_id = $validated['sub_category_id'];
            $sub_sub_category->description = $validated['description'];
            $sub_sub_category->is_active = $validated['is_active'];
            $sub_sub_category->save();
            $notification = "Sub Sub Category Update Successfully";
            }else{
                SubSubCategory::create($validated);
                $notification = "Sub Sub Category Create Successfully";
            }
        return redirect()->route('admin.subsubcategory.index')->with('Success', $notification);
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $sub_sub_category =  SubSubCategory::find($id);
        $sub_categories = SubCategory::get();
        return view('Admin.SubSubCategory.create', get_defined_vars());
    }


}
