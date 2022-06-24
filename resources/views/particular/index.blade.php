@extends('layouts.app')

@section('title')
<title>{{__('Sotoya')}}</title>
@endsection

@section('styles')
<link rel="stylesheet" href="{{asset('css/pages/part.css')}}"/>
@endsection

@section('content')

<main id="main-content" class="bg-whitegreen pb-10 md:pb-20">

    <div class="px-8 md:px-35">
        <div class="flex-none md:flex items-center pt-35px pb-6">
            <div class="mb-4 md:mb-0 flex items-center">
                <a href="/" class="text-base text-darkgray fontbold leading-snug">Accueil</a>
                <span>
                    <svg class="ml-4 mr-3" xmlns="http://www.w3.org/2000/svg" width="7.253" height="12.5" viewBox="0 0 7.253 12.5">
                        <path id="chevron_right" d="M17.174,19.633a.644.644,0,0,0,.449-.186L23.091,14.1a.644.644,0,0,0,.2-.463.611.611,0,0,0-.2-.463L17.623,7.826a.611.611,0,0,0-.449-.193.625.625,0,0,0-.635.635.676.676,0,0,0,.186.449l5.02,4.916-5.02,4.916a.662.662,0,0,0-.186.449A.625.625,0,0,0,17.174,19.633Z" transform="translate(-16.289 -7.383)" fill="#3b3b3a" stroke="#3b3b3a" stroke-width="0.5"/>
                    </svg>
                </span>
            </div>
            <span class="text-base text-dark fontbold leading-snug">Configurateur particulier</span>
        </div>
    </div>
    
    <form class="flex-none lg:flex px-8 md:px-20 maxwidth-1441 mx-auto" method="post" action="{{ route('part-summary') }}">
        @csrf
        <div class="w-full lg:w-8/12 pr-0 lg:pr-5">
    
            <div id="transaction_process">
    
                <div id="joinery" class="w-full shadow-md mb-4 mx-auto maxwidth-820">
                    <div class="w-full flex bg-white mx-auto relative items-center select-item">
                        <div class="absolute right-6">
                            <svg class="plus-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                <path id="plus_circle_fill" d="M14.094,24.094a10.074,10.074,0,0,0,10-10,10.089,10.089,0,0,0-10.01-10,10,10,0,0,0,.01,20Zm-.029-5.118c-.549,0-.843-.4-.843-.971V14.956H10.005c-.578,0-.98-.3-.98-.843,0-.559.373-.873.98-.873h3.216V10c0-.569.294-.971.843-.971a.865.865,0,0,1,.882.971v3.245h3.225c.6,0,.971.314.971.873,0,.539-.392.843-.971.843H14.947v3.049A.865.865,0,0,1,14.064,18.976Z" transform="translate(-4.094 -4.094)" fill="#3b3b3a"/>
                            </svg>
                            <svg class="minus-icon hidden" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                <path id="minus_circle_fill" d="M14.094,24.094a10.074,10.074,0,0,0,10-10,10.089,10.089,0,0,0-10.01-10,10,10,0,0,0,.01,20ZM9.947,14.966c-.578,0-.98-.3-.98-.853s.382-.873.98-.873h8.284c.6,0,.971.314.971.873s-.392.853-.971.853Z" transform="translate(-4.094 -4.094)" fill="#3b3b3a"/>
                            </svg>
                        </div>
                        <p class="text-2xl fontbold py-8 mx-auto step-title">Type de menuiserie</p>
                    </div>
                    <div class="bg-white px-4 md:px-14 pb-8 md:pb-14 toggle-part hidden">
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 col-gap-10 row-gap-10">
                            @if(isset($joinery) && count($joinery) > 0)
                                @foreach($joinery as $key => $item)
                                    <div id="{{$item['id']}}" class="relative rounded-lg mx-auto text-center type-select @if(isset($selected_joinery) && $selected_joinery == $item['id'])) active @endif" style="max-width:210px;">
                                        <img class="w-full rounded-lg" src="{{ asset('images') }}/{{$item['image']}}">
                                        <div class="w-full absolute bottom-0 rounded-b-md">
                                            <p class="bg-white mx-auto text-lg py-4 text-center fontbold rounded-b-lg">{{$item["name"]}}</p>
                                        </div>
                                        <span class="absolute right-3 top-3 rounded-full items-center h-8 w-8 check-icon bg-green">
                                            <svg class="mx-auto" style="top:50%; transform: translate(0, 60%);" xmlns="http://www.w3.org/2000/svg" width="15.5" height="14.5" viewBox="0 0 14.997 14">
                                                <path id="checkmark" d="M13.469,21.973a1.013,1.013,0,0,0,.879-.459l8.221-12.19a1.087,1.087,0,0,0,.226-.606.731.731,0,0,0-.8-.745.792.792,0,0,0-.748.418L13.434,20.113l-4.054-5a.851.851,0,0,0-.748-.4.774.774,0,0,0-.835.77.964.964,0,0,0,.252.6L12.564,21.5A1.111,1.111,0,0,0,13.469,21.973Z" transform="translate(-7.797 -7.973)" fill="#fff"/>
                                            </svg>
                                        </span>
                                        <p class="hidden">{{$item["price"]}}</p>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
               
                <div id="material" class="w-full shadow-md mb-4 mx-auto hidden maxwidth-820">
                    <div class="w-full flex bg-white mx-auto relative items-center select-item">
                        <div id="material_icons" class="absolute right-6 hidden">
                            <svg class="plus-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                <path id="plus_circle_fill" d="M14.094,24.094a10.074,10.074,0,0,0,10-10,10.089,10.089,0,0,0-10.01-10,10,10,0,0,0,.01,20Zm-.029-5.118c-.549,0-.843-.4-.843-.971V14.956H10.005c-.578,0-.98-.3-.98-.843,0-.559.373-.873.98-.873h3.216V10c0-.569.294-.971.843-.971a.865.865,0,0,1,.882.971v3.245h3.225c.6,0,.971.314.971.873,0,.539-.392.843-.971.843H14.947v3.049A.865.865,0,0,1,14.064,18.976Z" transform="translate(-4.094 -4.094)" fill="#3b3b3a"/>
                            </svg>
                            <svg class="minus-icon hidden" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                <path id="minus_circle_fill" d="M14.094,24.094a10.074,10.074,0,0,0,10-10,10.089,10.089,0,0,0-10.01-10,10,10,0,0,0,.01,20ZM9.947,14.966c-.578,0-.98-.3-.98-.853s.382-.873.98-.873h8.284c.6,0,.971.314.971.873s-.392.853-.971.853Z" transform="translate(-4.094 -4.094)" fill="#3b3b3a"/>
                            </svg>
                        </div>
                        <p class="text-2xl fontbold py-4 mx-auto step-title">Matériau</p>
                    </div>
                    <div class="bg-white pt-2 px-4 md:px-14 pb-8 md:pb-14 toggle-part">
                        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 col-gap-10 row-gap-10">
                            @if(isset($material) && count($material) > 0)
                                @foreach($material as $key => $item)
                                    <div id="{{$item['id']}}" class="relative rounded-lg px-3 mx-auto type-select maxwidth-210 check-item" style="padding-top:42px; padding-bottom:42px;">
                                        <p class="text-lg fontbold text-center pb-2">{{$item["name"]}}</p>
                                        <p class="text-center tracking-tight leading-normal text-darkgray" style="font-size:13px;">{{$item["description"]}}</p>
                                        <span class="absolute right-3 top-3 rounded-full items-center h-8 w-8 check-icon" style="background-color: #18A75A;">
                                            <svg class="mx-auto" style="top:50%; transform: translate(0, 60%);" xmlns="http://www.w3.org/2000/svg" width="15.5" height="14.5" viewBox="0 0 14.997 14">
                                                <path id="checkmark" d="M13.469,21.973a1.013,1.013,0,0,0,.879-.459l8.221-12.19a1.087,1.087,0,0,0,.226-.606.731.731,0,0,0-.8-.745.792.792,0,0,0-.748.418L13.434,20.113l-4.054-5a.851.851,0,0,0-.748-.4.774.774,0,0,0-.835.77.964.964,0,0,0,.252.6L12.564,21.5A1.111,1.111,0,0,0,13.469,21.973Z" transform="translate(-7.797 -7.973)" fill="#fff"/>
                                            </svg>
                                        </span>
                                        <p class="hidden">{{$item["price"]}}</p>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
        
                <div id="range" class="w-full shadow-md mb-4 mx-auto hidden maxwidth-820">
                    <div class="w-full flex bg-white mx-auto relative items-center select-item">
                        <div id="range_icons" class="absolute right-6">
                            <svg class="plus-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                <path id="plus_circle_fill" d="M14.094,24.094a10.074,10.074,0,0,0,10-10,10.089,10.089,0,0,0-10.01-10,10,10,0,0,0,.01,20Zm-.029-5.118c-.549,0-.843-.4-.843-.971V14.956H10.005c-.578,0-.98-.3-.98-.843,0-.559.373-.873.98-.873h3.216V10c0-.569.294-.971.843-.971a.865.865,0,0,1,.882.971v3.245h3.225c.6,0,.971.314.971.873,0,.539-.392.843-.971.843H14.947v3.049A.865.865,0,0,1,14.064,18.976Z" transform="translate(-4.094 -4.094)" fill="#3b3b3a"/>
                            </svg>
                            <svg class="minus-icon hidden" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                <path id="minus_circle_fill" d="M14.094,24.094a10.074,10.074,0,0,0,10-10,10.089,10.089,0,0,0-10.01-10,10,10,0,0,0,.01,20ZM9.947,14.966c-.578,0-.98-.3-.98-.853s.382-.873.98-.873h8.284c.6,0,.971.314.971.873s-.392.853-.971.853Z" transform="translate(-4.094 -4.094)" fill="#3b3b3a"/>
                            </svg>
                        </div>
                        <p class="text-2xl fontbold py-8 mx-auto step-title">Gamme</p>
                    </div>
                    <div class="bg-white pt-2 px-4 md:px-14 pb-8 md:pb-14 hidden toggle-part">
                        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 col-gap-10 row-gap-10">
                            @if(isset($range) && count($range) > 0)
                                @foreach($range as $key => $item)
                                    <div id="{{$item['id']}}" class="relative rounded-lg px-3 py-10 mx-auto type-select maxwidth-210 check-item">
                                        <p class="text-lg fontbold text-center pb-2">{{$item["name"]}}</p>
                                        <p class="text-center tracking-tight leading-normal text-darkgray" style="font-size:13px;">{{$item["description"]}}</p>
                                        <span class="absolute right-3 top-3 rounded-full items-center h-8 w-8 check-icon bg-green">
                                            <svg class="mx-auto" style="top:50%; transform: translate(0, 60%);" xmlns="http://www.w3.org/2000/svg" width="15.5" height="14.5" viewBox="0 0 14.997 14">
                                                <path id="checkmark" d="M13.469,21.973a1.013,1.013,0,0,0,.879-.459l8.221-12.19a1.087,1.087,0,0,0,.226-.606.731.731,0,0,0-.8-.745.792.792,0,0,0-.748.418L13.434,20.113l-4.054-5a.851.851,0,0,0-.748-.4.774.774,0,0,0-.835.77.964.964,0,0,0,.252.6L12.564,21.5A1.111,1.111,0,0,0,13.469,21.973Z" transform="translate(-7.797 -7.973)" fill="#fff"/>
                                            </svg>
                                        </span>
                                        <p class="hidden">{{$item["price"]}}</p>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
        
                </div>
        
                <div id="opening" class="w-full shadow-md mb-4 mx-auto hidden maxwidth-820">
                    <div class="w-full flex bg-white mx-auto relative items-center select-item">
                        <div id="opening_icons" class="absolute right-6">
                            <svg class="plus-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                <path id="plus_circle_fill" d="M14.094,24.094a10.074,10.074,0,0,0,10-10,10.089,10.089,0,0,0-10.01-10,10,10,0,0,0,.01,20Zm-.029-5.118c-.549,0-.843-.4-.843-.971V14.956H10.005c-.578,0-.98-.3-.98-.843,0-.559.373-.873.98-.873h3.216V10c0-.569.294-.971.843-.971a.865.865,0,0,1,.882.971v3.245h3.225c.6,0,.971.314.971.873,0,.539-.392.843-.971.843H14.947v3.049A.865.865,0,0,1,14.064,18.976Z" transform="translate(-4.094 -4.094)" fill="#3b3b3a"/>
                            </svg>
                            <svg class="minus-icon hidden" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                <path id="minus_circle_fill" d="M14.094,24.094a10.074,10.074,0,0,0,10-10,10.089,10.089,0,0,0-10.01-10,10,10,0,0,0,.01,20ZM9.947,14.966c-.578,0-.98-.3-.98-.853s.382-.873.98-.873h8.284c.6,0,.971.314.971.873s-.392.853-.971.853Z" transform="translate(-4.094 -4.094)" fill="#3b3b3a"/>
                            </svg>
                        </div>
                        <p class="text-2xl fontbold py-8 mx-auto step-title">Type d’ouverture</p>
                    </div>
                    <div class="bg-white pt-4 px-4 md:px-14 pb-8 md:pb-14 hidden toggle-part">
                        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 col-gap-10 row-gap-10">
                            @if(isset($opening) && count($opening) > 0)
                                @foreach($opening as $key => $item)
                                    <div id="{{$item['id']}}" class="relative rounded-lg px-3 py-10 mx-auto type-select maxwidth-210 check-item">
                                        <p class="text-lg fontbold text-center pb-2">{{$item["name"]}}</p>
                                        <p class="text-center tracking-tight leading-normal text-darkgray" style="font-size:13px;">{{$item["description"]}}</p>
                                        <span class="absolute right-3 top-3 rounded-full items-center h-8 w-8 check-icon bg-green">
                                            <svg class="mx-auto" style="top:50%; transform: translate(0, 60%);" xmlns="http://www.w3.org/2000/svg" width="15.5" height="14.5" viewBox="0 0 14.997 14">
                                                <path id="checkmark" d="M13.469,21.973a1.013,1.013,0,0,0,.879-.459l8.221-12.19a1.087,1.087,0,0,0,.226-.606.731.731,0,0,0-.8-.745.792.792,0,0,0-.748.418L13.434,20.113l-4.054-5a.851.851,0,0,0-.748-.4.774.774,0,0,0-.835.77.964.964,0,0,0,.252.6L12.564,21.5A1.111,1.111,0,0,0,13.469,21.973Z" transform="translate(-7.797 -7.973)" fill="#fff"/>
                                            </svg>
                                        </span>
                                        <p class="hidden">{{$item["price"]}}</p>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
        
                </div>
        
                <div id="leave" class="w-full shadow-md mb-4 mx-auto hidden maxwidth-820">
                    <div class="w-full flex bg-white mx-auto relative items-center select-item">
                        <div id="leave_icons" class="absolute right-6">
                            <svg class="plus-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                <path id="plus_circle_fill" d="M14.094,24.094a10.074,10.074,0,0,0,10-10,10.089,10.089,0,0,0-10.01-10,10,10,0,0,0,.01,20Zm-.029-5.118c-.549,0-.843-.4-.843-.971V14.956H10.005c-.578,0-.98-.3-.98-.843,0-.559.373-.873.98-.873h3.216V10c0-.569.294-.971.843-.971a.865.865,0,0,1,.882.971v3.245h3.225c.6,0,.971.314.971.873,0,.539-.392.843-.971.843H14.947v3.049A.865.865,0,0,1,14.064,18.976Z" transform="translate(-4.094 -4.094)" fill="#3b3b3a"/>
                            </svg>
                            <svg class="minus-icon hidden" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                <path id="minus_circle_fill" d="M14.094,24.094a10.074,10.074,0,0,0,10-10,10.089,10.089,0,0,0-10.01-10,10,10,0,0,0,.01,20ZM9.947,14.966c-.578,0-.98-.3-.98-.853s.382-.873.98-.873h8.284c.6,0,.971.314.971.873s-.392.853-.971.853Z" transform="translate(-4.094 -4.094)" fill="#3b3b3a"/>
                            </svg>
                        </div>
                        <p class="text-2xl fontbold py-8 mx-auto step-title">Nombre de vantaux</p>
                    </div>
                    <div class="bg-white pt-4 px-4 md:px-14 pb-8 md:pb-14 hidden toggle-part">
                        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 col-gap-10 row-gap-10">
                            @if(isset($leave) && count($leave) > 0)
                                @foreach($leave as $key => $item)
                                    <div id="{{$item['id']}}" class="relative border border-gray-200 rounded-lg px-3 py-10 mx-auto type-select maxwidth-210 check-item">
                                        <p class="text-lg fontbold text-center pb-2">{{$item["name"]}}</p>
                                        <p class="text-center tracking-tight leading-normal text-darkgray" style="font-size:13px;">{{$item["description"]}}</p>
                                        <span class="absolute right-3 top-3 rounded-full items-center h-8 w-8 check-icon bg-green">
                                            <svg class="mx-auto" style="top:50%; transform: translate(0, 60%);" xmlns="http://www.w3.org/2000/svg" width="15.5" height="14.5" viewBox="0 0 14.997 14">
                                                <path id="checkmark" d="M13.469,21.973a1.013,1.013,0,0,0,.879-.459l8.221-12.19a1.087,1.087,0,0,0,.226-.606.731.731,0,0,0-.8-.745.792.792,0,0,0-.748.418L13.434,20.113l-4.054-5a.851.851,0,0,0-.748-.4.774.774,0,0,0-.835.77.964.964,0,0,0,.252.6L12.564,21.5A1.111,1.111,0,0,0,13.469,21.973Z" transform="translate(-7.797 -7.973)" fill="#fff"/>
                                            </svg>
                                        </span>
                                        <p class="hidden">{{$item["price"]}}</p>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
        
                <div id="installation" class="w-full shadow-md mb-4 mx-auto hidden maxwidth-820">
                    <div class="w-full flex bg-white mx-auto relative items-center select-item maxwidth-820">
                        <div id="installation_icons" class="absolute right-6">
                            <svg class="plus-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                <path id="plus_circle_fill" d="M14.094,24.094a10.074,10.074,0,0,0,10-10,10.089,10.089,0,0,0-10.01-10,10,10,0,0,0,.01,20Zm-.029-5.118c-.549,0-.843-.4-.843-.971V14.956H10.005c-.578,0-.98-.3-.98-.843,0-.559.373-.873.98-.873h3.216V10c0-.569.294-.971.843-.971a.865.865,0,0,1,.882.971v3.245h3.225c.6,0,.971.314.971.873,0,.539-.392.843-.971.843H14.947v3.049A.865.865,0,0,1,14.064,18.976Z" transform="translate(-4.094 -4.094)" fill="#3b3b3a"/>
                            </svg>
                            <svg class="minus-icon hidden" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                <path id="minus_circle_fill" d="M14.094,24.094a10.074,10.074,0,0,0,10-10,10.089,10.089,0,0,0-10.01-10,10,10,0,0,0,.01,20ZM9.947,14.966c-.578,0-.98-.3-.98-.853s.382-.873.98-.873h8.284c.6,0,.971.314.971.873s-.392.853-.971.853Z" transform="translate(-4.094 -4.094)" fill="#3b3b3a"/>
                            </svg>
                        </div>
                        <p class="text-2xl fontbold py-8 mx-auto step-title">Type de pose</p>
                    </div>
                    <div class="bg-white pt-4 px-4 md:px-14 pb-8 md:pb-14 hidden toggle-part">
                        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 col-gap-10 row-gap-10">
                            @if(isset($installation) && count($installation) > 0)
                                @foreach($installation as $key => $item)
                                    <div id="{{$item['id']}}" class="relative border border-gray-200 rounded-lg px-3 py-10 mx-auto type-select maxwidth-210 check-item">
                                        <p class="text-lg fontbold text-center pb-2">{{$item["name"]}}</p>
                                        <p class="text-center tracking-tight leading-normal text-darkgray" style="font-size:13px;">{{$item["description"]}}</p>
                                        <span class="absolute right-3 top-3 rounded-full items-center h-8 w-8 check-icon bg-green">
                                            <svg class="mx-auto" style="top:50%; transform: translate(0, 60%);" xmlns="http://www.w3.org/2000/svg" width="15.5" height="14.5" viewBox="0 0 14.997 14">
                                                <path id="checkmark" d="M13.469,21.973a1.013,1.013,0,0,0,.879-.459l8.221-12.19a1.087,1.087,0,0,0,.226-.606.731.731,0,0,0-.8-.745.792.792,0,0,0-.748.418L13.434,20.113l-4.054-5a.851.851,0,0,0-.748-.4.774.774,0,0,0-.835.77.964.964,0,0,0,.252.6L12.564,21.5A1.111,1.111,0,0,0,13.469,21.973Z" transform="translate(-7.797 -7.973)" fill="#fff"/>
                                            </svg>
                                        </span> 
                                        <p class="hidden">{{$item["price"]}}</p>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
        
        
                </div>
        
                <div id="dimension" class="w-full shadow-md mb-4 mx-auto hidden maxwidth-820">
                    <div class="w-full flex bg-white mx-auto relative items-center select-item maxwidth-820">
                        <div id="dimension_icons" class="absolute right-6">
                            <svg class="plus-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                <path id="plus_circle_fill" d="M14.094,24.094a10.074,10.074,0,0,0,10-10,10.089,10.089,0,0,0-10.01-10,10,10,0,0,0,.01,20Zm-.029-5.118c-.549,0-.843-.4-.843-.971V14.956H10.005c-.578,0-.98-.3-.98-.843,0-.559.373-.873.98-.873h3.216V10c0-.569.294-.971.843-.971a.865.865,0,0,1,.882.971v3.245h3.225c.6,0,.971.314.971.873,0,.539-.392.843-.971.843H14.947v3.049A.865.865,0,0,1,14.064,18.976Z" transform="translate(-4.094 -4.094)" fill="#3b3b3a"/>
                            </svg>
                            <svg class="minus-icon hidden" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                <path id="minus_circle_fill" d="M14.094,24.094a10.074,10.074,0,0,0,10-10,10.089,10.089,0,0,0-10.01-10,10,10,0,0,0,.01,20ZM9.947,14.966c-.578,0-.98-.3-.98-.853s.382-.873.98-.873h8.284c.6,0,.971.314.971.873s-.392.853-.971.853Z" transform="translate(-4.094 -4.094)" fill="#3b3b3a"/>
                            </svg>
                        </div>
                        <p class="text-2xl fontbold py-8 mx-auto step-title">Dimensions</p>
                    </div>
                    <div class="bg-white pt-4 px-4 md:px-14 pb-8 md:pb-14 hidden toggle-part">
                        <div class="grid grid-cols-1 md:grid-cols-2 col-gap-10 row-gap-10 pb-4 mb-4">
                            <div class="h-12">
                                <p class="text-lg fontbold pb-3">Hauteur totale</p>
                                <button type="button" class="select-button focus:border-green p-4 text-base border border-heavygray rounded-lg w-full relative text-left">
                                    <span id="height_size">Hauteur totale</span>
                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-gray-700">
                                        <svg class="down-icon" xmlns="http://www.w3.org/2000/svg" width="17.771" height="10" viewBox="0 0 17.771 10">
                                            <path d="M16.518,26.539a.921.921,0,0,0,.685-.3l7.924-8.108a.912.912,0,0,0,.276-.654.926.926,0,0,0-.941-.941.99.99,0,0,0-.665.266l-7.28,7.444L9.238,16.8a.971.971,0,0,0-.665-.266.926.926,0,0,0-.941.941.954.954,0,0,0,.276.665l7.924,8.1A.937.937,0,0,0,16.518,26.539Z" transform="translate(-7.633 -16.539)" fill="#3b3b3a"/>
                                        </svg>
                                        <svg class="up-icon hidden" xmlns="http://www.w3.org/2000/svg" width="17.771" height="10" viewBox="0 0 17.771 10">
                                            <path d="M16.519,16.539a.921.921,0,0,1,.685.3l7.925,8.109a.912.912,0,0,1,.276.654.926.926,0,0,1-.941.941.991.991,0,0,1-.665-.266l-7.28-7.444-7.28,7.444a.971.971,0,0,1-.665.266.926.926,0,0,1-.941-.941.954.954,0,0,1,.276-.665l7.925-8.1A.937.937,0,0,1,16.519,16.539Z" transform="translate(-7.633 -16.539)" fill="#3b3b3a"/>
                                        </svg>
                                    </div>
                                </button>
                                <div class="hidden rounded-lg w-full mt-3 relative z-50 bg-white" style="border: 1px solid #dedede">
                                    <p class="hidden bg-white hover:bg-gray-100 rounded-md cursor-default px-4 py-4">Hauteur totale</p>
                                    @if(isset($height) && count($height) > 0)
                                        @foreach($height as $key => $item)
                                            <p id="{{$item['id']}}" class="sel-item bg-white hover:bg-gray-100 rounded-md cursor-default px-4 py-4">{{$item["value"]}}</p>
                                        @endforeach
                                    @endif
                                </div>
                                @if(isset($height) && count($height) > 0)
                                    @foreach($height as $key => $item)
                                        <p id="{{$item["value"]}}" class="height_price hidden">{{$item["price"]}}</p>
                                    @endforeach
                                @endif
                            </div>
                            <div class="h-12">
                                <p class="text-lg fontbold pb-3">Largeur totale</p>
                                <button type="button" class="select-button focus:border-green p-4 text-base border border-heavygray rounded-lg w-full relative text-left">
                                    <span id="width_size">Largeur totale</span>
                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-gray-700">
                                        <svg class="down-icon" xmlns="http://www.w3.org/2000/svg" width="17.771" height="10" viewBox="0 0 17.771 10">
                                            <path d="M16.518,26.539a.921.921,0,0,0,.685-.3l7.924-8.108a.912.912,0,0,0,.276-.654.926.926,0,0,0-.941-.941.99.99,0,0,0-.665.266l-7.28,7.444L9.238,16.8a.971.971,0,0,0-.665-.266.926.926,0,0,0-.941.941.954.954,0,0,0,.276.665l7.924,8.1A.937.937,0,0,0,16.518,26.539Z" transform="translate(-7.633 -16.539)" fill="#3b3b3a"/>
                                        </svg>
                                        <svg class="up-icon hidden" xmlns="http://www.w3.org/2000/svg" width="17.771" height="10" viewBox="0 0 17.771 10">
                                            <path d="M16.519,16.539a.921.921,0,0,1,.685.3l7.925,8.109a.912.912,0,0,1,.276.654.926.926,0,0,1-.941.941.991.991,0,0,1-.665-.266l-7.28-7.444-7.28,7.444a.971.971,0,0,1-.665.266.926.926,0,0,1-.941-.941.954.954,0,0,1,.276-.665l7.925-8.1A.937.937,0,0,1,16.519,16.539Z" transform="translate(-7.633 -16.539)" fill="#3b3b3a"/>
                                        </svg>
                                    </div>
                                </button>
                                <div class="hidden rounded-lg w-full mt-3 relative z-50 bg-white " style="border: 1px solid #dedede">
                                    <p class="hidden bg-white hover:bg-gray-100 rounded-md cursor-default px-4 py-4">Largeur totale</p>
                                    @if(isset($width) && count($width) > 0)
                                        @foreach($width as $key => $item)
                                            <p id="{{$item['id']}}" class="sel-item bg-white hover:bg-gray-100 rounded-md cursor-default px-4 py-4">{{$item["value"]}}</p>
                                        @endforeach
                                    @endif
                                </div>
                                @if(isset($width) && count($width) > 0)
                                    @foreach($width as $key => $item)
                                        <p id="{{$item["value"]}}" class="width_price hidden">{{$item["price"]}}</p>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
        
                <div id="insulation" class="w-full shadow-md mb-4 mx-auto hidden maxwidth-820">
                    <div class="w-full flex bg-white mx-auto relative items-center select-item">
                        <div id="insulation_icons" class="absolute right-6">
                            <svg class="plus-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                <path id="plus_circle_fill" d="M14.094,24.094a10.074,10.074,0,0,0,10-10,10.089,10.089,0,0,0-10.01-10,10,10,0,0,0,.01,20Zm-.029-5.118c-.549,0-.843-.4-.843-.971V14.956H10.005c-.578,0-.98-.3-.98-.843,0-.559.373-.873.98-.873h3.216V10c0-.569.294-.971.843-.971a.865.865,0,0,1,.882.971v3.245h3.225c.6,0,.971.314.971.873,0,.539-.392.843-.971.843H14.947v3.049A.865.865,0,0,1,14.064,18.976Z" transform="translate(-4.094 -4.094)" fill="#3b3b3a"/>
                            </svg>
                            <svg class="minus-icon hidden" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                <path id="minus_circle_fill" d="M14.094,24.094a10.074,10.074,0,0,0,10-10,10.089,10.089,0,0,0-10.01-10,10,10,0,0,0,.01,20ZM9.947,14.966c-.578,0-.98-.3-.98-.853s.382-.873.98-.873h8.284c.6,0,.971.314.971.873s-.392.853-.971.853Z" transform="translate(-4.094 -4.094)" fill="#3b3b3a"/>
                            </svg>
                        </div>
                        <p class="text-2xl fontbold py-8 mx-auto step-title">Pour isolation de</p>
                    </div>
                    <div class="bg-white pt-4 px-4 md:px-14 pb-8 md:pb-14 hidden toggle-part">
                        <div class="grid grid-cols-1 md:grid-cols-2 col-gap-10 row-gap-10 px-4 pb-4 mb-4">
                            <div class="h-12">
                                <p class="text-lg fontbold pb-3">Pour isolation de</p>
                                <button type="button" class="select-button focus:border-green p-4 text-base border border-heavygray rounded-lg w-full relative text-left">
                                    <span id="insulation_size">Isolation</span>
                                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-gray-700">
                                        <svg class="down-icon" xmlns="http://www.w3.org/2000/svg" width="17.771" height="10" viewBox="0 0 17.771 10">
                                            <path d="M16.518,26.539a.921.921,0,0,0,.685-.3l7.924-8.108a.912.912,0,0,0,.276-.654.926.926,0,0,0-.941-.941.99.99,0,0,0-.665.266l-7.28,7.444L9.238,16.8a.971.971,0,0,0-.665-.266.926.926,0,0,0-.941.941.954.954,0,0,0,.276.665l7.924,8.1A.937.937,0,0,0,16.518,26.539Z" transform="translate(-7.633 -16.539)" fill="#3b3b3a"/>
                                        </svg>
                                        <svg class="up-icon hidden" xmlns="http://www.w3.org/2000/svg" width="17.771" height="10" viewBox="0 0 17.771 10">
                                            <path d="M16.519,16.539a.921.921,0,0,1,.685.3l7.925,8.109a.912.912,0,0,1,.276.654.926.926,0,0,1-.941.941.991.991,0,0,1-.665-.266l-7.28-7.444-7.28,7.444a.971.971,0,0,1-.665.266.926.926,0,0,1-.941-.941.954.954,0,0,1,.276-.665l7.925-8.1A.937.937,0,0,1,16.519,16.539Z" transform="translate(-7.633 -16.539)" fill="#3b3b3a"/>
                                        </svg>
                                    </div>
                                </button>
                                <div class="hidden rounded-lg w-full mt-3 relative z-50 bg-white " style="border: 1px solid #dedede">
                                    <p class="hidden bg-white hover:bg-gray-100 rounded-md cursor-default px-4 py-4">Isolation</p>
                                    @if(isset($insulation) && count($insulation) > 0)
                                        @foreach($insulation as $key => $item)  
                                            <p id="{{$item['id']}}" class="sel-item bg-white hover:bg-gray-100 rounded-md cursor-default px-4 py-4">{{$item["value"]}}</p>
                                        @endforeach
                                    @endif
                                </div>

                                @if(isset($insulation) && count($insulation) > 0)
                                    @foreach($insulation as $key => $item)
                                        <p id="{{$item["value"]}}" class="insulation_price hidden">{{$item["price"]}}</p>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
        
                <div id="aeration" class="w-full shadow-md mb-4 mx-auto hidden maxwidth-820">
                    <div class="w-full flex bg-white mx-auto relative items-center select-item">
                        <div id="handleheight_icons" class="absolute right-6">
                            <svg class="plus-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                <path id="plus_circle_fill" d="M14.094,24.094a10.074,10.074,0,0,0,10-10,10.089,10.089,0,0,0-10.01-10,10,10,0,0,0,.01,20Zm-.029-5.118c-.549,0-.843-.4-.843-.971V14.956H10.005c-.578,0-.98-.3-.98-.843,0-.559.373-.873.98-.873h3.216V10c0-.569.294-.971.843-.971a.865.865,0,0,1,.882.971v3.245h3.225c.6,0,.971.314.971.873,0,.539-.392.843-.971.843H14.947v3.049A.865.865,0,0,1,14.064,18.976Z" transform="translate(-4.094 -4.094)" fill="#3b3b3a"/>
                            </svg>
                            <svg class="minus-icon hidden" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                <path id="minus_circle_fill" d="M14.094,24.094a10.074,10.074,0,0,0,10-10,10.089,10.089,0,0,0-10.01-10,10,10,0,0,0,.01,20ZM9.947,14.966c-.578,0-.98-.3-.98-.853s.382-.873.98-.873h8.284c.6,0,.971.314.971.873s-.392.853-.971.853Z" transform="translate(-4.094 -4.094)" fill="#3b3b3a"/>
                            </svg>
                        </div>
                        <p class="text-2xl fontbold py-8 mx-auto step-title">Aération</p>
                    </div>
                    <div class="bg-white pt-4 px-4 md:px-14 pb-8 md:pb-14 hidden toggle-part">
                        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 col-gap-10 row-gap-10">
                            @if(isset($aeration) && count($aeration) > 0)
                                @foreach($aeration as $key => $item)
                                    <div id="{{$item['id']}}" class="relative border border-gray-200 rounded-lg px-3 py-10 mx-auto type-select maxwidth-210 check-item">
                                        <p class="text-lg fontbold text-center pb-2">{{$item["name"]}}</p>
                                        <p class="text-center tracking-tight leading-normal text-darkgray" style="font-size:13px;">{{$item["description"]}}</p>
                                        <span class="absolute right-3 top-3 rounded-full items-center h-8 w-8 check-icon bg-green">
                                            <svg class="mx-auto" style="top:50%; transform: translate(0, 60%);" xmlns="http://www.w3.org/2000/svg" width="15.5" height="14.5" viewBox="0 0 14.997 14">
                                                <path id="checkmark" d="M13.469,21.973a1.013,1.013,0,0,0,.879-.459l8.221-12.19a1.087,1.087,0,0,0,.226-.606.731.731,0,0,0-.8-.745.792.792,0,0,0-.748.418L13.434,20.113l-4.054-5a.851.851,0,0,0-.748-.4.774.774,0,0,0-.835.77.964.964,0,0,0,.252.6L12.564,21.5A1.111,1.111,0,0,0,13.469,21.973Z" transform="translate(-7.797 -7.973)" fill="#fff"/>
                                            </svg>
                                        </span> 
                                        <p class="hidden">{{$item["price"]}}</p>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
        
                <div id="glazing" class="w-full shadow-md mb-4 mx-auto hidden maxwidth-820">
                    <div class="w-full flex bg-white mx-auto relative items-center select-item">
                        <div id="glazing_icons" class="absolute right-6">
                            <svg class="plus-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                <path id="plus_circle_fill" d="M14.094,24.094a10.074,10.074,0,0,0,10-10,10.089,10.089,0,0,0-10.01-10,10,10,0,0,0,.01,20Zm-.029-5.118c-.549,0-.843-.4-.843-.971V14.956H10.005c-.578,0-.98-.3-.98-.843,0-.559.373-.873.98-.873h3.216V10c0-.569.294-.971.843-.971a.865.865,0,0,1,.882.971v3.245h3.225c.6,0,.971.314.971.873,0,.539-.392.843-.971.843H14.947v3.049A.865.865,0,0,1,14.064,18.976Z" transform="translate(-4.094 -4.094)" fill="#3b3b3a"/>
                            </svg>
                            <svg class="minus-icon hidden" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                <path id="minus_circle_fill" d="M14.094,24.094a10.074,10.074,0,0,0,10-10,10.089,10.089,0,0,0-10.01-10,10,10,0,0,0,.01,20ZM9.947,14.966c-.578,0-.98-.3-.98-.853s.382-.873.98-.873h8.284c.6,0,.971.314.971.873s-.392.853-.971.853Z" transform="translate(-4.094 -4.094)" fill="#3b3b3a"/>
                            </svg>
                        </div>
                        <p class="text-2xl fontbold py-8 mx-auto step-title">Vitrage</p>
                    </div>
                    <div class="bg-white pt-4 px-4 md:px-8 pb-8 md:pb-14 hidden toggle-part">
                        <div class="grid md:grid-cols-1 xl:grid-cols-2 col-gap-10 row-gap-10">
                            @if(isset($glazing) && count($glazing) > 0)
                                @foreach($glazing as $key => $item)
                                    <div id="{{$item['id']}}" class="relative border border-gray-200 rounded-lg px-3 mx-auto type-select maxwidth-335" style="width:335px; height:147px; padding-top:20px; padding-bottom:20px;">
                                        <p class="text-lg fontbold text-center pb-2">{{$item["name"]}}</p>
                                        <p class="text-center tracking-tighter leading-normal text-darkgray" style="font-size: 13px;">{{$item["description"]}}</p>
                                        <span class="absolute right-3 top-3 rounded-full items-center h-8 w-8 check-icon" style="background-color: #18A75A;">
                                            <svg class="mx-auto" style="top:50%; transform: translate(0, 60%);" xmlns="http://www.w3.org/2000/svg" width="15.5" height="14.5" viewBox="0 0 14.997 14">
                                                <path id="checkmark" d="M13.469,21.973a1.013,1.013,0,0,0,.879-.459l8.221-12.19a1.087,1.087,0,0,0,.226-.606.731.731,0,0,0-.8-.745.792.792,0,0,0-.748.418L13.434,20.113l-4.054-5a.851.851,0,0,0-.748-.4.774.774,0,0,0-.835.77.964.964,0,0,0,.252.6L12.564,21.5A1.111,1.111,0,0,0,13.469,21.973Z" transform="translate(-7.797 -7.973)" fill="#fff"/>
                                            </svg>
                                        </span> 
                                        <p class="hidden">{{$item["price"]}}</p>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
        
                <div id="color" class="w-full shadow-md mb-4 mx-auto hidden maxwidth-820">
        
                    <div class="w-full flex bg-white mx-auto relative items-center select-item maxwidth-820">
                        <div id="glazing_icons" class="absolute right-6">
                            <svg class="plus-icon" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                <path id="plus_circle_fill" d="M14.094,24.094a10.074,10.074,0,0,0,10-10,10.089,10.089,0,0,0-10.01-10,10,10,0,0,0,.01,20Zm-.029-5.118c-.549,0-.843-.4-.843-.971V14.956H10.005c-.578,0-.98-.3-.98-.843,0-.559.373-.873.98-.873h3.216V10c0-.569.294-.971.843-.971a.865.865,0,0,1,.882.971v3.245h3.225c.6,0,.971.314.971.873,0,.539-.392.843-.971.843H14.947v3.049A.865.865,0,0,1,14.064,18.976Z" transform="translate(-4.094 -4.094)" fill="#3b3b3a"/>
                            </svg>
                            <svg class="minus-icon hidden" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                <path id="minus_circle_fill" d="M14.094,24.094a10.074,10.074,0,0,0,10-10,10.089,10.089,0,0,0-10.01-10,10,10,0,0,0,.01,20ZM9.947,14.966c-.578,0-.98-.3-.98-.853s.382-.873.98-.873h8.284c.6,0,.971.314.971.873s-.392.853-.971.853Z" transform="translate(-4.094 -4.094)" fill="#3b3b3a"/>
                            </svg>
                        </div>
                        <p class="text-2xl fontbold py-8 mx-auto step-title">Couleur menuiserie</p>
                    </div>
        
                    <div class="bg-white pt-4 px-4 md:px-14 pb-8 md:pb-14 hidden toggle-part">
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 col-gap-10 row-gap-10">
                            @if(isset($color) && count($color) > 0)
                                @foreach($color as $key => $item)
                                    <div id="{{$item['id']}}" class="relative border border-gray-200 rounded-lg text-center mx-auto type-select color-item" style="background-color: {{$item['value']}};">
                                        <div class="w-full absolute bottom-0">
                                            <p class="bg-white mx-auto  py-4 text-center fontbold rounded-b-lg">{{$item['name']}}</p>
                                        </div>
                                        <span class="absolute right-3 top-3 rounded-full items-center h-8 w-8 check-icon bg-green">
                                            <svg class="mx-auto" style="top:50%; transform: translate(0, 60%);" xmlns="http://www.w3.org/2000/svg" width="15.5" height="14.5" viewBox="0 0 14.997 14">
                                                <path id="checkmark" d="M13.469,21.973a1.013,1.013,0,0,0,.879-.459l8.221-12.19a1.087,1.087,0,0,0,.226-.606.731.731,0,0,0-.8-.745.792.792,0,0,0-.748.418L13.434,20.113l-4.054-5a.851.851,0,0,0-.748-.4.774.774,0,0,0-.835.77.964.964,0,0,0,.252.6L12.564,21.5A1.111,1.111,0,0,0,13.469,21.973Z" transform="translate(-7.797 -7.973)" fill="#fff"/>
                                            </svg>
                                        </span> 
                                        <p class="hidden">{{$item["price"]}}</p>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
    
            </div>
            
        </div>
    
        <div id="transaction_process_panel" class="w-full lg:w-4/12 pl-0 pt-6 lg:pt-0">
            <div class="mx-auto" style="max-width:418px;">
                <div class="flex">
                    <a href="/part/@if(isset($selected_joinery)){{$selected_joinery}}@endif" class="w-1/2 mr-2 shadow-md bg-white cursor-pointer">
                        <p class="w-full text-lg py-4 text-center fontbold">Retour</p>
                    </a>
                    <button id="follow_button" type="button" class="w-1/2 ml-2 shadow-md bg-white cursor-pointer">
                        <p class="w-full text-lg bg-darkgray text-white py-4 text-center fontbold">Suivant</p>
                    </button>
                </div>
        
                <div class="mt-4 pb-10 shadow-md bg-white">
                    <p class="text-2xl pt-10 fontbold text-center" style="padding-bottom:27px;">Votre configurateur</p>
                    
                    <div class="flex justify-between items-center px-3 md:px-8" style="height:60px; background-color:#f7f7f7;">
                        <p class="text-lg fontbold">Prix :</p>
                        <p id="price" class="text-4xl fontbold">0€</p>
                    </div>
                    <div class="px-3 md:px-8">
                        <div id="joinery_result_wrapper" class="hidden">
                            <div class="flex flex-wrap items-center">
                                <p class="text-base py-4 leading-snug">Type de menuiserie :</p>
                                <p id="joinery_result" class="fontbold py-2 pl-3 leading-snug">Fenêtre</p>
                                <input id="joinery_submit" type="hidden" name="joinery_submit"/>
                            </div>
                        </div>
                        <div id="material_result_wrapper" class="hidden">
                            <hr class="bg-gray-400"/>
                            <div class="flex flex-wrap items-center">
                                <p class="text-base py-4 leading-snug">Matériau :</p>
                                <p id="material_result" class="fontbold py-2 pl-3 leading-snug">Aluminium</p>
                                <input id="material_submit" type="hidden" name="material_submit"/>
                            </div>
                        </div>
                        <div id="range_result_wrapper" class="hidden">
                            <hr class="bg-gray-400"/>
                            <div class="flex flex-wrap items-center">
                                <p class="text-base py-4 leading-snug">Gamme :</p>
                                <p id="range_result" class="fontbold py-2 pl-3 leading-snug">Gamme 70</p>
                                <input id="range_submit" type="hidden" name="range_submit"/>
                            </div>
                        </div>
                        <div id="opening_result_wrapper" class="hidden">
                            <hr class="bg-gray-400"/>
                            <div class="flex flex-wrap items-center">
                                <p class="text-base py-4 leading-snug">Type d’ouverture :</p>
                                <p id="opening_result" class="fontbold py-2 pl-3 leading-snug">Abattant</p>
                                <input id="opening_submit" type="hidden" name="opening_submit"/>
                            </div>
                        </div>
                        <div id="leave_result_wrapper" class="hidden">
                            <hr class="bg-gray-400"/>
                            <div class="flex flex-wrap items-center">
                                <p class="text-base py-4 leading-snug">Nombre de vantaux :</p>
                                <p id="leave_result" class="fontbold py-2 pl-3 leading-snug">1 vantail</p>
                                <input id="leave_submit" type="hidden" name="leave_submit"/>
                            </div>
                        </div>
                        <div id="installation_result_wrapper" class="hidden">
                            <hr class="bg-gray-400"/>
                            <div class="flex flex-wrap items-center">
                                <p class="text-base py-4 leading-snug">Type de pose :</p>
                                <p id="installation_result" class="fontbold py-2 pl-3 leading-snug">Applique</p>
                                <input id="installation_submit" type="hidden" name="installation_submit"/>
                            </div>
                        </div>
                        <div id="height_size_result_wrapper" class="hidden">
                            <hr class="bg-gray-400"/>
                            <div class="flex flex-wrap items-center">
                                <p class="text-base py-4 leading-snug">Hauteur totale :</p>
                                <p id="height_size_result" class="fontbold py-2 pl-3 leading-snug">600</p>
                                <input id="height_size_submit" type="hidden" name="height_size_submit"/>
                            </div>
                        </div>
                        <div id="width_size_result_wrapper" class="hidden">
                            <hr class="bg-gray-400"/>
                            <div class="flex flex-wrap items-center">
                                <p class="text-base py-4 leading-snug">Largeur totale :</p>
                                <p id="width_size_result" class="fontbold py-2 pl-3 leading-snug">600</p>
                                <input id="width_size_submit" type="hidden" name="width_size_submit"/>
                            </div>
                        </div>
                        <div id="insulation_size_result_wrapper" class="hidden">
                            <hr class="bg-gray-400"/>
                            <div class="flex flex-wrap items-center">
                                <p class="text-base py-4 leading-snug">Pour isolation de :</p>
                                <p id="insulation_size_result" class="fontbold py-2 pl-3 leading-snug">120</p>
                                <input id="insulation_size_submit" type="hidden" name="insulation_size_submit"/>
                            </div>
                        </div>
                        <div id="aeration_result_wrapper" class="hidden">
                            <hr class="bg-gray-400"/>
                            <div class="flex flex-wrap items-center">
                                <p class="text-base py-4 leading-snug">Aération :</p>
                                <p id="aeration_result" class="fontbold py-2 pl-3 leading-snug">15 M3/H</p>
                                <input id="aeration_submit" type="hidden" name="aeration_submit"/>
                            </div>
                        </div>
                        <div id="glazing_result_wrapper" class="hidden">
                            <hr class="bg-gray-400"/>
                            <div class="flex flex-wrap items-center">
                                <p class="text-base py-4 leading-snug">Vitrage :</p>
                                <p id="glazing_result" class="fontbold py-2 pl-3 leading-snug">4/16/4 FE</p>
                                <input id="glazing_submit" type="hidden" name="glazing_submit"/>
                            </div>
                        </div>
                        <div id="color_result_wrapper" class="hidden">
                            <hr class="bg-gray-400"/>
                            <div class="flex flex-wrap items-center">
                                <p class="text-base py-4 leading-snug">Couleur menuiserie :</p>
                                <p id="color_result" class="fontbold py-2 pl-3 leading-snug">RAL 9016</p>
                                <input id="color_submit" type="hidden" name="color_submit"/>
                            </div>
                        </div>
                        
                    </div>
              
                    
                </div>
            </div>
            
        </div>
    
    </form>
    
    <p id="joinery_selected" class="hidden">@if(isset($selected_joinery)) {{$selected_joinery}} @endif</p>

</main>

@endsection

@section('scripts')
<script src="{{asset('js/components/custom-select.js')}}"></script>
<script src="{{asset('js/pages/part/index.js')}}"></script>
@endsection


@section('footer')
@include('layouts.footer')
@endsection
