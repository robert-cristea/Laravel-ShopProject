@extends('layouts.app')

@section('title')
<title>{{__('Sotoya')}}</title>
@endsection

@section('styles')
<link rel="stylesheet" href="{{asset('css/components/checkbox.css')}}"/>
<link rel="stylesheet" href="{{asset('css/pages/info.css')}}"/>
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
            <div class="mb-4 md:mb-0 flex items-center">
                <a href="{{ route('part-account') }}" class="text-base text-darkgray fontbold leading-snug">Mon compte particulier</a>
                <span>
                    <svg class="ml-4 mr-3" xmlns="http://www.w3.org/2000/svg" width="7.253" height="12.5" viewBox="0 0 7.253 12.5">
                        <path id="chevron_right" d="M17.174,19.633a.644.644,0,0,0,.449-.186L23.091,14.1a.644.644,0,0,0,.2-.463.611.611,0,0,0-.2-.463L17.623,7.826a.611.611,0,0,0-.449-.193.625.625,0,0,0-.635.635.676.676,0,0,0,.186.449l5.02,4.916-5.02,4.916a.662.662,0,0,0-.186.449A.625.625,0,0,0,17.174,19.633Z" transform="translate(-16.289 -7.383)" fill="#3b3b3a" stroke="#3b3b3a" stroke-width="0.5"/>
                    </svg>
                </span>
            </div>
            <span class="text-base text-dark fontbold leading-snug">Mes informations personnelles</span>
        </div>
    </div>
    
    <form class="w-full px-4 md:px-15 pt-4 pb-8 md:pt-10 md:pb-10 shadow-md bg-white mx-auto maxwidth-1032" method="post" action="{{ route('part-info-save') }}">
        @csrf

        <p class="text-4xl fontbold text-center pb-10 leading-normal md:leading-snug">Mes informations personnelles</p>

        <div class="grid grid-cols-1 lg:grid-cols-2 col-gap-6 row-gap-8">
            <div>
                <p class="text-lg fontbold leading-tight" style="padding-bottom:21px;">Civilité*</p>
                <div class="flex pb-8">
                    <div class="check-item mr-4 md:mr-8 @if(old('gender') !== null)@if(old('gender') == 1) active @endif @elseif(isset($user["gender"]) && $user["gender"] == 1) active @endif">
                        <label class="text-base flex items-center select-none">
                            <div class="mr-4">
                                <svg class="checked" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 510 510" style="enable-background:new 0 0 510 510;" xml:space="preserve">
     	                        <g id="radio-button-on">
                                    <path style="fill:#18A75A" d="M255,127.5c-71.4,0-127.5,56.1-127.5,127.5c0,71.4,56.1,127.5,127.5,127.5c71.4,0,127.5-56.1,127.5-127.5 C382.5,183.6,326.4,127.5,255,127.5z M255,0C114.75,0,0,114.75,0,255s114.75,255,255,255s255-114.75,255-255S395.25,0,255,0z M255,459c-112.2,0-204-91.8-204-204S142.8,51,255,51s204,91.8,204,204S367.2,459,255,459z"/>
                                </g>
                                </svg>
                                <svg class="unchecked hidden" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"	width="24px" height="24px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                    <path style="fill:#a3a3a3;" d="M255.832,48.032c114.859,0.096,207.896,93.277,207.8,208.137s-93.277,207.896-208.137,207.8	C140.7,463.872,47.695,370.795,47.695,256C47.871,141.149,140.981,48.112,255.832,48.032 M255.832,0 C114.443,0.096-0.096,114.779,0,256.168S114.779,512.096,256.168,512C397.485,511.904,512,397.317,512,256	C511.952,114.571,397.261-0.048,255.832,0z"/>
                                </svg>
                            </div>
                            <input type="radio" class="absolute left-0 opacity-0" id="male" name="gender" value="1" @if(old('gender') !== null)@if(old('gender') == 1) checked @endif @elseif(isset($user["gender"]) && $user["gender"] == 1) checked @endif />
                            Monsieur
                        </label>
                    </div>
                    <div class="check-item mr-4 md:mr-8 @if(old('gender') !== null)@if(old('gender') == 0) active @endif @elseif(isset($user["gender"]) && $user["gender"] == 0) active @endif">
                        <label class="text-base flex items-center select-none">
                            <div class="mr-4">
                                <svg class="checked" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 510 510" style="enable-background:new 0 0 510 510;" xml:space="preserve">
     	                        <g id="radio-button-on">
                                    <path style="fill:#18A75A" d="M255,127.5c-71.4,0-127.5,56.1-127.5,127.5c0,71.4,56.1,127.5,127.5,127.5c71.4,0,127.5-56.1,127.5-127.5 C382.5,183.6,326.4,127.5,255,127.5z M255,0C114.75,0,0,114.75,0,255s114.75,255,255,255s255-114.75,255-255S395.25,0,255,0z M255,459c-112.2,0-204-91.8-204-204S142.8,51,255,51s204,91.8,204,204S367.2,459,255,459z"/>
                                </g>
                                </svg>
                                <svg class="unchecked hidden" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"	width="24px" height="24px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                    <path style="fill:#a3a3a3;" d="M255.832,48.032c114.859,0.096,207.896,93.277,207.8,208.137s-93.277,207.896-208.137,207.8	C140.7,463.872,47.695,370.795,47.695,256C47.871,141.149,140.981,48.112,255.832,48.032 M255.832,0 C114.443,0.096-0.096,114.779,0,256.168S114.779,512.096,256.168,512C397.485,511.904,512,397.317,512,256	C511.952,114.571,397.261-0.048,255.832,0z"/>
                                </svg>
                            </div>
                            <input type="radio" class="absolute left-0 opacity-0" id="female" name="gender" value="0" @if(old('gender') !== null)@if(old('gender') == 0) checked @endif @elseif(isset($user["gender"]) && $user["gender"] == 0) checked @endif />
                            Madame
                        </label>
                    </div>
                </div>
            </div>
            <div>
                <p class="text-lg fontbold leading-tight" style="padding-bottom:21px;">Je suis un*</p>
                <div class="flex pb-8">
                    <div class="check-item item-mode mr-4 md:mr-8 @if(isset($user["mode"]) && $user["mode"] == 1) active @endif">
                        <label class="text-base flex items-center select-none">
                            <div class="mr-4">
                                <svg class="checked" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 510 510" style="enable-background:new 0 0 510 510;" xml:space="preserve">
     	                        <g id="radio-button-on">
                                    <path style="fill:#18A75A" d="M255,127.5c-71.4,0-127.5,56.1-127.5,127.5c0,71.4,56.1,127.5,127.5,127.5c71.4,0,127.5-56.1,127.5-127.5 C382.5,183.6,326.4,127.5,255,127.5z M255,0C114.75,0,0,114.75,0,255s114.75,255,255,255s255-114.75,255-255S395.25,0,255,0z M255,459c-112.2,0-204-91.8-204-204S142.8,51,255,51s204,91.8,204,204S367.2,459,255,459z"/>
                                </g>
                                </svg>
                                <svg class="unchecked hidden" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"	width="24px" height="24px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                    <path style="fill:#a3a3a3;" d="M255.832,48.032c114.859,0.096,207.896,93.277,207.8,208.137s-93.277,207.896-208.137,207.8	C140.7,463.872,47.695,370.795,47.695,256C47.871,141.149,140.981,48.112,255.832,48.032 M255.832,0 C114.443,0.096-0.096,114.779,0,256.168S114.779,512.096,256.168,512C397.485,511.904,512,397.317,512,256	C511.952,114.571,397.261-0.048,255.832,0z"/>
                                </svg>
                            </div>
                            Professionnel
                        </label>
                    </div>
                    <div class="check-item item-mode mr-4 md:mr-8 @if(isset($user["mode"]) && $user["mode"] == 0) active @endif">
                        <label class="text-base flex items-center select-none">
                            <div class="mr-4">
                                <svg class="checked" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="24px" height="24px" viewBox="0 0 510 510" style="enable-background:new 0 0 510 510;" xml:space="preserve">
     	                        <g id="radio-button-on">
                                    <path style="fill:#18A75A" d="M255,127.5c-71.4,0-127.5,56.1-127.5,127.5c0,71.4,56.1,127.5,127.5,127.5c71.4,0,127.5-56.1,127.5-127.5 C382.5,183.6,326.4,127.5,255,127.5z M255,0C114.75,0,0,114.75,0,255s114.75,255,255,255s255-114.75,255-255S395.25,0,255,0z M255,459c-112.2,0-204-91.8-204-204S142.8,51,255,51s204,91.8,204,204S367.2,459,255,459z"/>
                                </g>
                                </svg>
                                <svg class="unchecked hidden" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"	width="24px" height="24px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                    <path style="fill:#a3a3a3;" d="M255.832,48.032c114.859,0.096,207.896,93.277,207.8,208.137s-93.277,207.896-208.137,207.8	C140.7,463.872,47.695,370.795,47.695,256C47.871,141.149,140.981,48.112,255.832,48.032 M255.832,0 C114.443,0.096-0.096,114.779,0,256.168S114.779,512.096,256.168,512C397.485,511.904,512,397.317,512,256	C511.952,114.571,397.261-0.048,255.832,0z"/>
                                </svg>
                            </div>
                            Particulier
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 col-gap-6 row-gap-8">
            <div>
                <p class="text-lg fontbold pb-3 leading-snug">Prénom*</p>
                <input id="firstname" name="firstname" type="text" class="w-full p-4 bg-input h-input" placeholder="Prénom" value="@if(old('firstname') !== null){{ old('firstname') }}@elseif(isset($user["firstname"])){{$user["firstname"]}}@endif" required/>
                @error('firstname')
                    <div class="py-3">
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    </div>
                @enderror
            </div>
            <div>
                <p class="text-lg fontbold pb-3 leading-snug">Nom*</p>
                <input id="lastname" name="lastname" type="text" class="w-full p-4 bg-input h-input" placeholder="Nom" value="@if(old('lastname') !== null){{ old('lastname') }}@elseif(isset($user["lastname"])){{$user["lastname"]}}@endif" required/>
                @error('lastname')
                    <div class="py-3">
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    </div>
                @enderror
            </div>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 col-gap-6 row-gap-8 pt-8 lg:pt-6">
            <div>
                <p class="text-lg pb-3 fontbold leading-snug">E-mail*</p>
                <input id="email" name="email" type="text" class="w-full p-4 bg-input h-input" placeholder="E-mail" value="@if(old('email') !== null){{ old('email') }}@elseif(isset($user["email"])){{$user["email"]}}@endif" required required/>
                @error('email')
                    <div class="py-3">
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    </div>
                @enderror
            </div>
            <div>
                <p class="text-lg pb-3 fontbold leading-snug">Mot de passe*</p>
                <div class="input-group">
                    <input id="password" name="password" type="password" class="form-control bg-input h-input" value="" disabled/>
                </div>
                @error('password')
                    <div class="py-3">
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    </div>
                @enderror
            </div>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 col-gap-6 row-gap-8 pt-6">
            <div>
                <p class="text-lg pt-0 pb-3 fontbold leading-snug">Adresse*</p>
                <input id="address" name="address" type="text" class="w-full p-4 bg-input h-input" placeholder="Adresse" value="@if(old('address') !== null){{ old('address') }}@elseif(isset($user["address"])){{$user["address"]}}@endif" required/>
                @error('address')
                    <div class="py-3">
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    </div>
                @enderror
            </div>
            <div>
                <div class="w-full flex-none md:flex">
                    <div class="w-full md:w-5/12">
                        <p class="text-lg fontbold pb-3 leading-snug">Code Postal*</p>
                        <input id="postcode" name="postcode" type="text" class="w-full p-4 mb-3 md:mb-0 bg-input h-input" placeholder="Code Postal" value="@if(old('postcode') !== null){{ old('postcode') }}@elseif(isset($user["postcode"])){{$user["postcode"]}}@endif" required/>
                    </div>
                    @error('postcode')
                        <div class="py-3">
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        </div>
                    @enderror
                    <div class="w-full md:w-7/12 md:pl-6 mb-6 md:mb-0 pt-4 md:pt-0">
                        <p class="text-lg fontbold pb-3 leading-snug">Ville*</p>
                        <input id="city" name="city" type="text pb-9" class="w-full p-4 bg-input h-input" placeholder="Ville" value="@if(old('city') !== null){{ old('city') }}@elseif(isset($user["city"])){{$user["city"]}}@endif" required/>
                    </div>
                    @error('city')
                        <div class="py-3">
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        </div>
                    @enderror
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 col-gap-6 row-gap-8 pt-0 md:pt-6">
            <div>
                <p class="text-lg fontbold pb-3 leading-snug">Numéro de téléphone</p>
                <input type="text" name="telephone" class="w-full p-4 bg-input h-input" placeholder="Téléphone" value="@if(old('telephone') !== null){{ old('telephone') }}@elseif(isset($user["telephone"])){{$user["telephone"]}}@endif"/>
                @error('telephone')
                    <div class="py-3">
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    </div>
                @enderror
            </div>
        </div>

        <p class="text-base py-8">*Champ obligatoire</p>
    
        <div class="w-full text-center lg:text-left">
            <button id="submit" type="button" class="text-lg fontbold text-white px-16 submit-button h-input" style="padding-top:19px; padding-bottom:15px;">Enregister</button>
        </div>
    </form>

</main>

@endsection

@section('scripts')
<script src="{{asset('js/pages/info.js')}}"></script>
@endsection

@section('footer')
@include('layouts.footer')
@endsection
