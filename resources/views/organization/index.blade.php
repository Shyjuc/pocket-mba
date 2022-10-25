<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    
    <div>
        
        <div class="max-w-7xl mx-auto">

            <div class="flex flex-row " style="align-items: stretch">
               <x-sidebar>
               </x-sidebar>
                <div class="basis-5/6"> 
                    <x-linkbutton class="mb-4 ml-4 mt-4" href="{{route('companies.create')}}">
                        {{ __('Create') }}
                    </x-linkbutton>
                    <x-altbutton name="btn_action" class="float-right right-0 mt-4" onClick="toggleClass('importModal','hidden')" data-bs-toggle="modal" data-bs-target="#importModal">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5m-13.5-9L12 3m0 0l4.5 4.5M12 3v13.5" />
                          </svg>
                          
                        {{ __('Import') }}
                    </x-altbutton>



                    <div class="fade hidden fixed top-0 left-0 w-full h-full outline-none overflow-x-hidden overflow-y-auto"
  id="importModal" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="relative w-auto pointer-events-none">
    <div
      class="border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-white bg-clip-padding rounded-md outline-none text-current">
      <div
        class="flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md">
        <h5 class="text-xl font-medium leading-normal text-gray-800" id="exampleModalLabel">Import</h5>
        <a href="{{ asset('storage/files/sample.csv') }}">Download Sample File</a>
        <x-linkbutton class="mb-4 ml-4 mt-4" href="#" onClick="toggleClass('importModal','hidden')">
            {{ __('Close') }}
        </x-linkbutton>
      </div>
      <div class=" relative p-4">
        <form method="POST" enctype="multipart/form-data" action="{{ url('importcsv') }}">
            @csrf

            <div class="custom-file">
                <x-label for="csv_file" :value="__('Import CSV')" />
                <input type="file" name="csv_file" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" id="csv_file">
            </div>

            <div class="flex items-center justify-left mt-4">
                <x-button>
                    {{ __('Submit') }}
                </x-button>
            </div>

        </form>
      </div>
    </div>
  </div>
</div>




                    <div class="bg-white overflow-hidden shadow-sm " style="min-height: 300px">
                    <div class="p-6 bg-white border-b border-gray-200">
                        @if($organizations->isNotEmpty())
                        <x-organizationtable>
                            @foreach ($organizations as $organization)
                            <tr>
                                <td class="p-2 "><a href="{{route('companies.show', $organization->id )}}">{{ $organization->id }}</a></td>
                                <td class="p-2 ">{{ $organization->name }}</td>
                                <td class="p-2 ">{{ $organization->owner->email }}</td>
                                <td class="p-2 ">{{ $organization->status->label }}</td>
                                <td class="p-2 ">
                                    @if( $organization->uuid)
                                    <a class="blue" href="{{route('kyc', $organization->uuid )}}" >{{ $organization->uuid }}</a>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </x-organizationtable>
                        @else
                        <h2>No companies found. </h2>
                        @endif
                    </div>
                </div></div>
              </div>            
        </div>
    </div>
</x-app-layout>






    <script>
 function toggleClass(id,className) {
  var element = document.getElementById(id);
  element.classList.toggle(className);
}
    </script>

