<x-shareable>
    <x-slot name="header">
        <h2 class="font-semibold text-xl pb-2 text-gray-800 leading-tight" >
            <img src="{{ asset('qr-logo.svg') }}" style="height:35px; float:left;"/>
            <span style="color: #1f7d67!important; font-weight: 700; font-size: 21px;">quadrock</span>
        </h2>
    </x-slot>

    
    <div class="py-2">
        
        <div class="max-w-7xl mx-auto">
            
            <form method="POST" enctype="multipart/form-data" action="{{ route('kycstore',$organization->uuid) }}">
                @csrf
                @method('PATCH')
                @if(isset($message) && !empty($message))
                <x-flash type="{{$message['type']}}" class="m-4">
                   {{$message['content']}}
                </x-flash>
                @endif
            <div class="grid grid-cols-2 gap-4 p-6 bg-white border-b border-gray-200">
              
              
                <div>
                    <x-label for="name" :value="__('Name')" />
                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ $organization->name }}" required autofocus />
                </div>
                <!-- ... -->
                <div>
                    <x-label for="company_name" :value="__('Company Name')" />
                    <x-input id="company_name" class="block mt-1 w-full" type="text" name="company_name" value="{{ $organization->company_name }}"  required />
                </div>
                <div>
                    <x-label for="address" :value="__('Address')" />
                    <x-input id="address" class="block mt-1 w-full" type="text" name="address" value="{{ $organization->address }}"  required />
                </div>

                <div>
                    <x-label for="trading_address" :value="__('Trading Address')" />
                    <x-input id="trading_address" class="block mt-1 w-full" type="text" name="trading_address" value="{{ $organization->trading_address }}"  required />
                </div>

                <div>
                    <x-label for="company_number" :value="__('Company Number')" />
                    <x-input id="company_number" class="block mt-1 w-full" type="text" name="company_number" value="{{ $organization->company_number }}"  required />
                </div>

                <div>
                    <x-label for="authority_of_registration_number" :value="__('Authority of Registration Number')" />
                    <x-input id="authority_of_registration_number" class="block mt-1 w-full" type="text" name="authority_of_registration_number" value="{{ $organization->authority_of_registration_number }}"  required />
                </div>

                <div>
                    <x-label for="bank_name" :value="__('Bank Name')" />
                    <x-input id="bank_name" class="block mt-1 w-full" type="text" name="bank_name" value="{{ $organization->bank_name }}"  required />
                </div>

                <div>
                    <x-label for="bank_account_number" :value="__('Bank Account Number')" />
                    <x-input id="bank_account_number" class="block mt-1 w-full" type="text" name="bank_account_number" value="{{ $organization->bank_account_number }}"  required />
                </div>

                <div>
                    <x-label for="bank_address" :value="__('Bank Address')" />
                    <x-input id="bank_address" class="block mt-1 w-full" type="text" name="bank_address" value="{{ $organization->bank_address }}"  required />
                </div>

                <div>
                    <x-label for="bank_swift_code" :value="__('Bank Swift code')" />
                    <x-input id="bank_swift_code" class="block mt-1 w-full" type="text" name="bank_swift_code" value="{{ $organization->bank_swift_code }}"  required />
                </div>

                <div>
                    <x-label for="nature_of_business" :value="__('Nature of Business')" />
                    <select class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="nature_of_business" id="nature_of_business">
                        @foreach($businessnatures as $businessnature)
                        <option @if($businessnature->id==$organization->nature_of_the_business_id) selected @endif value="{{$businessnature->id}}">{{$businessnature->label}}</option>
                        @endforeach
                    </select>
                </div>

                <div>
                    <x-label for="country_of_incorporation" :value="__('Country of Incorporation')" />
                    <select class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="country_of_incorporation" id="country_of_incorporation">
                        @foreach($countries as $key=>$country)
                        <option @if($key==$organization->country_of_incorporation) selected @endif value="{{$key}}">{{$country}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="custom-file">
                    <x-label for="trade_license" :value="__('Trade License')" />
                    <input type="file" name="trade_license" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" id="trade_license">
                    
                </div>

                <div class="custom-file">
                    <x-label for="vat_certificate" :value="__('VAT Certificate')" />
                    <input type="file" name="vat_certificate" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" id="vat_certificate">
                    
                </div>
                

                <div class="custom-file">
                    <x-label for="company_logo" :value="__('Company Logo')" />
                    <input type="file" name="company_logo" class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" id="company_logo">
                    
                </div>


                <div class="flex items-center justify-left mt-4">
                    <x-button>
                        {{ __('Submit') }}
                    </x-button>
                </div>

            </div>

            
           
            </form>
                  
           
        </div>
    </div>
</x-app-layout>
