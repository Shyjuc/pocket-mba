<x-shareable>
    <x-slot name="header">
        <h2 class="font-semibold text-xl pb-2 text-gray-800 leading-tight" >
            <img src="{{ asset('qr-logo.svg') }}" style="height:35px; float:left;"/>
            <span style="color: #1f7d67!important; font-weight: 700; font-size: 21px;">quadrock</span>
        </h2>
    </x-slot>

    
    <div class="py-0 pt-0">
        
        <div class="max-w-7xl mx-auto py-2">
             
             
            <form method="POST" action="{{ route('proposalAction',$proposal->uuid) }}">
                @csrf
                @if(isset($message) && !empty($message))
                <x-flash type="{{$message['type']}}" class="m-4">
                   {{$message['content']}}
                </x-flash>
                @endif

            <div class="grid gap-4 p-6 bg-white border-b border-gray-200">
                @if($proposal->organization->header_image)
                <img src="{{ asset( $proposal->organization->header_image->media_path) }}" class="object-cover w-100" style="max-height: 200px; width:100%;">
                @endif
                <h1 class="text-3xl">{{ $proposal->title }}</h1>
                <h2>From: {{ $proposal->organization->name }} | Expiry : {{ $proposal->expiry_date }}</h2>
                <div>
                {!! $proposal->body !!}
                </div>

                <div>
                    
                    <ul class="space-y-2">
                        
                        @foreach($proposal->comments as $comment)
                        
                        <li class="flex justify-start bg-blue-100 shadow-inner shadow-xl">
                          <div class="relative max-w-xl px-4 py-2 text-gray-700 rounded shadow">
                            <span class="block">{{ $comment->content }}</span>
                            <small class="text-xs">{{ $comment->user->name }}</small>
                          </div>
                        </li>


                        @endforeach
                        
                      </ul>

                </div>

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

            </div>

            
           
            </form>
                  
           
        </div>
    </div>
</x-app-layout>
