@extends('layouts.app')

@section('title')
<title>{{__('Sotoya')}}</title>
@endsection

@section('styles')
<link rel="stylesheet" href="{{asset('css/components/checkbox.css')}}"/>
<link rel="stylesheet" href="{{asset('css/components/popup.css')}}"/>
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
                <a href="@if(Auth::user()->mode == 1){{ route('pro') }}@else{{ route('part') }}@endif" class="text-base text-darkgray fontbold leading-snug">Configurateur @if(Auth::user()->mode == 1)professionnel @else particulier @endif</a>
                <span>
                    <svg class="ml-4 mr-3" xmlns="http://www.w3.org/2000/svg" width="7.253" height="12.5" viewBox="0 0 7.253 12.5">
                        <path id="chevron_right" d="M17.174,19.633a.644.644,0,0,0,.449-.186L23.091,14.1a.644.644,0,0,0,.2-.463.611.611,0,0,0-.2-.463L17.623,7.826a.611.611,0,0,0-.449-.193.625.625,0,0,0-.635.635.676.676,0,0,0,.186.449l5.02,4.916-5.02,4.916a.662.662,0,0,0-.186.449A.625.625,0,0,0,17.174,19.633Z" transform="translate(-16.289 -7.383)" fill="#3b3b3a" stroke="#3b3b3a" stroke-width="0.5"/>
                    </svg>
                </span>
            </div>
            {{-- <div class="mb-4 md:mb-0 flex items-center">
                <a href="/" class="text-base text-darkgray fontbold">Récapitulatif</a>
                <span>
                    <svg class="ml-4 mr-3" xmlns="http://www.w3.org/2000/svg" width="7.253" height="12.5" viewBox="0 0 7.253 12.5">
                        <path id="chevron_right" d="M17.174,19.633a.644.644,0,0,0,.449-.186L23.091,14.1a.644.644,0,0,0,.2-.463.611.611,0,0,0-.2-.463L17.623,7.826a.611.611,0,0,0-.449-.193.625.625,0,0,0-.635.635.676.676,0,0,0,.186.449l5.02,4.916-5.02,4.916a.662.662,0,0,0-.186.449A.625.625,0,0,0,17.174,19.633Z" transform="translate(-16.289 -7.383)" fill="#3b3b3a" stroke="#3b3b3a" stroke-width="0.5"/>
                    </svg>
                </span>
            </div> --}}
            <span class="text-base text-dark fontbold">Paiement</span>
        </div>
    </div>

    <form method="post" action="@if(Auth::user()->mode == 1){{ route('pro-clicandpay-summary') }}@else{{ route('part-clicandpay-summary') }}@endif">
        @csrf

        <input type="hidden" name="project_id" value="@if(isset($project_id)){{$project_id}}@endif"/>
        <input type="hidden" name="order_id" value="@if(isset($order_id)){{$order_id}}@endif"/>
        <input type="hidden" name="joinery_id" value="@if(isset($joinery_id)){{$joinery_id}}@endif"/>
        <input type="hidden" name="material_id" value="@if(isset($material_id)){{$material_id}}@endif"/>
        <input type="hidden" name="range_id" value="@if(isset($range_id)){{$range_id}}@endif"/>
        <input type="hidden" name="aeration_id" value="@if(isset($aeration_id)){{$aeration_id}}@endif"/>
        <input type="hidden" name="opening_id" value="@if(isset($opening_id)){{$opening_id}}@endif"/>
        <input type="hidden" name="leave_id" value="@if(isset($leave_id)){{$leave_id}}@endif"/>
        <input type="hidden" name="glazing_id" value="@if(isset($glazing_id)){{$glazing_id}}@endif"/>
        <input type="hidden" name="installation_id" value="@if(isset($installation_id)){{$installation_id}}@endif"/>
        <input type="hidden" name="color_id" value="@if(isset($color_id)){{$color_id}}@endif"/>
        <input type="hidden" name="height_size_id" value="@if(isset($height_size_id)){{$height_size_id}}@endif"/>
        <input type="hidden" name="width_size_id" value="@if(isset($width_size_id)){{$width_size_id}}@endif"/>
        <input type="hidden" name="insulation_size_id" value="@if(isset($insulation_size_id)){{$insulation_size_id}}@endif"/>

        <div class="flex-none lg:flex px-8 md:px-35 maxwidth-1441 mx-auto">
    
            <div class="w-full p-8 mr-0 lg:mr-5 bg-white shadow-md maxwidth-660">

                <p class="text-2xl pb-4 fontbold text-center">Adresse de livraison</p>

                <div class="grid grid-cols-1 lg:grid-cols-2 col-gap-6 row-gap-5 pt-6">
                    <div>
                        <p class="text-lg fontbold pb-3">Prénom</p>
                        <input type="text" class="w-full h-input bg-input p-4" placeholder="Prénom" name="firstname_delivery" value="{{ Auth::user()->firstname }}"/>
                    </div>
                    <div>
                        <p class="text-lg fontbold pb-3">Nom</p>
                        <input type="text" class="w-full h-input bg-input p-4" placeholder="Nom" name="lastname_delivery" value="{{ Auth::user()->lastname }}"/>
                    </div>
                </div>

                <div class="pt-6">
                    <div>
                        <p class="text-lg fontbold pb-3">Adresse</p>
                        <input type="text" class="w-full h-input bg-input p-4" placeholder="Adresse" name="address_delivery" value="{{ Auth::user()->address }}"/>
                    </div>
                </div>

                <div class="pt-6 flex">
                    <div class="w-full" style="max-width:116px;">
                        <p class="text-lg fontbold pb-3">Code Postal</p>
                        <input type="text" class="w-full h-input bg-input p-4" placeholder="Code Postal" name="postcode_delivery" value="{{ Auth::user()->postcode }}"/>
                    </div>
                    <div class="w-full ml-6">
                        <p class="text-lg fontbold pb-3">Ville</p>
                        <input type="text" class="w-full h-input bg-input p-4" placeholder="Ville" name="city_delivery" value="{{ Auth::user()->city }}"/>
                    </div>
                </div>

                <p style="padding-top: 55px;" class="pb-10 text-2xl text-center fontbold">Adresse de facturation</p>
                
                <div class="w-full h-input border-2 border-lightgray px-4 flex items-center">
                    <div class="check-item mr-4 md:mr-9 active my-auto w-full">
                        <label class="text-base flex items-center select-none">
                            <div class="mr-2">
                                <svg class="checked" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 510 510" style="enable-background:new 0 0 510 510;" xml:space="preserve">
     	                        <g id="radio-button-on">
                                    <path style="fill:#18A75A" d="M255,127.5c-71.4,0-127.5,56.1-127.5,127.5c0,71.4,56.1,127.5,127.5,127.5c71.4,0,127.5-56.1,127.5-127.5 C382.5,183.6,326.4,127.5,255,127.5z M255,0C114.75,0,0,114.75,0,255s114.75,255,255,255s255-114.75,255-255S395.25,0,255,0z M255,459c-112.2,0-204-91.8-204-204S142.8,51,255,51s204,91.8,204,204S367.2,459,255,459z"/>
                                </g>
                                </svg>
                                <svg class="unchecked hidden" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"	width="24px" height="24px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                    <path style="fill:#a3a3a3;" d="M255.832,48.032c114.859,0.096,207.896,93.277,207.8,208.137s-93.277,207.896-208.137,207.8	C140.7,463.872,47.695,370.795,47.695,256C47.871,141.149,140.981,48.112,255.832,48.032 M255.832,0 C114.443,0.096-0.096,114.779,0,256.168S114.779,512.096,256.168,512C397.485,511.904,512,397.317,512,256	C511.952,114.571,397.261-0.048,255.832,0z"/>
                                </svg>
                            </div>
                            <input type="radio" class="absolute left-0 opacity-0" id="same" name="address_state" value="1" checked />
                            Identique à l’adresse de livraison
                        </label>
                    </div>
                </div>

                <div class="w-full h-input border-l-2 border-r-2 border-b-2 border-lightgray px-4 flex items-center">
                    <div class="check-item mr-4 md:mr-9">
                        <label class="text-base flex items-center select-none">
                            <div class="mr-2">
                                <svg class="checked" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 510 510" style="enable-background:new 0 0 510 510;" xml:space="preserve">
     	                        <g id="radio-button-on">
                                    <path style="fill:#18A75A" d="M255,127.5c-71.4,0-127.5,56.1-127.5,127.5c0,71.4,56.1,127.5,127.5,127.5c71.4,0,127.5-56.1,127.5-127.5 C382.5,183.6,326.4,127.5,255,127.5z M255,0C114.75,0,0,114.75,0,255s114.75,255,255,255s255-114.75,255-255S395.25,0,255,0z M255,459c-112.2,0-204-91.8-204-204S142.8,51,255,51s204,91.8,204,204S367.2,459,255,459z"/>
                                </g>
                                </svg>
                                <svg class="unchecked hidden" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"	width="24px" height="24px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                    <path style="fill:#a3a3a3;" d="M255.832,48.032c114.859,0.096,207.896,93.277,207.8,208.137s-93.277,207.896-208.137,207.8	C140.7,463.872,47.695,370.795,47.695,256C47.871,141.149,140.981,48.112,255.832,48.032 M255.832,0 C114.443,0.096-0.096,114.779,0,256.168S114.779,512.096,256.168,512C397.485,511.904,512,397.317,512,256	C511.952,114.571,397.261-0.048,255.832,0z"/>
                                </svg>
                            </div>
                            <input type="radio" class="absolute left-0 opacity-0" id="different" name="address_state" value="0"/>
                            Utiliser une adresse de facturation différente
                        </label>
                    </div>
                </div>

                <div id="panel_different" class="hidden">
                    <div class="grid grid-cols-1 lg:grid-cols-2 col-gap-6 row-gap-5 pt-6">
                        <div>
                            <p class="text-lg fontbold pb-3">Prénom</p>
                            <input id="firstname" type="text" class="pay-item w-full h-input bg-input p-4" placeholder="Prénom" name="firstname_billing"/>
                        </div>
                        <div>
                            <p class="text-lg fontbold pb-3">Nom</p>
                            <input id="lastname" type="text" class="pay-item w-full h-input bg-input p-4" placeholder="Nom" name="lastname_billing"/>
                        </div>
                    </div>
    
                    <div class="pt-6">
                        <div>
                            <p class="text-lg fontbold pb-3">Adresse</p>
                            <input id="address" type="text" class="pay-item w-full h-input bg-input p-4" placeholder="Adresse" name="address_billing"/>
                        </div>
                    </div>
    
                    <div class="pt-6 flex">
                        <div class="w-full" style="max-width: 116px;">
                            <p class="text-lg fontbold pb-3">Code Postal</p>
                            <input id="postcode" type="text" class="pay-item w-full h-input bg-input p-4" placeholder="Code Postal" name="postcode_billing"/>
                        </div>
                        <div class="w-full ml-6">
                            <p class="text-lg fontbold pb-3">Ville</p>
                            <input id="city" type="text" class="pay-item w-full h-input bg-input p-4" placeholder="Ville" name="city_billing"/>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full pt-8 px-8 ml-auto lg:ml-5 mt-8 lg:mt-0 bg-white shadow-md mx-auto maxwidth-460" style="padding-bottom:44px; height: max-content;">

                <p class="text-2xl fontbold text-black pb-4 text-center">Paiement</p>

                <div class="pt-6">
                    <p class="text-lg pb-3 fontbold">Numéro de carte</p>
                    <div class="input-group">
                        <input type="text" class="w-full h-input bg-input form-control pay-item" id="cardnumber" name="cardnumber"/>
                        <div class="form-control-after">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="18.382" viewBox="0 0 24 18.382">
                                <defs>
                                    <style>.a{fill:#3b3b3a;opacity:0.596;}</style>
                                </defs>
                                <path class="a" d="M2.266,12.693h24V11.677c0-2.251-1.148-3.388-3.432-3.388H5.7c-2.284,0-3.432,1.137-3.432,3.388Zm0,10.6q0,3.377,3.432,3.377H22.834q3.426,0,3.432-3.377v-8.12h-24Zm3.65-2.667V18.606a1.01,1.01,0,0,1,1.071-1.049H9.664a1.01,1.01,0,0,1,1.071,1.049v2.022a1,1,0,0,1-1.071,1.049H6.987A1,1,0,0,1,5.916,20.628Z" transform="translate(-2.266 -8.289)"/>
                            </svg>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 col-gap-6 row-gap-6">
                    <div class="pt-6">
                        <p class="text-lg fontbold pb-3">Date d’expiration</p>
                        <input type="text" class="w-full h-input bg-input px-4 pay-item" placeholder="(MM/AA)" id="expirationdate" name="expirationdate"/>
                    </div>
                    
                    <div class="pt-6">
                        <p class="text-lg fontbold pb-3">Code de sécurité</p>
                        <div class="input-group">
                            <input type="text" class="w-full h-input bg-input form-control pay-item" placeholder="CVV" id="securitycode" name="securitycode"/>
                            <div class="form-control-after cursor-pointer">
                                <div class="popup">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                                        <defs>
                                            <style>.a{fill:#3b3b3a;opacity:0.596;}</style>
                                        </defs>
                                        <path class="a" d="M14.094,24.094a10.074,10.074,0,0,0,10-10,10.089,10.089,0,0,0-10.01-10,10,10,0,0,0,.01,20Zm-.186-7.873a.726.726,0,0,1-.824-.8V15.28a2.372,2.372,0,0,1,1.284-2.069c.912-.618,1.333-.971,1.333-1.676,0-.775-.608-1.3-1.549-1.3a1.673,1.673,0,0,0-1.51.9c-.333.392-.431.7-1.02.7a.7.7,0,0,1-.706-.706,1.8,1.8,0,0,1,.088-.51c.265-.951,1.451-1.775,3.216-1.775s3.274.912,3.274,2.618c0,1.235-.716,1.824-1.716,2.5-.706.48-1.059.833-1.059,1.412V15.5A.737.737,0,0,1,13.907,16.221Zm.029,2.951a1.06,1.06,0,1,1,0-2.118,1.06,1.06,0,1,1,0,2.118Z" transform="translate(-4.094 -4.094)"/>
                                    </svg>
                                    <span id="pop" class="popuptext text-base ml-minus268 md:ml-minus149 leading-normal tracking-tight">Ce champ est obligatoire uniquement pour les moyens de paiement possédant un cryptogramme visuel. Le cryptogramme visuel de la carte correspond au code de 3 chiffres présent au verso de votre carte, à droite dans la zone de signature.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <button id="paybutton" type="button" class="w-full h-input items-center submit-button fontbold mt-8 text-lg text-white">Payer&nbsp;@if(isset($price)){{$price}}€@endif</button>

            </div>
        
        </div>
           
    </form>
    
</main>

@endsection

@section('scripts')
<script src="{{asset('js/components/popup.js')}}"></script>
<script src="{{asset('js/pages/payment/index.js')}}"></script>
@endsection

@section('footer')
@include('layouts.footer')
@endsection
