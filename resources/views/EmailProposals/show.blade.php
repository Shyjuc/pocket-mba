@extends('layouts.guestcontent')
@section('content')

<div class="">

    <div class="mb-8">
        <div class="md:flex items-center mb-3">
            <div class="flex flex-auto truncate items-center">
                <h1 class="text-90 font-normal text-xl md:text-2xl">Proposal Data:{{ $proposalData->title}} </h1>
                <!---->
            </div>

        </div>
        <form method="post" id="update-proposal-data"> 
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow">
                <input type="hidden" name="id" id="id" class="form-control" value="{{ $proposalData->id}}" />
                <input type="hidden" name="user_id" id="user_id" class="form-control" value="{{ $proposalData->to_user_id}}" />

                <div class="field-wrapper flex flex-col border-b border-gray-100 dark:border-gray-700 md:flex-row remove-bottom-border">
                    <div class="px-6 md:px-8 mt-2 md:mt-0 w-full md:w-1/5 md:py-5">
                        <label for="country_code-organizations-select-field" class="inline-block pt-2 leading-tight">Description </label>
                    </div>
                    <div class="mt-1 md:mt-0 pb-5 px-6 md:px-8 w-full md:w-3/5 md:py-5">
                        <div class="flex relative w-full">
                            <p>{!! $proposalData->description !!}</p>
                        </div>
                    </div>
                </div>
                <!--name-->
                @if($proposalData->status_id == 1)
                <div class="field-wrapper flex flex-col border-b border-gray-100 dark:border-gray-700 col-span-4">
                    <div class="px-6 md:px-8 mt-2 md:mt-0 w-full md:w-1/5 md:py-5"><label for="name-organizations-text-field" class="inline-block pt-2 leading-tight">Comment <span class="text-red-500 text-sm">*</span></label></div>
                    <div class="mt-1 md:mt-0 pb-5 px-6 md:px-8 w-full md:w-3/5 md:py-5">

                        <textarea id="editor"  rows="4" class="resize-none rounded-md w-full form-control form-input form-input-bordered" name="summernote"></textarea>
                    </div>
                </div>

                <div class="field-wrapper flex flex-col border-b border-gray-100 dark:border-gray-700 md:flex-row remove-bottom-border">

                    <div class="mt-1 md:mt-0 pb-5 px-6 md:px-8 w-full md:w-3/5 md:py-5">
                        <div class=" w-full ">
                            <div class="flex flex-wrap -mx-3 mb-6">
                                <div class="w-full md:w-1/2 px-3 text-center mb-6 md:mb-0">
                                    <button size="lg" align="center" component="button" dusk="update-button" type="button" class="accept_proposal bg-green-500   shadow rounded focus:outline-none ring-primary-200 dark:ring-gray-600 focus:ring bg-primary-500 hover:bg-primary-400 active:bg-primary-600 text-white dark:text-gray-800 inline-flex items-center font-bold px-4 h-9 text-sm flex-shrink-0 ">
                                        <span class="">Accept</span>
                                    </button>
                                </div>
                                <div class="w-full md:w-1/2 px-3 text-center">
                                    <button size="lg" align="center" component="button" dusk="update-button" type="button" class=" reject_proposal bg-red-500  shadow rounded focus:outline-none ring-primary-200 dark:ring-gray-600 focus:ring bg-primary-500 hover:bg-primary-400 active:bg-primary-600 text-white dark:text-gray-800 inline-flex items-center font-bold px-4 h-9 text-sm flex-shrink-0">
                                        <span class="">Reject</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @elseif($proposalData->status_id == 2)
                <div role="alert" class="mb-2">
                    <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
                        Proposal request already rejected
                    </div>
                </div>
                @else
                <div role="alert" class="mb-2">
                    <div class="bg-green-500  text-white font-bold rounded-t px-4 py-2">
                        Proposal request already rejected
                    </div>
                </div>
                @endif
                <!--company name-->

            </div>
        </form>

    </div>
</div>

@endsection 

@section('js')
<script src="{{asset('assets/js/jquery.min.js')}}"></script> 
<script> 
    $('.accept_proposal').click( function() {
        var btnType = 'accept';
        var id = $('#id').val();
        var user_id = $('#user_id').val();
        var comment = "yes"; //$('#editor').val();
        var flg =$('meta[name="csrf-token"]').attr('content');
        alert(flg)
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type:'POST',
            url:"{{ route('update-proposal-status') }}",
            data: { btnType:btnType, id:id, user_id:user_id, comment:comment }, 
            success:function(data){
                var res = (data);
                console.log(res);
                window.location.href = res.redirect_url;
            }
        });
    });

    $('.reject_proposal').click( function() {
        var btnType = 'reject';
        var id = $('#id').val();
       
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type:'POST',
            url:"{{ route('update-proposal-status') }}",
            data: { btnType:btnType, id:id }, 
            success:function(data){
                var res = (data);
                console.log(res);
                window.location.href = res.redirect_url;
            }
        });
    });  
</script>

<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
</script>
@endsection

<x-shareable>
    <x-slot name="header">
        <h2 class="font-semibold text-xl pb-2 text-gray-800 leading-tight" >
            <img src="{{ asset('qr-logo.svg') }}" style="height:35px; float:left;"/>
            <span style="color: #1f7d67!important; font-weight: 700; font-size: 21px;">quadrock</span>
        </h2>
    </x-slot>

    
    <div class="py-2">
        
        <div class="max-w-7xl mx-auto">
            
            
                  
           
        </div>
    </div>
</x-app-layout>
