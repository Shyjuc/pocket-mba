<x-app-layout>

    <div>
        
        <div class="max-w-7xl mx-auto">

            <div class="flex flex-row">
               <x-sidebar>
               </x-sidebar>
                <div class="basis-5/6">
                    <div class="grid grid-cols-2 gap-4 mt-4 ml-4 mr-4">
                       <div><h1>Update Deals</h1> </div>
                       <div> <x-linkbutton class="mb-4 mr-4 " style="float:right" href="{{route('deals.index')}}">
                            {{ __('Back') }}
                        </x-linkbutton>
                       </div>
                    </div>
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        @if(isset($message) && !empty($message))
                            <x-flash type="{{$message['type']}}" class="m-4">
                               {{$message['content']}}
                            </x-flash>
                        @endif
                    <div class="p-6 bg-white border-b border-gray-200" style="min-height: 300px">
                        <img src="{{ asset( $company->header_image->media_path) }}" class="object-cover w-100" style="max-height: 200px; width:100%;">
                        <form method="POST" action="{{ route('deals.update',$deal->id) }}">
                            @csrf
                            @method('PUT')
                            
                            <div class="grid grid-cols-1 mt-5">
                                <input type="hidden" name="uuid" value="{{ $deal->uuid }}">
                                <!-- Title -->
                                <div class="mb-5">
                                    <x-label for="title" :value="__('Title')" />
                                    <x-input id="title" class="block mt-1 w-full" type="text" name="title" value="{{ $deal->title }}" required />
                                </div>

                                <div class="grid grid-cols-2 gap-4">
                                    
                                    <div class="mb-5">
                                        <x-label for="category_id" :value="__('Category')" />
                                        <select style="display: block; widh:100%" class="mt-1 rounded-md block shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="category_id" id="category_id">
                                            @foreach($categories as $category)
                                            @if($deal->category_id==$category->id) <option value="{{ $category->id }}" selected='selected' >{{$deal->category->name}}</option>@endif
                                            <option value="{{ $category->id }}">{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                 
                                    <div class="mb-5">
                                        <x-label for="payment_option_id" :value="__('Payment option')" />
                                        <select style="display: block; widh:100%" class="mt-1 rounded-md block shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="payment_option_id" id="payment_option_id">
                                           @foreach($payment_options as $payment_option)
                                           {{$payment_option}}
                                           <option value=" {{$payment_option->id}}"> {{$payment_option->label}}</option>
                                           @endforeach
                                        </select>
                                    </div>

                                    <div class="mb-5">
                                        <x-label for="organization_id" :value="__('Company')" />
                                        <select style="display: block; widh:100%" class="mt-1 rounded-md block shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="organization_id" id="organization_id">
                                           @foreach($organizations as $organization)
                                           @if($deal->to_organization_id==$organization->id) <option value="{{ $organization->id }}" selected='selected' >{{$deal->organization->name}}</option>@endif
                                           <option value=" {{$organization->id}}"> {{$organization->name}}</option>
                                           @endforeach
                                        </select>
                                    </div>

                                    <!-- Demurrage -->
                                    <div class="mb-5">
                                        <x-label for="demurrage" :value="__('Demurrage')" />
                                        <x-input id="demurrage" class="block mt-1 w-full" type="text" name="demurrage" value="{{ $deal->demurrage }}" required/>
                                    </div>
                                    
                                </div>
                    
                                <!-- Description -->
                                <div  class="mb-5">
                                    <x-label for="description" :value="__('Description')" />
                                    <x-trix-field id="description" name="description" value="{!! $deal->body !!}" />
                                </div>
                                <div>
                                    
                                </div>
                            </div>    
                       
                
                            <div class="flex items-center justify-start mt-4">
                               
                                <x-button>
                                    {{ __('Update Deals') }}
                                </x-button>
                            </div>
                        </form>
                    </div>
                </div></div>
              </div>            
           
        </div>
    </div>
</x-app-layout>
