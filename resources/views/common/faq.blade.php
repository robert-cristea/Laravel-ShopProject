@extends('layouts.app')

@section('title')
<title>{{__('Sotoya')}}</title>
@endsection

@section('styles')
@endsection

@section('content')

<main id="main-content" class="bg-whitegreen px-8 pb-10 md:px-35 md:pb-20">

    <div>
        <div class="flex-none md:flex items-center pt-35px pb-6">
            <div class="mb-4 md:mb-0 flex items-center">
                <a href="/" class="text-base text-darkgray fontbold leading-snug">Accueil</a>
                <span>
                    <svg class="ml-4 mr-3" xmlns="http://www.w3.org/2000/svg" width="7.253" height="12.5" viewBox="0 0 7.253 12.5">
                        <path id="chevron_right" d="M17.174,19.633a.644.644,0,0,0,.449-.186L23.091,14.1a.644.644,0,0,0,.2-.463.611.611,0,0,0-.2-.463L17.623,7.826a.611.611,0,0,0-.449-.193.625.625,0,0,0-.635.635.676.676,0,0,0,.186.449l5.02,4.916-5.02,4.916a.662.662,0,0,0-.186.449A.625.625,0,0,0,17.174,19.633Z" transform="translate(-16.289 -7.383)" fill="#3b3b3a" stroke="#3b3b3a" stroke-width="0.5"/>
                    </svg>
                </span>
            </div>
            <span class="text-base text-dark fontbold leading-snug">Foire au questions (FAQ)</span>
        </div>
    </div>
    
    <p class="text-4xl fontbold leading-snug pt-4 md:pt-10 pb-8 md:pb-15">Foire aux questions (FAQ)</p>
    
    <div class="w-full grid grid-cols-1 row-gap-4 maxwidth-960">
        @if(isset($faqs) && count($faqs) > 0)
            @foreach($faqs as $key => $item)
                <div class="w-full bg-white shadow-md">
                    <div class="w-full flex justify-between items-center cursor-pointer select-item">
                        <p class="text-lg fontbold py-4 pl-6 leading-snug">{{$item["title"]}}</p>
                        <svg class="mr-6 down-icon flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                            <path id="chevron_down_circle_fill" class="down-icon" d="M14.094,24.094a10.074,10.074,0,0,0,10-10,10.089,10.089,0,0,0-10.01-10,10,10,0,0,0,.01,20Zm1.02-7.01a1.288,1.288,0,0,1-2.049,0L9.035,12.79A.773.773,0,0,1,9.005,11.7a.735.735,0,0,1,1.1-.02l3.99,4.216,3.99-4.216a.735.735,0,0,1,1.1.02.773.773,0,0,1-.029,1.088Z" transform="translate(-4.094 -4.094)" fill="#3b3b3a"/>
                        </svg>
                        <svg class="mr-6 up-icon hidden flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                            <path id="chevron_down_circle_fill" class="up-icon" d="M14.094,4.094a10.074,10.074,0,0,1,10,10,10.089,10.089,0,0,1-10.01,10,10,10,0,0,1,.01-20Zm1.02,7.01a1.288,1.288,0,0,0-2.049,0L9.035,15.4a.773.773,0,0,0-.029,1.088.735.735,0,0,0,1.1.02l3.99-4.216,3.99,4.216a.735.735,0,0,0,1.1-.02.773.773,0,0,0-.029-1.088Z" transform="translate(-4.094 -4.094)" fill="#3b3b3a"/>
                        </svg>
                    </div>
                    <p class="w-full pt-1 pb-6 px-8 text-lg leading-normal md:leading-loose hidden"><?php echo strip_tags($item["detail"])?></p>
                </div>
            @endforeach
        @endif
    </div>

</main>

@endsection

@section('scripts')
<script src="{{asset('js/pages/common/faq.js')}}"></script>
@endsection


@section('footer')
@include('layouts.footer')
@endsection
