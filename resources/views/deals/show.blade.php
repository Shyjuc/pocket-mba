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
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" style="min-height: 300px">
                     @if($proposal->organization->header_image)
                     <img src="{{ asset( $proposal->organization->header_image->media_path) }}" class="object-cover w-100" style="max-height: 200px; width:100%;">
                     @endif
                    <div class="p-6 bg-white border-b border-gray-200">
                     <div class="
                        flex flex-wrap
                        rounded-sm
                        ">
                        
                     <img src="{{ asset( $proposal->organization->image->media_path) }}" width="50" height="50" class="rounded-md object-cover h-50 w-50">
                    </div>
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

                      <div>
                        <x-label for="comment" :value="__('Comment')" />
                        <x-input id="comment" class="block mt-1 w-full" type="text" name="comment" value="" required autofocus />
                        <input type="hidden" name="uuid" value="{{ $proposal->uuid }}">
                    </div>
                   
                    <div class="flex items-center justify-start mt-4">
                        <x-button class="mr-4" name="btn_action" value="accepted">
                            {{ __('Accept') }}
                        </x-button>
    
                        <x-altbutton name="btn_action" value="rejected">
                            {{ __('Reject') }}
                        </x-altbutton>
        
                    </div>

                      </form>
      
   </div>
</div>
                    </div>
                </div></div>
              </div>            
           
        </div>
    </div>
</x-app-layout>
