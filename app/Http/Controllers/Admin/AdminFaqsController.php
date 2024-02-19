<?php

namespace App\Http\Controllers\Admin;

use App\Models\FAQ;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class AdminFaqsController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(Request $request)
    {
   
        if ($request->ajax()) {
            $faqs = FAQ::get();
            return Datatables::of($faqs)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                           $btn = '<a href="'.route('admin.faqs.edit', [$row->id]).'" class="edit btn btn-primary btn-sm">Edit</a>';
                            return $btn;
                    })
                    ->addColumn('status', function($row){
                           $status = $status = $row->is_active == 1 ? '<div class="badge rounded-pill bg-success">Active</div>' : '<div class="badge rounded-pill bg-danger">In-Active</div>';
                            return $status;
                    })
                   
                    ->rawColumns(['action', 'status'])
                    ->make(true);
        }
        
        return view('Admin.Faqs.index');
    }
    
    public function create()
    {   
        $faqs = null;
        return view('Admin.Faqs.create',get_defined_vars());
    }
    public function store(Request $request)
    {
    
        $validated = $request->validate([
            "question" => "required",
            "answer" => "required",
            "sort" => "required",
            "is_active" => "required"
        ]);
            if($request->id){
            $faq = FAQ::find($request->id);
            $faq->question = $validated['question'];
            $faq->answer = $validated['answer'];
            $faq->sort = $validated['sort'];
            $faq->is_active = $validated['is_active'];
            $faq->save();
            $notification = "FAQs Updated Successfully";
            }else{
                FAQ::create($validated);
                $notification = "FAQs Created Successfully";
            }
        return redirect()->route('admin.faqs.index')->with('Success', $notification);
    }



    public function edit($id , Request $request)
    {   
        $faqs = FAQ::find($id);
        return view('Admin.Faqs.create', get_defined_vars());
    }

}
