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
