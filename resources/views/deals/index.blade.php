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
                        @if($proposals->isNotEmpty())
                        <x-proposaltable>
                            @foreach ($proposals as $proposal)
                            <tr>
                                <td class="p-2 ">{{ $proposal->id }}</td>
                                <td class="p-2 ">{{ $proposal->title }}</td>
                                <td class="p-2 ">{{ $proposal->category->name }}</td>
                                <td class="p-2 ">{{ $proposal->toOrganization->name }}</td>
                                <td class="p-2 ">{{ $proposal->status->label }}</td>
                                <td class="p-2 ">
                                    @if( $proposal->uuid)
                                    <a class="blue" href="{{route('deals.show', $proposal->uuid )}}" >{{ $proposal->uuid }}</a>
                                    @endif
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
