<x-app-layout>

    <div>
        
        <div class="max-w-7xl mx-auto">

            <div class="flex flex-row">
               <x-sidebar>
               </x-sidebar>
                <div class="basis-5/6">
                    <div class="grid grid-cols-2 gap-4 mt-4 ml-4 mr-4">
                        <div><h1>Show Proposal</h1> </div>
                        <div> <x-linkbutton class="mb-4 mr-4 " style="float:right" href="{{route('companies.index')}}">
                             {{ __('Back') }}
                         </x-linkbutton>
                        </div>
                     </div>
                    <div class="bg-white overflow-hidden shadow-sm" style="min-height: 300px">

                      <nav class="bg-grey-100 rounded-md w-full">
                        <ol class="list-reset flex">
                          @foreach($proposal->statuses as $key => $status)
                          @if($key > 0)
                          <li class="py-2 px-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                            </svg>
                            

                          </li>
                          @endif
                          <li class="py-2">
                            <span class="text-xs font-semibold inline-block py-1 px-2 uppercase rounded text-neutral-600 bg-neutral-200 uppercase last:mr-0 mx-2">
                            {{ $status->label }}
                          </span></li>
                          @endforeach
                        </ol>
                      </nav>
                    

                      @if($proposal->organization->header_image)
                     <img src="{{ asset( $proposal->organization->header_image->media_path) }}" class="object-cover w-100" style="max-height: 200px; width:100%;">
                     @endif
                    <div class="p-6 bg-white border-b border-gray-200">
                     
                    <h1 class="text-3xl">{{ $proposal->title }}</h1>
                    <h2>From: {{ $proposal->organization->name }} | Expiry : {{ $proposal->expiry_date }}</h2>
                    <div>
                    {!! $proposal->body !!}
                    </div>
                    </div>
                    <div class="p-6 bg-white border-b border-gray-200">
                     <ul class="space-y-2">
                        
                        @foreach(json_decode($proposal->comments, true) as $value)
                        <li class="flex justify-start bg-red-100">
                          <div class="relative max-w-xl px-4 py-2 text-gray-700 rounded shadow">
                            <span class="block">{{ $value['content'] }}</span>
                          </div>
                        </li>
                        @endforeach
                        
                      </ul>

                      <form method="POST" action="{{ route('proposalAction',$proposal->uuid) }}">
                        @csrf
                        @if(isset($message) && !empty($message))
                        <x-flash type="{{$message['type']}}" class="m-4">
                           {{$message['content']}}
                        </x-flash>
                        @endif

                      </form>
      
   </div>
</div>
                    </div>
                </div></div>
              </div>            
           
        </div>
    </div>
</x-app-layout>
