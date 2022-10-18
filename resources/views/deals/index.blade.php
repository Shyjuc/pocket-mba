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
                        
                        <table class="table table-bordered yajra-datatable">
                            <thead>
                                <tr>
                                    <th>ID</th>
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

                        @if($proposals->isNotEmpty())
                        <x-proposaltable>
                            @foreach ($proposals as $proposal)
                            <tr>
                                <td class="p-2 "><a href="{{route('deals.show', $proposal->id )}}">{{ $proposal->id }}</a></td>
                                <td class="p-2 ">{{ $proposal->title }}</td>
                                <td class="p-2 ">{{ $proposal->category->name }}</td>
                                <td class="p-2 ">{{ $proposal->toOrganization->name }}</td>
                                <td class="p-2 ">{{ $proposal->status->label }}</td>
                                <td class="p-2 ">
                                    @if( $proposal->uuid)
                                    <a class="blue" href="{{route('deals.show', $proposal->uuid )}}" >{{ $proposal->uuid }}</a>
                                    @endif
                                </td>
                                <td class="p-2">
                                    <a href="{{route('deals.show', $proposal->id )}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                      </svg>
                                    </a>
                                </td>
                                <td class="p-2">
                                    <a href="{{route('deals.edit', $proposal->id )}}">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                          </svg>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </x-proposaltable>
                        @else
                        <h2>No deals found. </h2>
                        @endif
                    </div>
                </div></div>
              </div>            
           
        </div>
    </div>
</x-app-layout>
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
          ajax: "{{ route('deals.list') }}",
          type: "GET",

          columns: [
              {data: 'DT_RowIndex', name: 'DT_RowIndex'},
              {data: 'title', name: 'title'},
              {data: 'category', name: 'category'},
              {data: 'toOrganization', name: 'toOrganization'},
              {data: 'status', name: 'status'},
              {data: 'uuid', name: 'uuid'},
              {
                  data: 'action', 
                  name: 'action', 
                  orderable: true, 
                  searchable: true
              },
          ]
      });
      
    });
  </script>