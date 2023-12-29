<?php

namespace App\Http\Controllers\Admin;

use App\Models\AdminPage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin;
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
                           $btn = '<a href="'.route('admin.pages.edit', [$row->id]).'" class="edit btn btn-primary btn-sm">Edit</a>';
                            return $btn;
                    })
                    ->addColumn('status', function($row){
                           $status = $row->is_active == 1 ? '<div class="badge rounded-pill bg-success">Active</div>' : '<div class="badge rounded-pill bg-danger">In-Active</div>';
                            return $status;
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
            "content" => "required",
            "parent_id" => "sometimes",
            "is_active" => "required",
            "admin_id" => "required"
        ]);

            if($request->id){
            $admin_page = AdminPage::find($request->id);
            $admin_page->name = $validated['name'];
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
     * Display the specified resource.
     */
    public function show(AdminPage $adminPage)
    {
        //
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

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AdminPage $adminPage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AdminPage $adminPage)
    {
        //
    }
}
