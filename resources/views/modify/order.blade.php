@extends('layouts.app')

@section('title')
<title>{{__('Sotoya')}}</title>
@endsection

@section('styles')
<link rel="stylesheet" href="{{asset('css/pages/pro.css')}}"/>
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
            <div class="mb-4 md:mb-0 flex items-center">
                <a href="@if(Auth::user()->mode == 1){{ route('pro-projects') }}@else{{ route('part-projects') }}@endif" class="text-base text-darkgray fontbold leading-snug">Mon compte @if(Auth::user()->mode == 1)professionnel @else particulier @endif </a>
                <span>
                    <svg class="ml-4 mr-3" xmlns="http://www.w3.org/2000/svg" width="7.253" height="12.5" viewBox="0 0 7.253 12.5">
                        <path id="chevron_right" d="M17.174,19.633a.644.644,0,0,0,.449-.186L23.091,14.1a.644.644,0,0,0,.2-.463.611.611,0,0,0-.2-.463L17.623,7.826a.611.611,0,0,0-.449-.193.625.625,0,0,0-.635.635.676.676,0,0,0,.186.449l5.02,4.916-5.02,4.916a.662.662,0,0,0-.186.449A.625.625,0,0,0,17.174,19.633Z" transform="translate(-16.289 -7.383)" fill="#3b3b3a" stroke="#3b3b3a" stroke-width="0.5"/>
                    </svg>
                </span>
            </div>
            <span class="text-base text-dark fontbold leading-snug">Modifier l'ordre</span>
        </div>
    </div>
    
    <div class="flex-none lg:flex px-8 md:px-20 maxwidth-1441 mx-auto">
    
        <div class="w-full lg:w-8/12 pr-0 lg:pr-5">
    
            <div class="grid grid-cols-1 md:grid-cols-3 col-gap-4 mb-4 mx-auto maxwidth-820">
                <a href="/" class="py-4 mb-4 md:mb-0 shadow-md text-center bg-white text-lg fontbold">Continuer mes achats</a>
                <form method="POST" action="@if(Auth::user()->mode == 1){{ route('pro-order-save') }}@else{{ route('part-order-save') }}@endif">
                    @csrf

                    <input type="hidden" name="order_id" value="{{$order['id']}}"/>

                    <input id="price_submit" type="hidden" name="price_submit"/>
                    <input id="joinery_submit" type="hidden" name="joinery_submit"/>
                    <input id="material_submit" type="hidden" name="material_submit"/>
                    <input id="range_submit" type="hidden" name="range_submit"/>
                    <input id="opening_submit" type="hidden" name="opening_submit"/>
                    <input id="leave_submit" type="hidden" name="leave_submit"/>
                    <input id="installation_submit" type="hidden" name="installation_submit"/>
                    <input id="height_size_submit" type="hidden" name="height_size_submit"/>
                    <input id="width_size_submit" type="hidden" name="width_size_submit"/>
                    <input id="insulation_size_submit" type="hidden" name="insulation_size_submit"/>
                    <input id="aeration_submit" type="hidden" name="aeration_submit"/>
                    <input id="glazing_submit" type="hidden" name="glazing_submit"/>
                    <input id="color_submit" type="hidden" name="color_submit"/>

                    <button type="submit" class="w-full py-4 mb-4 xl:mb-0  shadow-md text-center bg-white text-lg fontbold cursor-pointer">Mise à jour</button>

                </form>
                <form method="POST" action="@if(Auth::user()->mode == 1){{ route('pro-clicandpay') }}@else{{ route('part-clicandpay') }}@endif">
                    @csrf

                    <input type="hidden" name="order_id" value="{{$order['id']}}"/>

                    <input id="joinery_submit_pay" type="hidden" name="joinery_submit_pay"/>
                    <input id="material_submit_pay" type="hidden" name="material_submit_pay"/>
                    <input id="range_submit_pay" type="hidden" name="range_submit_pay"/>
                    <input id="opening_submit_pay" type="hidden" name="opening_submit_pay"/>
                    <input id="leave_submit_pay" type="hidden" name="leave_submit_pay"/>
                    <input id="installation_submit_pay" type="hidden" name="installation_submit_pay"/>
                    <input id="height_size_submit_pay" type="hidden" name="height_size_submit_pay"/>
                    <input id="width_size_submit_pay" type="hidden" name="width_size_submit_pay"/>
                    <input id="insulation_size_submit_pay" type="hidden" name="insulation_size_submit_pay"/>
                    <input id="aeration_submit_pay" type="hidden" name="aeration_submit_pay"/>
                    <input id="glazing_submit_pay" type="hidden" name="glazing_submit_pay"/>
                    <input id="color_submit_pay" type="hidden" name="color_submit_pay"/>

                    <button type="submit" class="w-full py-4 mb-4 xl:mb-0 shadow-md text-center bg-darkgray text-white text-lg fontbold">Payer ma commande</button>

                </form>
            </div>
    
            <div id="joinery" class="w-full shadow-md mb-4 mx-auto maxwidth-820">
                <div class="flex bg-white mx-auto relative items-center select-item">
                    <p class="text-lg fontbold py-4 mx-auto">Type de menuiserie</p>
                </div>
                <div class="bg-white pt-4 px-4 md:px-14 pb-4 md:pb-14 toggle-part">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 col-gap-10 row-gap-10">
                        @if(isset($joinery) && count($joinery) > 0)
                            @foreach($joinery as $key => $item)
                                <div id="{{$item['id']}}" class="relative rounded-md mx-auto text-center type-select maxwidth-210 @if($item['id'] == $order["join_id"]) active @endif">
                                <img class="w-full rounded-md" src="{{ asset('images') }}/{{$item['image']}}">
                                    <div class="w-full absolute bottom-0 rounded-b-md">
                                        <p class="bg-white mx-auto text-lg py-4 text-center fontbold rounded-b-md">{{$item["name"]}}</p>
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
           
            <div id="material" class="w-full shadow-md mb-4 mx-auto maxwidth-820">
                <div class="flex bg-white mx-auto relative items-center select-item">
                    <p class="text-lg fontbold py-4 mx-auto">Matériau</p>
                </div>
                <div class="bg-white pt-4 px-4 md:px-14 pb-4 md:pb-14 toggle-part">
                    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 col-gap-10 row-gap-10">
                        @if(isset($material) && count($material) > 0)
                            @foreach($material as $key => $item)
                                <div id="{{$item['id']}}" class="relative rounded-md px-3 py-10 mx-auto type-select maxwidth-210 @if($item['id'] == $order["material_id"]) active @endif check-item" style="padding-top:42px; padding-bottom:42px;">
                                    <p class="text-lg fontbold text-center pb-2">{{$item["name"]}}</p>
                                    <p class="text-center leading-normal" style="font-size: 13px;">{{$item["description"]}}</p>
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
    
            <div id="range" class="w-full shadow-md mb-4 mx-auto maxwidth-820">
                <div class="w-full flex bg-white mx-auto relative items-center select-item maxwidth-820">
                    <p class="text-lg fontbold py-4 mx-auto">Gamme</p>
                </div>
                <div class="bg-white pt-4 px-4 md:px-14 pb-4 md:pb-14 toggle-part">
                    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 col-gap-10 row-gap-10">
                        @if(isset($range) && count($range) > 0)
                            @foreach($range as $key => $item)
                                <div id="{{$item['id']}}" class="relative rounded-md px-3 py-10 mx-auto type-select maxwidth-210 @if($item['id'] == $order["range_id"]) active @endif check-item" style="padding-top:42px; padding-bottom:42px;">
                                    <p class="text-lg fontbold text-center pb-2">{{$item["name"]}}</p>
                                    <p class="text-center leading-normal" style="font-size:13px;">{{$item["description"]}}</p>
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
    
            <div id="opening" class="w-full shadow-md mb-4 mx-auto maxwidth-820">
                <div class="w-full flex bg-white mx-auto relative items-center select-item maxwidth-820">
                    <p class="text-lg fontbold py-4 mx-auto">Type d’ouverture</p>
                </div>
                <div class="bg-white pt-4 px-4 md:px-14 pb-4 md:pb-14 toggle-part">
                    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 col-gap-10 row-gap-10">
                        @if(isset($opening) && count($opening) > 0)
                            @foreach($opening as $key => $item)
                                <div id="{{$item['id']}}" class="relative rounded-md px-3 py-10 mx-auto type-select maxwidth-210 @if($item['id'] == $order["opening_id"]) active @endif check-item" style="padding-top:42px; padding-bottom:42px;">
                                    <p class="text-lg fontbold text-center pb-2">{{$item["name"]}}</p>
                                    <p class="text-center leading-normal" style="font-size:13px;">{{$item["description"]}}</p>
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
    
            <div id="leave" class="w-full shadow-md mb-4 mx-auto maxwidth-820">
                <div class="w-full flex bg-white mx-auto relative items-center select-item maxwidth-820">
                    <p class="text-lg fontbold py-4 mx-auto">Nombre de vantaux</p>
                </div>
                <div class="bg-white pt-4 px-4 md:px-14 pb-4 md:pb-14 toggle-part">
                    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 col-gap-10 row-gap-10">
                        @if(isset($leave) && count($leave) > 0)
                            @foreach($leave as $key => $item)
                                <div id="{{$item['id']}}" class="relative border border-gray-200 rounded-md px-3 py-10 mx-auto type-select maxwidth-210 @if($item['id'] == $order["leave_id"]) active @endif check-item" style="padding-top:42px; padding-bottom:42px;">
                                    <p class="text-lg fontbold text-center pb-2">{{$item["name"]}}</p>
                                    <p class="text-center leading-normal" style="font-size:13px;">{{$item["description"]}}</p>
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
    
            <div id="installation" class="w-full shadow-md mb-4 mx-auto maxwidth-820">
                <div class="w-full flex bg-white mx-auto relative items-center select-item maxwidth-820">
                    <p class="text-lg fontbold py-4 mx-auto">Type de pose</p>
                </div>
                <div class="bg-white pt-4 px-4 md:px-14 pb-4 md:pb-14 toggle-part">
                    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 col-gap-10 row-gap-10">
                        @if(isset($installation) && count($installation) > 0)
                            @foreach($installation as $key => $item)
                                <div id="{{$item['id']}}" class="relative border border-gray-200 rounded-md px-3 py-10 mx-auto ax-width-120 type-select maxwidth-210 @if($item['id'] == $order["installation_id"]) active @endif check-item" style="padding-top:42px; padding-bottom:42px;">
                                    <p class="text-lg fontbold text-center pb-2">{{$item["name"]}}</p>
                                    <p class="text-center leading-normal" style="font-size:13px;">{{$item["description"]}}</p>
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
    
            <div id="dimension" class="w-full shadow-md mb-4 mx-auto maxwidth-820">
                <div class="w-full flex bg-white mx-auto relative items-center select-item maxwidth-820">
                    <p class="text-lg fontbold py-4 mx-auto">Dimensions</p>
                </div>
                <div class="bg-white pt-4 px-r md:px-14 pb-4 md:pb-14 toggle-part">
                    <div class="grid grid-cols-1 md:grid-cols-2 col-gap-10 row-gap-10 px-4 pb-4 mb-4">

                        <div class="h-12">
                            <p class="text-lg fontbold pb-3">Hauteur totale</p>
                            <button type="button" class="select-button focus:border-green p-4 text-base border border-heavygray rounded-md w-full relative text-left">
                                <span id="height_size">
                                    @if(isset($height) && count($height) > 0)
                                        @foreach($height as $key => $item)
                                            @if($item['id'] == $order["totalheight_id"])
                                                {{$item["value"]}}
                                            @endif
                                        @endforeach
                                    @endif
                                </span>
                                <span id="height_size_old" class="hidden">{{$order["totalheight_id"]}}</span>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-gray-700">
                                    <svg class="down-icon" xmlns="http://www.w3.org/2000/svg" width="17.771" height="10" viewBox="0 0 17.771 10">
                                        <path d="M16.518,26.539a.921.921,0,0,0,.685-.3l7.924-8.108a.912.912,0,0,0,.276-.654.926.926,0,0,0-.941-.941.99.99,0,0,0-.665.266l-7.28,7.444L9.238,16.8a.971.971,0,0,0-.665-.266.926.926,0,0,0-.941.941.954.954,0,0,0,.276.665l7.924,8.1A.937.937,0,0,0,16.518,26.539Z" transform="translate(-7.633 -16.539)" fill="#3b3b3a"/>
                                    </svg>
                                    <svg class="up-icon hidden" xmlns="http://www.w3.org/2000/svg" width="17.771" height="10" viewBox="0 0 17.771 10">
                                        <path d="M16.519,16.539a.921.921,0,0,1,.685.3l7.925,8.109a.912.912,0,0,1,.276.654.926.926,0,0,1-.941.941.991.991,0,0,1-.665-.266l-7.28-7.444-7.28,7.444a.971.971,0,0,1-.665.266.926.926,0,0,1-.941-.941.954.954,0,0,1,.276-.665l7.925-8.1A.937.937,0,0,1,16.519,16.539Z" transform="translate(-7.633 -16.539)" fill="#3b3b3a"/>
                                    </svg>
                                </div>
                            </button>
                            <div class="hidden rounded-md w-full mt-3 relative z-50 bg-white " style="border: 1px solid #dedede">
                                <p class="hidden bg-white hover:bg-gray-100 rounded-md cursor-default px-4 py-4">Isolation</p>
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
                            <button type="button" class="select-button focus:border-green p-4 text-base border border-heavygray rounded-md w-full relative text-left">
                                <span id="width_size">
                                    @if(isset($width) && count($width) > 0)
                                        @foreach($width as $key => $item)
                                            @if($item['id'] == $order["totalwidth_id"])
                                                {{$item["value"]}}
                                            @endif
                                        @endforeach
                                    @endif
                                </span>
                                <span id="width_size_old" class="hidden">{{$order["totalwidth_id"]}}</span>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-gray-700">
                                    <svg class="down-icon" xmlns="http://www.w3.org/2000/svg" width="17.771" height="10" viewBox="0 0 17.771 10">
                                        <path d="M16.518,26.539a.921.921,0,0,0,.685-.3l7.924-8.108a.912.912,0,0,0,.276-.654.926.926,0,0,0-.941-.941.99.99,0,0,0-.665.266l-7.28,7.444L9.238,16.8a.971.971,0,0,0-.665-.266.926.926,0,0,0-.941.941.954.954,0,0,0,.276.665l7.924,8.1A.937.937,0,0,0,16.518,26.539Z" transform="translate(-7.633 -16.539)" fill="#3b3b3a"/>
                                    </svg>
                                    <svg class="up-icon hidden" xmlns="http://www.w3.org/2000/svg" width="17.771" height="10" viewBox="0 0 17.771 10">
                                        <path d="M16.519,16.539a.921.921,0,0,1,.685.3l7.925,8.109a.912.912,0,0,1,.276.654.926.926,0,0,1-.941.941.991.991,0,0,1-.665-.266l-7.28-7.444-7.28,7.444a.971.971,0,0,1-.665.266.926.926,0,0,1-.941-.941.954.954,0,0,1,.276-.665l7.925-8.1A.937.937,0,0,1,16.519,16.539Z" transform="translate(-7.633 -16.539)" fill="#3b3b3a"/>
                                    </svg>
                                </div>
                            </button>
                            <div class="hidden rounded-md w-full mt-3 relative z-50 bg-white " style="border: 1px solid #dedede">
                                <p class="hidden bg-white hover:bg-gray-100 rounded-md cursor-default px-4 py-4">Isolation</p>
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
    
            <div id="insulation" class="w-full shadow-md mb-4 mx-auto maxwidth-820">
                <div class="w-full flex bg-white mx-auto relative items-center select-item maxwidth-820">
                    <p class="text-lg fontbold py-4 mx-auto">Pour isolation de</p>
                </div>
                <div class="bg-white pt-4 px-4 md:px-14 pb-4 md:pb-14 toggle-part">
                    <div class="grid grid-cols-1 md:grid-cols-2 col-gap-10 row-gap-10 pb-4 mb-4">

                        <div class="h-12">
                            <p class="text-lg fontbold pb-3">Pour isolation de</p>
                            <button type="button" class="select-button focus:border-green p-4 text-base border border-heavygray rounded-md w-full relative text-left">
                                <span id="insulation_size">
                                    @if(isset($insulation) && count($insulation) > 0)
                                        @foreach($insulation as $key => $item)
                                            @if($item['id'] == $order["insulation_id"])
                                                {{$item["value"]}}
                                            @endif
                                        @endforeach
                                    @endif
                                </span>
                                <span id="insulation_size_old" class="hidden">{{$order["insulation_id"]}}</span>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-gray-700">
                                    <svg class="down-icon" xmlns="http://www.w3.org/2000/svg" width="17.771" height="10" viewBox="0 0 17.771 10">
                                        <path d="M16.518,26.539a.921.921,0,0,0,.685-.3l7.924-8.108a.912.912,0,0,0,.276-.654.926.926,0,0,0-.941-.941.99.99,0,0,0-.665.266l-7.28,7.444L9.238,16.8a.971.971,0,0,0-.665-.266.926.926,0,0,0-.941.941.954.954,0,0,0,.276.665l7.924,8.1A.937.937,0,0,0,16.518,26.539Z" transform="translate(-7.633 -16.539)" fill="#3b3b3a"/>
                                    </svg>
                                    <svg class="up-icon hidden" xmlns="http://www.w3.org/2000/svg" width="17.771" height="10" viewBox="0 0 17.771 10">
                                        <path d="M16.519,16.539a.921.921,0,0,1,.685.3l7.925,8.109a.912.912,0,0,1,.276.654.926.926,0,0,1-.941.941.991.991,0,0,1-.665-.266l-7.28-7.444-7.28,7.444a.971.971,0,0,1-.665.266.926.926,0,0,1-.941-.941.954.954,0,0,1,.276-.665l7.925-8.1A.937.937,0,0,1,16.519,16.539Z" transform="translate(-7.633 -16.539)" fill="#3b3b3a"/>
                                    </svg>
                                </div>
                            </button>
                            <div class="hidden rounded-md w-full mt-3 relative z-50 bg-white " style="border: 1px solid #dedede">
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
    
            <div id="aeration" class="w-full shadow-md mb-4 mx-auto maxwidth-820">
                <div class="w-full flex bg-white mx-auto relative items-center select-item maxwidth-820">
                    <p class="text-lg fontbold py-4 mx-auto">Aération</p>
                </div>
                <div class="bg-white pt-4 px-4 md:px-14 pb-4 md:pb-14 toggle-part">
                    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 col-gap-10 row-gap-10">
                        @if(isset($aeration) && count($aeration) > 0)
                            @foreach($aeration as $key => $item)
                                <div id="{{$item['id']}}" class="relative border border-gray-200 rounded-md px-3 py-10 maxwidth-210 mx-auto type-select @if($item['id'] == $order["aeration_id"]) active @endif check-item" style="padding-top:42px; padding-bottom:42px;">
                                    <p class="text-lg fontbold text-center pb-2">{{$item["name"]}}</p>
                                    <p class="text-center leading-normal" style="font-size:13px;">{{$item["description"]}}</p>
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
    
            <div id="glazing" class="w-full shadow-md mb-4 mx-auto maxwidth-820">
                <div class="w-full flex bg-white mx-auto relative items-center select-item maxwidth-820">
                    <p class="text-lg fontbold py-4 mx-auto">Vitrage</p>
                </div>
                <div class="bg-white pt-4 px-4 md:px-8 pb-4 md:pb-14 toggle-part">
                    <div class="grid md:grid-cols-1 xl:grid-cols-2 col-gap-10 row-gap-10">
                        @if(isset($glazing) && count($glazing) > 0)
                            @foreach($glazing as $key => $item)
                                <div id="{{$item['id']}}" class="relative border border-gray-200 rounded-md px-3 py-10 mx-auto type-select maxwidth-335 @if($item['id'] == $order["glazing_id"]) active @endif check-item" style="width:335px; height:147px; padding-top:20px; padding-bottom:20px;">
                                    <p class="text-lg fontbold text-center pb-2">{{$item["name"]}}</p>
                                    <p class="text-center leading-normal" style="font-size:13px;">{{$item["description"]}}</p>
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
    
            <div id="color" class="w-full shadow-md mb-4 mx-auto maxwidth-820">
                <div class="w-full flex bg-white mx-auto relative items-center select-item maxwidth-820">
                    <p class="text-lg fontbold py-4 mx-auto">Couleur menuiserie</p>
                </div>
                <div class="bg-white pt-4 px-4 md:px-14 pb-4 md:pb-14 toggle-part">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 col-gap-10 row-gap-10">
                        @if(isset($color) && count($color) > 0)
                            @foreach($color as $key => $item)
                                <div id="{{$item['id']}}" class="relative border border-gray-200 rounded-md  text-center mx-auto type-select color-item @if($item['id'] == $order["color_id"]) active @endif" style="background-color: {{$item['value']}};">
                                    <div class="w-full absolute bottom-0">
                                        <p class="bg-white mx-auto  py-4 text-center fontbold rounded-b-sm">{{$item['name']}}</p>
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
        <div class="w-full lg:w-4/12 pl-0 pt-6 lg:pt-0">
            <div class="mx-auto maxwidth-418">
                <div class="pb-10 shadow-md bg-white">
                    <p class="text-2xl pt-8 pb-7 fontbold text-center">Votre configurateur</p>
                    
                    <div class="flex justify-between items-center px-3 md:px-8 h-15 bg-whitepink">
                        <p class="text-lg fontbold">Prix :</p>
                        <p id="price" class="text-4xl fontbold">0€</p>
                    </div>
                    <div class="px-3 md:px-8">
                        <div id="joinery_result_wrapper">
                            <div class="flex flex-wrap items-center">
                                <p class="text-base py-4">Type de menuiserie :</p>
                                <p id="joinery_result" class="fontbold py-2 pl-3">Fenêtre</p>
                            </div>
                        </div>
                        <div id="material_result_wrapper">
                            <hr class="bg-gray-400"/>
                            <div class="flex flex-wrap items-center">
                                <p class="text-base py-4">Matériau :</p>
                                <p id="material_result" class="fontbold py-2 pl-3">Aluminium</p>
                            </div>
                        </div>
                        <div id="range_result_wrapper">
                            <hr class="bg-gray-400"/>
                            <div class="flex flex-wrap items-center">
                                <p class="text-base py-4">Gamme :</p>
                                <p id="range_result" class="fontbold py-2 pl-3">Gamme 70</p>
                            </div>
                        </div>
                        <div id="opening_result_wrapper">
                            <hr class="bg-gray-400"/>
                            <div class="flex flex-wrap items-center">
                                <p class="text-base py-4">Type d’ouverture :</p>
                                <p id="opening_result" class="fontbold py-2 pl-3">Abattant</p>
                            </div>
                        </div>
                        <div id="leave_result_wrapper">
                            <hr class="bg-gray-400"/>
                            <div class="flex flex-wrap items-center">
                                <p class="text-base py-4">Nombre de vantaux :</p>
                                <p id="leave_result" class="fontbold py-2 pl-3">1 vantail</p>
                            </div>
                        </div>
                        <div id="installation_result_wrapper">
                            <hr class="bg-gray-400"/>
                            <div class="flex flex-wrap items-center">
                                <p class="text-base py-4">Type de pose :</p>
                                <p id="installation_result" class="fontbold py-2 pl-3">Applique</p>
                            </div>
                        </div>
                        <div id="height_size_result_wrapper">
                            <hr class="bg-gray-400"/>
                            <div class="flex flex-wrap items-center">
                                <p class="text-base py-4">Hauteur totale :</p>
                                <p id="height_size_result" class="fontbold py-2 pl-3">600</p>
                            </div>
                        </div>
                        <div id="width_size_result_wrapper">
                            <hr class="bg-gray-400"/>
                            <div class="flex flex-wrap items-center">
                                <p class="text-base py-4">Largeur totale :</p>
                                <p id="width_size_result" class="fontbold py-2 pl-3">600</p>
                            </div>
                        </div>
                        <div id="insulation_size_result_wrapper">
                            <hr class="bg-gray-400"/>
                            <div class="flex flex-wrap items-center">
                                <p class="text-base py-4">Pour isolation de :</p>
                                <p id="insulation_size_result" class="fontbold py-2 pl-3">120</p>
                            </div>
                        </div>
                        <div id="aeration_result_wrapper">
                            <hr class="bg-gray-400"/>
                            <div class="flex flex-wrap items-center">
                                <p class="text-base py-4">Aération :</p>
                                <p id="aeration_result" class="fontbold py-2 pl-3">15 M3/H</p>
                            </div>
                        </div>
                        <div id="glazing_result_wrapper">
                            <hr class="bg-gray-400"/>
                            <div class="flex flex-wrap items-center">
                                <p class="text-base py-4">Vitrage :</p>
                                <p id="glazing_result" class="fontbold py-2 pl-3">4/16/4 FE</p>
                            </div>
                        </div>
                        <div id="color_result_wrapper">
                            <hr class="bg-gray-400"/>
                            <div class="flex flex-wrap items-center">
                                <p class="text-base py-4">Couleur menuiserie :</p>
                                <p id="color_result" class="fontbold py-2 pl-3">RAL 9016</p>
                            </div>
                        </div>
                        
                    </div>
              
                </div>
            </div>
            
        </div>
    
    </div>

</main>

@endsection

@section('scripts')
<script src="{{asset('js/components/custom-select.js')}}"></script>
<script src="{{asset('js/pages/modify/order.js')}}"></script>
<script src="{{asset('js/components/modal.js')}}"></script>
@endsection

@section('footer')
@include('layouts.footer')
@endsection
