@extends('layouts.app')

@section('title')
<title>{{__('Sotoya')}}</title>
@endsection

@section('styles')
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
            <span class="text-base text-dark fontbold leading-snug">Qui sommes-nous ?</span>
        </div>
    </div>

    <div class="bg-whitegreen px-8 md:px-15 lg:px-0">
        <div class="lg:w-1004 xl:w-1232 flex-none lg:flex pt-6 mx-auto">
            <div class="lg:w-474 lg:pl-19 lg:pr-13 xl:w-600 xl:pl-2 xl:pr-4">
                <p class="pt-4 pb-8 lg:pb-4 xl:pb-8 text-4xl fontbold leading-snug">Qui sommes-nous ?</p>
                <p class="text-lg leading-relaxed lg:leading-tight xl:leading-relaxed pb-6 lg:pb-3 xl:pb-6 fontbold">
                    Depuis 2016, Sotoya met son expérience et son savoir-faire unique au service des professionnels du bâtiment, promoteurs, artisans poseurs, et architectes. Spécialisée dans la menuiserie aluminium et PVC nous vous accompagnons de la conception de votre projet jusqu’à la pose. Notre bureau d’études est à votre disposition pour le conseil, la réalisation de votre projet.
                </p>
                <p class="text-lg text-darkgray leading-relaxed lg:leading-tight xl:leading-relaxed pb-6 lg:pb-2 xl:pb-6">Nous réalisons des produits sur mesure avec un choix de matières et de couleurs variés, et le meilleur rapport qualité/prix.<br/>
                    Notre entreprise aubagnaise spécialisée dans la fabrication sur-mesure de portes, fenêtres, baies coulissantes, volets et grandes menuiseries, travaille en partenariat avec des installateurs reconnus.
                </p>
                <p class="text-lg text-darkgray leading-relaxed lg:leading-tight xl:leading-relaxed pb-8 lg:pb-4 xl:pb-8" style="letter-spacing: -0.01em">Sotoya assemble dans son atelier de fabrication situé à Aubagne, la gamme Aluminium SAPA du groupe. Cela est fait selon les règles de l’art, le respect des normes et la réglementation en vigueur.<br/>
                    Sotoya vous donne la possibilité de commander en ligne vos produits sur mesure d’origine française dans des délais de fabrication moindres.
                </p>
                <p class="text-lg text-darkgray leading-relaxed lg:leading-tight xl:leading-relaxed text-right fontbold">
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
                <img class="w-full maxwidth-608 mt-24 pb-10 mx-auto" src="{{ asset('images/images about@2x.png') }}"/>
            </div>

        </div>
    </div>

</main>

@endsection

@section('scripts')
@endsection

@section('footer')
@include('layouts.footer')
@endsection
