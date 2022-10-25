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
                    @if($proposal->deals_image_id)
                    <div class="flex flex-wrap">
                        Attachment :
                        <a href="{{ asset( $proposal->deals_image->media_path) }}" class="flex text-red-600"> Download <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 128 128"><path fill="#ff402f" d="M95.21 80.32c-.07-.51-.48-1.15-.92-1.58-1.26-1.24-4.03-1.89-8.25-1.95-2.86-.03-6.3.22-9.92.73-1.62-.93-3.29-1.95-4.6-3.18-3.53-3.29-6.47-7.86-8.31-12.89.12-.47.22-.88.32-1.3 0 0 1.98-11.28 1.46-15.1-.07-.52-.12-.67-.26-1.08l-.17-.44c-.54-1.25-1.6-2.57-3.26-2.5l-.98-.03h-.02c-1.86 0-3.36.95-3.76 2.36-1.2 4.44.04 11.09 2.29 19.69l-.58 1.4c-1.61 3.94-3.63 7.9-5.41 11.39l-.23.45c-1.88 3.67-3.58 6.79-5.13 9.43l-1.59.84c-.12.06-2.85 1.51-3.49 1.89-5.43 3.25-9.03 6.93-9.63 9.85-.19.94-.05 2.13.92 2.68l1.54.78c.67.33 1.38.5 2.1.5 3.87 0 8.36-4.82 14.55-15.62 7.14-2.32 15.28-4.26 22.41-5.32 5.43 3.05 12.11 5.18 16.33 5.18.75 0 1.4-.07 1.92-.21.81-.22 1.49-.68 1.91-1.3.82-1.23.98-2.93.76-4.67zM36.49 99.33c.7-1.93 3.5-5.75 7.63-9.13.26-.21.9-.81 1.48-1.37-4.32 6.89-7.21 9.63-9.11 10.5zM60.95 43c1.24 0 1.95 3.13 2.01 6.07.06 2.94-.63 5-1.48 6.53-.71-2.26-1.05-5.82-1.05-8.15 0 0-.05-4.45.52-4.45zm-7.3 40.14c.87-1.55 1.77-3.19 2.69-4.92 2.25-4.25 3.67-7.57 4.72-10.3 2.1 3.82 4.72 7.07 7.79 9.67.39.32.8.65 1.22.98-6.25 1.23-11.66 2.74-16.42 4.57zm39.43-.35c-.38.23-1.47.37-2.17.37-2.26 0-5.07-1.03-9-2.72 1.51-.11 2.9-.17 4.14-.17 2.27 0 2.94-.01 5.17.56 2.22.57 2.25 1.72 1.86 1.96z"/><path fill="#ff402f" d="M104 80c-13.255 0-24 10.745-24 24s10.745 24 24 24 24-10.745 24-24-10.745-24-24-24zm10.882 16.988-.113.176-8.232 11.438c-.548.866-1.508 1.398-2.537 1.398s-1.989-.532-2.536-1.397l-8.346-11.614a3.01 3.01 0 0 1 .01-2.994 3.01 3.01 0 0 1 2.596-1.494H100V86c0-1.654 1.346-3 3-3h2c1.654 0 3 1.346 3 3v6.5h4.276c1.065 0 2.061.572 2.596 1.494a3.01 3.01 0 0 1 .01 2.994z"/><path fill="#ff9a30" d="m84 125.95-.05.05H84zM114 77v-.05l-.05.05z"/><path fill="#ff402f" d="M111.071 44.243 71.757 4.929A9.936 9.936 0 0 0 64.687 2H24c-5.514 0-10 4.486-10 10v104c0 5.514 4.486 10 10 10h59.95l-4-4H24c-3.309 0-6-2.691-6-6V12c0-3.309 2.691-6 6-6h40.687c1.603 0 3.109.624 4.242 1.757l39.314 39.314A6.044 6.044 0 0 1 110 51.313V72.95l4 4V51.313c0-2.67-1.04-5.181-2.929-7.07z"/><path fill="#fff" d="m113.95 77 .05-.05-4-4"/></svg></a>
                    </div>
                    @endif
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
