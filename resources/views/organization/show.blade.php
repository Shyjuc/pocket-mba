<x-app-layout>

    <div>
        
        <div class="max-w-7xl mx-auto">

            <div class="flex flex-row">
               <x-sidebar>
               </x-sidebar>
                <div class="basis-5/6">
                    <div class="grid grid-cols-2 gap-4 mt-4 ml-4 mr-4">
                        <div><h1>Show Company</h1> </div>
                        <div> <x-linkbutton class="mb-4 mr-4 " style="float:right" href="{{route('companies.index')}}">
                             {{ __('Back') }}
                         </x-linkbutton>
                        </div>
                     </div>
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" style="min-height: 300px">
                     <img src="{{ asset( $company->header_image->media_path) }}" class="object-cover w-100" style="max-height: 200px; width:100%;">   
                     @if(isset($message) && !empty($message))
                            <x-flash type="{{$message['type']}}" class="m-4">
                               {{$message['content']}}
                            </x-flash>
                        @endif
                    <div class="p-6 bg-white border-b border-gray-200">
                     <div class="
                        flex flex-wrap
                        rounded-sm
                        ">
                        
                     <img src="{{ asset( $company->image->media_path) }}" width="50" height="50" class="rounded-md object-cover h-50 w-50">
                    </div>
                       <h1>{{ $company->name }}<br/>
                        <small>Owner ID : {{ $company->owner_id }}</small>
                       </h1>
                    </div>
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div x-data="
   {
   openTab: 1,
   activeClasses: 'bg-primary text-white p-200 mb-4 mr-4 px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 mb-4 mr-4',
   inactiveClasses: 'text-body-color hover:bg-primary hover:text-white p-200 mb-4 mr-4 px-4 py-2 text-xs uppercase',
   }
   " class="w-full mb-14">
   <div class="
      flex flex-wrap
      rounded-lg
      py-3
      px-4
      border-b border-[#E4E4E4]
      ">
      <a href="javascript:void(0)" @click="openTab = 1" :class="openTab === 1 ? activeClasses : inactiveClasses" class="text-sm md:text-base font-medium rounded-md py-3 px-4 lg:px-6 bg-primary">
      Activity
      </a>
      <a href="javascript:void(0)" @click="openTab = 2" :class="openTab === 2 ? activeClasses : inactiveClasses" class="text-sm md:text-base font-medium rounded-md py-3 px-4 lg:px-6 text-body-color hover:bg-primary hover:text-white">
      Notes
      </a>
      <a href="javascript:void(0)" @click="openTab = 3" :class="openTab === 3 ? activeClasses : inactiveClasses" class="text-sm md:text-base font-medium rounded-md py-3 px-4 lg:px-6 text-body-color hover:bg-primary hover:text-white">
      Files
      </a>
      <a href="javascript:void(0)" @click="openTab = 4" :class="openTab === 4 ? activeClasses : inactiveClasses" class="text-sm md:text-base font-medium rounded-md py-3 px-4 lg:px-6 text-body-color hover:bg-primary hover:text-white">
      Forms
      </a>
      <a href="javascript:void(0)" @click="openTab = 5" :class="openTab === 5 ? activeClasses : inactiveClasses" class="text-sm md:text-base font-medium rounded-md py-3 px-4 lg:px-6 text-body-color hover:bg-primary hover:text-white">
        Deals
        </a>
      <a href="javascript:void(0)" @click="openTab = 6" :class="openTab === 6 ? activeClasses : inactiveClasses" class="text-sm md:text-base font-medium rounded-md py-3 px-4 lg:px-6 text-body-color hover:bg-primary hover:text-white">
         Bank Details
         </a>
   </div>
   <div>
      <div x-show="openTab === 1" class="text-body-color text-base leading-relaxed p-6">
         Lorem ipsum dolor sit amet, consectetur adipisicing elit.
         Officia nisi, doloribus nulla cumque molestias corporis eaque
         harum vero! Quas sit odit optio debitis nulla quisquam,
         dolorum quaerat animi iusto quod.
      </div>
      <div x-show="openTab === 2" class="text-body-color text-base leading-relaxed p-6" style="display: none;">
         Lorem ipsum dolor sit amet, consectetur adipisicing elit.
         Officia nisi, doloribus nulla cumque molestias corporis eaque
         harum vero! Quas sit odit optio debitis nulla quisquam,
         dolorum quaerat animi iusto quod. Lorem ipsum dolor, sit amet
         consectetur adipisicing elit. Unde ex dolorum voluptate
         cupiditate adipisci doloremque, vel quam praesentium nihil
         veritatis.
      </div>
         <div x-show="openTab === 3" class="text-body-color text-base leading-relaxed p-6 inline-block" style="display: none;">
         @if($company->trade_license_id)
         <div class="flex flex-wrap">
            Trade License :
            <a href="{{ asset( $company->trade_license->file_path) }}" class="flex text-red-600"> Download <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 128 128"><path fill="#ff402f" d="M95.21 80.32c-.07-.51-.48-1.15-.92-1.58-1.26-1.24-4.03-1.89-8.25-1.95-2.86-.03-6.3.22-9.92.73-1.62-.93-3.29-1.95-4.6-3.18-3.53-3.29-6.47-7.86-8.31-12.89.12-.47.22-.88.32-1.3 0 0 1.98-11.28 1.46-15.1-.07-.52-.12-.67-.26-1.08l-.17-.44c-.54-1.25-1.6-2.57-3.26-2.5l-.98-.03h-.02c-1.86 0-3.36.95-3.76 2.36-1.2 4.44.04 11.09 2.29 19.69l-.58 1.4c-1.61 3.94-3.63 7.9-5.41 11.39l-.23.45c-1.88 3.67-3.58 6.79-5.13 9.43l-1.59.84c-.12.06-2.85 1.51-3.49 1.89-5.43 3.25-9.03 6.93-9.63 9.85-.19.94-.05 2.13.92 2.68l1.54.78c.67.33 1.38.5 2.1.5 3.87 0 8.36-4.82 14.55-15.62 7.14-2.32 15.28-4.26 22.41-5.32 5.43 3.05 12.11 5.18 16.33 5.18.75 0 1.4-.07 1.92-.21.81-.22 1.49-.68 1.91-1.3.82-1.23.98-2.93.76-4.67zM36.49 99.33c.7-1.93 3.5-5.75 7.63-9.13.26-.21.9-.81 1.48-1.37-4.32 6.89-7.21 9.63-9.11 10.5zM60.95 43c1.24 0 1.95 3.13 2.01 6.07.06 2.94-.63 5-1.48 6.53-.71-2.26-1.05-5.82-1.05-8.15 0 0-.05-4.45.52-4.45zm-7.3 40.14c.87-1.55 1.77-3.19 2.69-4.92 2.25-4.25 3.67-7.57 4.72-10.3 2.1 3.82 4.72 7.07 7.79 9.67.39.32.8.65 1.22.98-6.25 1.23-11.66 2.74-16.42 4.57zm39.43-.35c-.38.23-1.47.37-2.17.37-2.26 0-5.07-1.03-9-2.72 1.51-.11 2.9-.17 4.14-.17 2.27 0 2.94-.01 5.17.56 2.22.57 2.25 1.72 1.86 1.96z"/><path fill="#ff402f" d="M104 80c-13.255 0-24 10.745-24 24s10.745 24 24 24 24-10.745 24-24-10.745-24-24-24zm10.882 16.988-.113.176-8.232 11.438c-.548.866-1.508 1.398-2.537 1.398s-1.989-.532-2.536-1.397l-8.346-11.614a3.01 3.01 0 0 1 .01-2.994 3.01 3.01 0 0 1 2.596-1.494H100V86c0-1.654 1.346-3 3-3h2c1.654 0 3 1.346 3 3v6.5h4.276c1.065 0 2.061.572 2.596 1.494a3.01 3.01 0 0 1 .01 2.994z"/><path fill="#ff9a30" d="m84 125.95-.05.05H84zM114 77v-.05l-.05.05z"/><path fill="#ff402f" d="M111.071 44.243 71.757 4.929A9.936 9.936 0 0 0 64.687 2H24c-5.514 0-10 4.486-10 10v104c0 5.514 4.486 10 10 10h59.95l-4-4H24c-3.309 0-6-2.691-6-6V12c0-3.309 2.691-6 6-6h40.687c1.603 0 3.109.624 4.242 1.757l39.314 39.314A6.044 6.044 0 0 1 110 51.313V72.95l4 4V51.313c0-2.67-1.04-5.181-2.929-7.07z"/><path fill="#fff" d="m113.95 77 .05-.05-4-4"/></svg></a>
         </div>
         @endif
         @if($company->vat_certificate_id)
         <div class="flex flex-wrap">
            Vat Certificate : <a href="{{ asset( $company->vat_certificate->file_path) }}" class="flex text-red-600"> Download <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 128 128"><path fill="#ff402f" d="M95.21 80.32c-.07-.51-.48-1.15-.92-1.58-1.26-1.24-4.03-1.89-8.25-1.95-2.86-.03-6.3.22-9.92.73-1.62-.93-3.29-1.95-4.6-3.18-3.53-3.29-6.47-7.86-8.31-12.89.12-.47.22-.88.32-1.3 0 0 1.98-11.28 1.46-15.1-.07-.52-.12-.67-.26-1.08l-.17-.44c-.54-1.25-1.6-2.57-3.26-2.5l-.98-.03h-.02c-1.86 0-3.36.95-3.76 2.36-1.2 4.44.04 11.09 2.29 19.69l-.58 1.4c-1.61 3.94-3.63 7.9-5.41 11.39l-.23.45c-1.88 3.67-3.58 6.79-5.13 9.43l-1.59.84c-.12.06-2.85 1.51-3.49 1.89-5.43 3.25-9.03 6.93-9.63 9.85-.19.94-.05 2.13.92 2.68l1.54.78c.67.33 1.38.5 2.1.5 3.87 0 8.36-4.82 14.55-15.62 7.14-2.32 15.28-4.26 22.41-5.32 5.43 3.05 12.11 5.18 16.33 5.18.75 0 1.4-.07 1.92-.21.81-.22 1.49-.68 1.91-1.3.82-1.23.98-2.93.76-4.67zM36.49 99.33c.7-1.93 3.5-5.75 7.63-9.13.26-.21.9-.81 1.48-1.37-4.32 6.89-7.21 9.63-9.11 10.5zM60.95 43c1.24 0 1.95 3.13 2.01 6.07.06 2.94-.63 5-1.48 6.53-.71-2.26-1.05-5.82-1.05-8.15 0 0-.05-4.45.52-4.45zm-7.3 40.14c.87-1.55 1.77-3.19 2.69-4.92 2.25-4.25 3.67-7.57 4.72-10.3 2.1 3.82 4.72 7.07 7.79 9.67.39.32.8.65 1.22.98-6.25 1.23-11.66 2.74-16.42 4.57zm39.43-.35c-.38.23-1.47.37-2.17.37-2.26 0-5.07-1.03-9-2.72 1.51-.11 2.9-.17 4.14-.17 2.27 0 2.94-.01 5.17.56 2.22.57 2.25 1.72 1.86 1.96z"/><path fill="#ff402f" d="M104 80c-13.255 0-24 10.745-24 24s10.745 24 24 24 24-10.745 24-24-10.745-24-24-24zm10.882 16.988-.113.176-8.232 11.438c-.548.866-1.508 1.398-2.537 1.398s-1.989-.532-2.536-1.397l-8.346-11.614a3.01 3.01 0 0 1 .01-2.994 3.01 3.01 0 0 1 2.596-1.494H100V86c0-1.654 1.346-3 3-3h2c1.654 0 3 1.346 3 3v6.5h4.276c1.065 0 2.061.572 2.596 1.494a3.01 3.01 0 0 1 .01 2.994z"/><path fill="#ff9a30" d="m84 125.95-.05.05H84zM114 77v-.05l-.05.05z"/><path fill="#ff402f" d="M111.071 44.243 71.757 4.929A9.936 9.936 0 0 0 64.687 2H24c-5.514 0-10 4.486-10 10v104c0 5.514 4.486 10 10 10h59.95l-4-4H24c-3.309 0-6-2.691-6-6V12c0-3.309 2.691-6 6-6h40.687c1.603 0 3.109.624 4.242 1.757l39.314 39.314A6.044 6.044 0 0 1 110 51.313V72.95l4 4V51.313c0-2.67-1.04-5.181-2.929-7.07z"/><path fill="#fff" d="m113.95 77 .05-.05-4-4"/></svg></a>
         </div>
         @endif
      </div>
      <div x-show="openTab === 4" class="text-body-color text-base leading-relaxed p-6 inline-block" style="display: none;">
         Lorem ipsum dolor sit amet, consectetur adipisicing elit.
         Officia nisi, doloribus nulla cumque molestias corporis eaque
         harum vero! Quas sit odit optio debitis nulla quisquam,
         dolorum quaerat animi iusto quod.
      </div>

      <div x-show="openTab === 5" class="text-body-color text-base leading-relaxed p-6" style="display: none;">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        Officia nisi, doloribus nulla cumque molestias corporis eaque
        harum vero! Quas sit odit optio debitis nulla quisquam,
        dolorum quaerat animi iusto quod.
     </div>

     <div x-show="openTab === 6" class="text-body-color text-base leading-relaxed p-6" style="display: none;">
      <p>Bank Name : {{ $company->bank_name }}</p>
      <p>Bank Account Number : {{ $company->bank_account_number}}</p>
      <p>Bank Address : {{ $company->bank_address}}</p>
      <p>Bank SWIFT Code : {{ $company->bank_swift_code}}</p>
   </div>
   </div>
</div>
                    </div>
                </div></div>
              </div>            
           
        </div>
    </div>
</x-app-layout>
