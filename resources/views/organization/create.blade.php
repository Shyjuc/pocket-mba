<x-app-layout>

    <div>
        
        <div class="max-w-7xl mx-auto">

            <div class="flex flex-row">
               <x-sidebar>
               </x-sidebar>
                <div class="basis-5/6">
                    <div class="grid grid-cols-2 gap-4 mt-4 ml-4 mr-4">
                        <div><h1>Create Companies</h1> </div>
                        <div> <x-linkbutton class="mb-4 mr-4 " style="float:right" href="{{route('companies.index')}}">
                             {{ __('Back') }}
                         </x-linkbutton>
                        </div>
                     </div>
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" style="min-height: 300px">
                        @if(isset($message) && !empty($message))
                            <x-flash type="{{$message['type']}}" class="m-4">
                               {{$message['content']}}
                            </x-flash>
                        @endif
                    <div class="p-6 bg-white border-b border-gray-200">
                        <form method="POST" action="{{ route('companies.store') }}">
                            @csrf
                            @method('POST')
                            
                            <div class="grid grid-cols-2 gap-4">
                                <!-- Name -->
                                <div>
                                    <x-label for="name" :value="__('Name')" />
                                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                                </div>
                    
                                <!-- Email Address -->
                                <div>
                                    <x-label for="email" :value="__('Email')" />
                                    <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                                </div>
                            </div>    
                       
                
                            <div class="flex items-center justify-start mt-4">
                                <x-button>
                                    {{ __('Create Company') }}
                                </x-button>
                            </div>
                        </form>
                    </div>
                </div></div>
              </div>            
           
        </div>
    </div>
</x-app-layout>
