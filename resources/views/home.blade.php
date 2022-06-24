@extends('layouts.app')

@section('title')
<title>{{__('Sotoya')}}</title>
@endsection

@section('styles')
<link rel="stylesheet" href="{{asset('css/components/modal/base.css')}}"/>
<link rel="stylesheet" href="{{asset('css/components/modal/home.css')}}"/>
@endsection

@section('content')

<main id="main-content" class="bg-white pb-10 md:pb-30 maxwidth-1441 mx-auto">

    <div class="bg-whitegreen">
        <div class="flex-none xl:flex relative justify-start lg:justify-between">
            
            <div class="absolute inset-y-0 xl:relative pl-8 pr-4 xl:pl-20 xxl:pl-35 pt-8 md:pt-12 lg:pt-16 xl:pt-105 transform translate-y-3/10 xl:transform-none">
                <p class="tracking-normal leading-none xl:leading-snug pb-8 sm:pb-12 md:pb-16 lg:pb-20 xl:pb-8 xl:mb-0 fontbold text-3xl sm:text-4xl md:text-44" style="color: #0C2417;">
                    Nous fournissons et
                    <br class="hidden xl:block"/>fabriquons des menuiseries
                    <br class="hidden xl:block"/>pour les professionnels
                    <br class="hidden xl:block"/>et les particuliers
                </p>
                @if(Auth::user())
                    <a @if(Auth::user()->mode == 1)href="/pro"@else href="/part"@endif class="text-white text-lg fontbold px-10 bg-green h-input inline-block" style="padding-top:19px; padding-bottom:15px;">Voir le configurateur</a>
                @else
                    <button id="modal-trigger-button" class="text-white text-lg fontbold px-10 bg-green h-input inline-block" style="padding-top:19px; padding-bottom:15px;">Voir le configurateur</button>
                @endif
            </div>
    
            <div class="flex-shrink-0 w-screen xl:w-max-content top-0 right-0">
                <img class="w-full xl:w-full mx-auto" src="{{ asset('images/baie coulissante 2@2x.png') }}"/>
            </div>
        </div>
    </div>
    
    <div class="w-full px-8 md:px-20 relative">
        <div class="w-full relative bg-white py-12 md:pt-15 md:pb-15 shadow-md mx-auto maxwidth-1280 top-4 md:top-minus92" style="z-index: 20;">
            <p class="text-4xl pb-6 text-center fontbold leading-snug">Le configurateur</p>
        
            <p class="w-8/10 text-lg px-6 text-left md:text-center leading-relaxed mb-15 mx-auto text-darkgray">
                Chez Sotoya Constructions, nous développons des partenariats avec de nombreuses 
                <br class="hidden md:block"/>entreprises leaders sur leur marché. Ces collaborations renforcent notre expertise dans le 
                <br class="hidden md:block"/>domaine de la menuiserie. Le configurateur vous guidera dans vos recherches.
            </p>
        
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 px-15 row-gap-8 md:row-gap-15 col-gap-4 md:col-gap-10">
                @if(isset($joinery) && count($joinery) > 0)
                    @foreach($joinery as $key => $item)
                        <div class="mx-auto">
                        <img class="w-full maxwidth-260" src="{{ asset('images') }}/{{$item['image']}}"/>
                            <p class="text-lg pt-4 pb-2 fontbold leading-tight">{{$item['name']}}</p>
                            @if(Auth::user())
                                <a @if(Auth::user()->mode == 0)href="/part/{{$item['id']}}"@else href="{{ route('pro-with-joinery', $item['id'])}}"@endif class="fontbold text-green border-b-2 border-green leading-tight pb-1">Configurateur</a>
                            @else
                                <a href="/part/{{$item['id']}}" class="fontbold text-green border-b-2 border-green leading-tight pb-1">Configurateur</a>
                            @endif
                        </div>
                    @endforeach
                @endif
            
            </div>
        </div>
        <div class="w-full absolute bottom-0 left-0 bg-whitegreen py-0 md:py-87" style="z-index: 10"></div>
    </div>
    
    <div class="bg-whitegreen px-8 md:px-15 lg:px-0 pb-10 md:pb-24">
        <div class="lg:w-1004 xl:w-1232 flex-none lg:flex pt-2 mx-auto">
            <div class="lg:w-474 lg:pl-19 lg:pr-13 xl:w-600 xl:pl-5 xl:pr-1">
                <p class="pt-16 md:pt-3 pb-8 lg:pb-4 xl:pb-6 text-4xl fontbold leading-snug">Qui sommes-nous ?</p>
                <p class="text-lg leading-relaxed lg:leading-tight xl:leading-relaxed pb-6 lg:pb-3 xl:pb-6 fontbold">
                    Depuis 2016, Sotoya met son expérience et son savoir-faire unique au service des professionnels du bâtiment, promoteurs, artisans poseurs, et architectes. Spécialisée dans la menuiserie aluminium et PVC nous vous accompagnons de la conception de votre projet jusqu’à la pose. Notre bureau d’études est à votre disposition pour le conseil, la réalisation de votre projet.
                </p>
                <p class="text-lg leading-relaxed lg:leading-tight xl:leading-relaxed pb-6 lg:pb-2 xl:pb-6 text-darkgray">Nous réalisons des produits sur mesure avec un choix de matières et de couleurs variés, et le meilleur rapport qualité/prix.<br/>
                    Notre entreprise aubagnaise spécialisée dans la fabrication sur-mesure de portes, fenêtres, baies coulissantes, volets et grandes menuiseries, travaille en partenariat avec des installateurs reconnus.
                </p>
                <p class="text-lg leading-relaxed lg:leading-tight xl:leading-relaxed pb-8 lg:pb-4 xl:pb-8 text-darkgray" style="letter-spacing: -0.01em">Sotoya assemble dans son atelier de fabrication situé à Aubagne, la gamme Aluminium SAPA du groupe. Cela est fait selon les règles de l’art, le respect des normes et la réglementation en vigueur.<br/>
                    Sotoya vous donne la possibilité de commander en ligne vos produits sur mesure d’origine française dans des délais de fabrication moindres.
                </p>
                <p class="text-lg leading-relaxed lg:leading-tight xl:leading-relaxed text-right fontbold text-darkgray">
                    Fondateur de Sotoya
                </p>
            </div>
            <div class="hidden lg:block relative lg:w-495 lg:py-15 lg:px-20px xl:w-608 xl:py-29 px-6 lg:h-690 xl:h-739">

                <img class="absolute left-0 top-0" src="{{asset('images/homeimage-01.png')}}"/>
                <img class="absolute right-0 bottom-0" src="{{asset('images/homeimage-02.png')}}"/>

                <div class="relative w-full h-full hidden xl:block">
                    <img class="absolute top-0 left-0" src="{{asset('images/homeimage-1.png')}}"/>
                    <img class="absolute top-0 right-0" src="{{asset('images/homeimage-2.png')}}"/>
                    <img class="absolute bottom-0 left-0" src="{{asset('images/homeimage-3.png')}}"/>
                    <img class="absolute bottom-0 right-0" src="{{asset('images/homeimage-4.png')}}"/>
                </div>

                <div class="xl:hidden w-full h-full grid grid-cols-2 lg:col-gap-10 xl:col-gap-0">
                    <div class="relative">
                        <img class="w-full absolute top-0" src="{{asset('images/homeimage-1.png')}}"/>
                        <img class="w-full absolute bottom-0" src="{{asset('images/homeimage-2.png')}}"/>
                    </div>
                    <div class="relative">
                        <img class="w-full absolute top-0" src="{{asset('images/homeimage-3.png')}}"/>
                        <img class="w-full absolute bottom-0" src="{{asset('images/homeimage-4.png')}}"/>
                    </div>
                </div>

            </div>

            <div class="block lg:hidden bg-whitegreen">
                <img class="w-full maxwidth-608 mt-24 pb-16 mx-auto" src="{{ asset('images/images about@2x.png') }}"/>
            </div>

        </div>
    </div>
    
    <div class="bg-white" class="py-30">
        <p class="text-4xl text-center pt-15 md:pt-30 pb-6 fontbold leading-snug">Nos partenaires</p>
        <p class="w-full text-lg tracking-tight text-center leading-normal mx-auto maxwidth-824 text-darkgray px-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id sapien pretium, auctor nulla nec, ornare eros. Vivamus quis dictum augue, vel lacinia eros. Mauris ultrices, mi eget.</p>
        <img class="mx-auto mt-8 md:mt-15" src="{{ asset('images/partenaire 2 sapa@2x.png') }}"/>
    </div>
    
    <div id="modal-wrapper" class="modal mx-auto z-50">
    
        <div class="modal-content relative px-8 py-8 md:px-15 md:pt-15 md:pb-10">
    
            <span class="absolute top-4 md:top-8 right-4 md:right-8 text-4xl close">
                <svg xmlns="http://www.w3.org/2000/svg" width="20.001" height="19.998" viewBox="0 0 20.001 19.998">
                    <path id="xmark" d="M9.743,27.5a1.131,1.131,0,0,0,0,1.589,1.158,1.158,0,0,0,1.6,0l8.072-8.072,8.072,8.072a1.128,1.128,0,0,0,1.6-1.589L21.007,19.42l8.085-8.072a1.128,1.128,0,0,0-1.6-1.589l-8.072,8.072L11.345,9.759a1.123,1.123,0,0,0-1.6,0,1.142,1.142,0,0,0,0,1.589l8.072,8.072Z" transform="translate(-9.417 -9.423)" fill="#020000"/>
                </svg>              
            </span>
    
            <form class="w-full" method="post" action="{{ route('login') }}">
                @csrf
                <p class="text-4xl text-center text-black pb-10 fontbold">Se connecter</p>
                <p class="text-lg fontbold pb-3">E-mail*</p>
                <input id="email" type="email" name="email" class="w-full px-4 focus:outline-none bg-input text-base h-input" style="padding-top:19px; padding-bottom:18px;" placeholder="E-mail" required/>
                @error('email')
                    <div class="py-3">
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    </div>
                @enderror
                <p class="text-lg fontbold pt-6 pb-3">Mot de passe*</p>
                <div class="input-group m-0 p-0">
                    <input id="password" type="password" name="password" class="form-control bg-input h-input px-4" style="padding-top:19px; padding-bottom:18px;" placeholder="Mot de passe" required/>
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
                @if (Route::has('password.request'))
                    <div class="py-8">
                        <a href="{{ route('password.request') }}" class="text-base text-green cursor-pointer" href="{{ route('password.request') }}">
                            Mot de passe oublié ?
                        </a>
                    </div>
                @endif
                <div class="w-full text-center md:text-left">
                    <button id="submitbutton" type="button" class="px-15 py-4 text-white submit-button fontbold h-input">Se connecter</button> 
                </div>
            </form>

            <div class="text-left pt-10 leading-loose">
                <span class="text-lg pr-3">Pas encore de compte ?</span>
                <a href="{{ route('register') }}"><span class="text-lg fontbold cursor-pointer fontbold text-green border-b-2 border-green">S’inscrire</span></a>
            </div>
    
        </div>
    
    </div>

</main>

@endsection

@section('scripts')
<script src="{{asset('js/components/password-switch.js')}}"></script>
<script src="{{asset('js/pages/auth/login.js')}}"></script>
<script src="{{asset('js/components/modal.js')}}"></script>
@endsection


@section('footer')
@include('layouts.footer')
@endsection
