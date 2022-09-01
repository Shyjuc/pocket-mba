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
                     <img src="{{ $organization->media_path }}" class="rounded-md object-cover h-50 w-50">
                    </div>
                       <h1>{{ $organization->name }}<br/>
                        <small>Owner ID : {{ $organization->owner_id }}</small>
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
      <div x-show="openTab === 3" class="text-body-color text-base leading-relaxed p-6" style="display: none;">
         Lorem ipsum dolor sit amet, consectetur adipisicing elit.
         Officia nisi, doloribus nulla cumque molestias corporis eaque
         harum vero! Quas sit odit optio debitis nulla quisquam,
         dolorum quaerat animi iusto quod. <br>
         <br>
         Lorem ipsum dolor, sit amet consectetur adipisicing elit.
         Suscipit mollitia nam eligendi reprehenderit reiciendis saepe
         laboriosam maiores voluptas. Quo, culpa amet fugiat ipsam sed
         quod hic, veritatis ducimus recusandae repellat quasi eaque,
         suscipit praesentium totam?
      </div>
      <div x-show="openTab === 4" class="text-body-color text-base leading-relaxed p-6" style="display: none;">
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
   </div>
</div>
                    </div>
                </div></div>
              </div>            
           
        </div>
    </div>
</x-app-layout>
