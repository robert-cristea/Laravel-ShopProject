@extends('layouts.app')

@section('title')
<title>{{__('Sotoya')}}</title>
@endsection

@section('styles')
<link rel="stylesheet" href="{{asset('css/components/checkbox.css')}}"/>
<link rel="stylesheet" href="{{asset('css/pages/register.css')}}"/>
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
            <span class="text-base text-dark fontbold leading-snug">S’inscrire</span>
        </div>
    </div>
    
    <form class="w-full bg-white pt-10 px-4 md:px-8 py-4 md:pb-8 mx-auto shadow-md maxwidth-976" method="post" action="{{ route('register') }}">
        @csrf
        <p class="text-4xl text-center pb-10 fontbold leading-tight">S’inscrire</p>
        <div class="grid grid-cols-1 lg:grid-cols-2 col-gap-0 row-gap-8">
            <div>
                <p class="text-lg fontbold leading-snug" style="padding-bottom:21px;">Civilité*</p>
                <div class="flex relative pb-8">
                    <div class="check-item mr-4 md:mr-9 @if(old('gender') !== null)@if(old('gender') == 1) active @endif @else active @endif">
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
                            <input type="radio" class="absolute left-0 opacity-0" id="male" name="gender" value="1" @if(old('gender') !== null)@if(old('gender') == 1) checked @endif @else checked @endif />
                            Monsieur
                        </label>
                    </div>
                    <div class="check-item mr-4 md:mr-9 @if(old('gender') !== null)@if(old('gender') == 0) active @endif @else @endif">
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
                            <input type="radio" class="absolute left-0 opacity-0" id="female" name="gender" value="0" @if(old('gender') !== null)@if(old('gender') == 0) checked @endif @else checked @endif />
                            Madame
                        </label>
                    </div>
                </div>
            </div>
            <div>
                <p class="text-lg fontbold leading-snug" style="padding-bottom:21px;">Je suis un.e*</p>
                <div class="flex relative pb-8">
                    <div class="check-item mr-4 md:mr-9 @if(old('mode') !== null)@if(old('mode') == 1) active @endif @else active @endif">
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
                            <input type="radio" class="absolute left-0 opacity-0" id="pro" name="mode" value="1" @if(old('mode') !== null)@if(old('mode') == 1) checked @endif @else checked @endif />
                            Professionnel
                        </label>
                    </div>
                    <div class="check-item mr-4 md:mr-9 @if(old('mode') !== null)@if(old('mode') == 0) active @endif @endif">
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
                            <input type="radio" class="absolute left-0 opacity-0" id="part" name="mode" value="0" @if(old('mode') !== null)@if(old('mode') == 0) checked @endif @else checked @endif />
                            Particulier
                        </label>
                    </div>
                </div>
            </div>

        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 col-gap-6 row-gap-8">
            <div>
                <p class="text-lg fontbold pb-3 leading-snug">Prénom*</p>
                <input id="firstname" name="firstname" type="text" class="w-full p-4 bg-input h-input" value="{{ old('firstname') }}" placeholder="Prénom" required/>
                @error('firstname')
                    <div class="py-3">
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    </div>
                @enderror
            </div>
            <div>
                <p class="text-lg pb-3 fontbold leading-snug">Nom*</p>
                <input id="lastname" name="lastname" type="text" class="w-full p-4 bg-input h-input" value="{{ old('lastname') }}" placeholder="Nom" required/>
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
                <input id="email" name="email" type="text" class="w-full p-4 bg-input h-input" value="{{ old('email') }}" placeholder="E-mail" required/>
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
                    <input id="password" name="password" type="password" class="form-control bg-input h-input" placeholder="Mot de passe" required/>
                    <div class="form-control-after cursor-pointer">
                        <svg id="eye_fill" xmlns="http://www.w3.org/2000/svg" width="25.515" height="16" viewBox="0 0 25.515 16">
                            <path d="M12.762,27.286c7.539,0,12.753-6.1,12.753-8s-5.224-8-12.753-8C5.28,11.286,0,17.376,0,19.286S5.318,27.286,12.762,27.286Zm0-2.758a5.274,5.274,0,0,1-5.271-5.242,5.266,5.266,0,0,1,10.532,0A5.266,5.266,0,0,1,12.762,24.529Zm0-3.351a1.9,1.9,0,1,0-1.92-1.892A1.914,1.914,0,0,0,12.762,21.178Z" transform="translate(0 -11.286)" fill="#3b3b3a" opacity="0.596"/>
                        </svg>
                        <svg class="hidden" id="eye_slash_fill" xmlns="http://www.w3.org/2000/svg" width="25.52" height="16.939" viewBox="0 0 25.52 16.939">
                            <path d="M20.028,27.346a.715.715,0,0,0,1.224-.5.724.724,0,0,0-.213-.51L5.52,10.824a.715.715,0,0,0-.51-.2.738.738,0,0,0-.714.7.685.685,0,0,0,.2.51Zm.872-2.625c2.913-1.883,4.62-4.332,4.62-5.418,0-1.883-5.148-7.885-12.755-7.885a14.059,14.059,0,0,0-4.406.714l2.421,2.412a5,5,0,0,1,1.985-.408A5.143,5.143,0,0,1,17.95,19.3a4.532,4.532,0,0,1-.436,1.976Zm-8.136,2.468a14.306,14.306,0,0,0,4.74-.807l-2.458-2.458a4.933,4.933,0,0,1-2.282.547A5.192,5.192,0,0,1,7.57,19.3a5.116,5.116,0,0,1,.547-2.319L4.889,13.737C1.828,15.62,0,18.19,0,19.3,0,21.177,5.241,27.188,12.765,27.188Zm2.95-8.08a2.938,2.938,0,0,0-2.95-2.941c-.121,0-.241.009-.352.019L15.7,19.47C15.705,19.359,15.715,19.229,15.715,19.108ZM9.805,19.09a2.967,2.967,0,0,0,2.969,2.95c.13,0,.25-.009.38-.019l-3.33-3.33C9.815,18.821,9.805,18.96,9.805,19.09Z" transform="translate(0 -10.62)" fill="#3b3b3a" opacity="0.596"/>
                        </svg>        
                    </div>
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
        <div id="pro-insert-panel" class="grid grid-cols-1 lg:grid-cols-2 col-gap-6 row-gap-8 pt-8 lg:pt-6">
            <div>
                <p class="text-lg fontbold pb-3 leading-snug">Si professionnel, nom de la société</p>
                <input type="text" id="company" name="company" class="w-full form-control p-4 bg-input h-input" value="{{ old('company') }}" placeholder="Nom de la société"/>
                @error('company')
                    <div class="py-3">
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    </div>
                @enderror
            </div>
            <div>
                <p class="text-lg fontbold pb-3 leading-snug">Type de profession</p>
                <div class="h-input">
                    <button id="select-profession-button" type="button" class="select-button focus:border-green p-4 text-base border border-heavygray w-full relative text-left h-input">
                        <span id="select-profession">
                            @if(old('profession') !== null)
                                {{App\Model\Profession::find(old('profession'))->name}}
                            @else
                                <span style="opacity: 0.4;">Type de profession</span>
                            @endif
                        </span>
                        
                        <input id="select-profession-submit" type="hidden" name="profession" value="{{old('profession')}}"/>

                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-gray-700">
                            <svg class="down-icon" xmlns="http://www.w3.org/2000/svg" width="17.771" height="10" viewBox="0 0 17.771 10">
                                <path d="M16.518,26.539a.921.921,0,0,0,.685-.3l7.924-8.108a.912.912,0,0,0,.276-.654.926.926,0,0,0-.941-.941.99.99,0,0,0-.665.266l-7.28,7.444L9.238,16.8a.971.971,0,0,0-.665-.266.926.926,0,0,0-.941.941.954.954,0,0,0,.276.665l7.924,8.1A.937.937,0,0,0,16.518,26.539Z" transform="translate(-7.633 -16.539)" fill="#3b3b3a"/>
                            </svg>
                            <svg class="up-icon hidden" xmlns="http://www.w3.org/2000/svg" width="17.771" height="10" viewBox="0 0 17.771 10">
                                <path d="M16.519,16.539a.921.921,0,0,1,.685.3l7.925,8.109a.912.912,0,0,1,.276.654.926.926,0,0,1-.941.941.991.991,0,0,1-.665-.266l-7.28-7.444-7.28,7.444a.971.971,0,0,1-.665.266.926.926,0,0,1-.941-.941.954.954,0,0,1,.276-.665l7.925-8.1A.937.937,0,0,1,16.519,16.539Z" transform="translate(-7.633 -16.539)" fill="#3b3b3a"/>
                            </svg>
                        </div>
                    </button>
                    <div class="hidden rounded-lg shadow-md border border-lightgray w-full mt-3 relative z-50 bg-white" style="@if(isset($projects) && count($projects) > 0) border: 1px solid #dedede @endif">
                        <?php 
                            $professions = App\Model\Profession::all();
                            if(isset($professions) && count($professions) > 0) {
                                foreach($professions as $key => $item){
                                    echo '<p id="'.$item['id'].'" class="profession-item bg-white hover:bg-whitegreen rounded-lg cursor-default px-4 py-4">'.$item["name"].'</p>';
                                }
                            }
                        ?>
                    </div>
                </div>
                @error('profession')
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
                <input id="address" name="address" type="text" class="w-full p-4 bg-input h-input" value="{{ old('address') }}" placeholder="Adresse" required/>
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
                        <input id="postcode" name="postcode" type="text" class="w-full p-4 mb-3 md:mb-0 bg-input h-input" value="{{ old('postcode') }}" placeholder="Code Postal" required/>
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
                        <input id="city" name="city" type="text pb-9" class="w-full p-4 bg-input h-input" value="{{ old('city') }}" placeholder="Ville" required/>
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
                <input type="text" name="telephone" class="w-full p-4 bg-input mb-9 h-input" value="{{ old('telephone') }}" placeholder="Téléphone"/>
                @error('telephone')
                    <div class="py-3">
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    </div>
                @enderror
            </div>
        </div>
    
        <p class="text-base text-darkgray pb-8 leading-snug">*Champ obligatoire</p>

        <label id="agreecheck-wrapper" class="flex items-center cursor-pointer">
            <span class="w-6 h-6 mr-4 border-2 rounded flex items-center" style="padding-left: 2px;">
                <svg class="mx-auto" xmlns="http://www.w3.org/2000/svg" width="15" height="14" viewBox="0 0 14.997 14">
                    <defs>
                        <style>.a{fill:#18a75a;}</style>
                    </defs>
                    <path class="a" d="M13.469,21.973a1.013,1.013,0,0,0,.879-.459l8.221-12.19a1.087,1.087,0,0,0,.226-.606.731.731,0,0,0-.8-.745.792.792,0,0,0-.748.418L13.434,20.113l-4.054-5a.851.851,0,0,0-.748-.4.774.774,0,0,0-.835.77.964.964,0,0,0,.252.6L12.564,21.5A1.111,1.111,0,0,0,13.469,21.973Z" transform="translate(-7.797 -7.973)"/>
                </svg>
            </span>
            <input id="agreecheck" type="checkbox" class="absolute left-0 opacity-0"/>
            <span class="select-none text-base leading-snug">
                J’accepte les&nbsp;<u>conditions générales de vente</u>&nbsp;de Sotoya
            </span>
        </label>
    
        <div class="w-full text-center md:text-left pt-8">
            <button id="submit" type="button" class="px-15 py-4 text-white submit-button fontbold">S’inscrire</button> 
        </div>
        
    </form>

</main>

@endsection

@section('scripts')
<script src="{{asset('js/components/password-switch.js')}}"></script>
<script src="{{asset('js/components/custom-select.js')}}"></script>
<script src="{{asset('js/pages/auth/register.js')}}"></script>
@endsection


@section('footer')
@include('layouts.footer')
@endsection
