<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8|7 Datatables Tutorial</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"/>
    <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<body>
<x-app-layout>    
    <div>
        
        <div class="max-w-7xl mx-auto" >

            <div class="flex flex-row " style="align-items: stretch">
               <x-sidebar>
               </x-sidebar>
                <div class="basis-5/6"> 
                    <x-linkbutton class="mb-4 ml-4 mt-4" href="{{route('deals.create')}}">
                        {{ __('Create Deals') }}
                    </x-linkbutton>
                    <div class="bg-white overflow-hidden shadow-sm " style="min-height: 300px">
                    <div class="p-6 bg-white border-b border-gray-200">
    
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="grid grid-cols-2 gap-4">
                                <div class="form-group">
                                    <label><strong>Status :</strong></label>
                                    <select id='status' class="form-control" style="width: 200px">
                                        <option value="">--Select Status--</option>
                                        <option selected value="1">new</option>
                                        <option value="2">rejected</option>
                                        <option value="3">accepted</option>
                                        <option value="4">resubmitted</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label><strong>Status :</strong></label>
                                    <select id='status2' class="form-control" style="width: 200px">
                                        <option value="">--Select Status--</option>
                                        <option value="1">Active</option>
                                        <option value="0">Deactive</option>
                                    </select>
                                </div>
                            </div>  
                            </div>
                        </div>


    <table class="table table-bordered yajra-datatable">
        <thead>
            <tr>
                <th>No</th>
                <th>Title</th>
                <th>Category</th>
                <th>Company</th>
                <th>Status</th>
                <th>UUID</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>

</div>
</div></div>
</div>            

</div>
</div>
</x-app-layout>   
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
  $(function () {
    
    var table = $('.yajra-datatable').DataTable({
        processing: true,
        serverSide: true,
        //ajax: "{{ route('dealslist') }}",
        ajax: {
          url: "{{ route('dealslist') }}",
          data: function (d) {
                d.status = $('#status').val(),
                //d.search = $('input[type="search"]').val()
            },
        },
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'title', name: 'title'},
            {data: 'category.name', name: 'category.name'},
            {data: 'organization.name', name: 'organization'},
            {data: 'status.name', name: 'status'},
            {data: 'uuid', name: 'uuid'},
            {
                data: 'action', 
                name: 'action', 
                orderable: true, 
                searchable: true
            },
        ]
    });

    $('#status').change(function(){
        table.draw();
    });
    
  });
</script>
</html>