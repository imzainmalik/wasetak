@extends('Admin.layouts.master')
@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">

            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-10">
                            <h4>All Sub Category</h4>
                        </div>
                        <div class="col-2 d-flex justify-content-end">
                            <a href="{{ route('admin.faqs.create') }}" class="btn btn-primary"><i class="fa fa-plus"></i>
                                Create FAQs</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                  
                        <br/>
                        <table class="table table-bordered data-table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Question</th>    
                                    <th>Answer</th>        
                                    <th>Sort</th>    
                                    <th>Status</th>    
                                    <th width="100px">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>

               
            </div>

        </div>
    </div>
</div>

@section('custom_scripts')

    <script type="text/javascript">

    $(function () {
      var table = $('.data-table').DataTable({
          processing: true,
          serverSide: true,
          ajax: "{{ route('admin.faqs.index') }}",
          columns: [
              {data: 'id', name: 'id'},
              {data: 'question', name: 'question'},
              {data: 'answer', name: 'answer'},
              {data: 'sort', name: 'sort'},
              {data: 'status', name: 'status'},
              {data: 'action', name: 'action', orderable: false, searchable: false},
          ]
      });
        
    });
  </script>
    
@endsection
   
@endsection
