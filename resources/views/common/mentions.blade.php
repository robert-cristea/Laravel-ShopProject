@extends('layouts.app')

@section('title')
<title>{{__('Sotoya')}}</title>
@endsection

@section('styles')
@endsection

@section('content')

<main id="main-content">

    <div class="px-8 md:px-35 bg-grey-1">
        <div class="flex-none md:flex items-center pt-35px pb-6">
            <div class="mb-4 md:mb-0 flex items-center">
                <a href="/" class="text-base text-darkgray fontbold leading-snug">Accueil</a>
                <span>
                    <svg class="ml-4 mr-3" xmlns="http://www.w3.org/2000/svg" width="7.253" height="12.5" viewBox="0 0 7.253 12.5">
                        <path id="chevron_right" d="M17.174,19.633a.644.644,0,0,0,.449-.186L23.091,14.1a.644.644,0,0,0,.2-.463.611.611,0,0,0-.2-.463L17.623,7.826a.611.611,0,0,0-.449-.193.625.625,0,0,0-.635.635.676.676,0,0,0,.186.449l5.02,4.916-5.02,4.916a.662.662,0,0,0-.186.449A.625.625,0,0,0,17.174,19.633Z" transform="translate(-16.289 -7.383)" fill="#3b3b3a" stroke="#3b3b3a" stroke-width="0.5"/>
                    </svg>
                </span>
            </div>
            <span class="text-base text-dark fontbold leading-snug">Mentions légales</span>
        </div>
    
        <p class="text-4xl fontbold pt-4 md:pt-10 pb-8 md:pb-15">Mentions légales</p>
    </div>
    
    <div class="bg-white px-8 md:px-35 pb-8 md:pb-30">
    
        <p class="text-2xl fontbold pt-8 pb-4 leading-snug">EDITEUR</p>
    
        <p class="text-lg leading-normal">Sotoya Constructions<br/>Société par actions simplifiée au capital de 100.000 €</p>
    
        <p class="text-2xl fontbold pt-8 pb-4 leading-snug">RETROUVEZ-NOUS</p>
    
        <p class="text-lg leading-normal">Adresse : 1120 Route de Gémenos Centre d’affaires Alta Rocca Bâtiment G, 13400 Aubagne<br/>
            Tél. : <span class="fontbold">04 88 60 20 10</span><br/>
            Port : <span class="fontbold">07 83 37 08 65</span><br/>
            Email : <span class="fontbold">contact@sotoya.fr</span>
        </p>
    
        <p class="text-2xl fontbold pt-8 pb-4 leading-snug">POUR NOUS RENDRE VISITE </p>
    
        <p class="text-lg leading-snug">Heures d’ouverture : Du lundi au vendredi : 9h00–18h00</p>
    
        <p class="text-lg leading-normal py-8">TVA intracommunautaire : FR 67 822 746 517<br/>
            Siret lieu d’immatriculation : 822 746 517 000 17<br/>
            R.C.S. : B 822 746 517<br/>
            Code NAF : 4 399C
        </p>
    
        <p class="text-lg leading-snug">Responsables de la publication : Claire Tormos – Juliette Berthelot</p>
    
        <p class="text-2xl fontbold pt-8 pb-4 leading-snug">CRÉDITS</p>
    
        <p class="text-lg leading-snug">Photos : sapabuildingsystem.fr</p>
    
        <p class="text-2xl fontbold pt-8 pb-4 leading-snug uppercase">Réalisation du site</p>
    
        <p class="text-lg leading-normal">
            Le site sotoya.fr a été réalisé par la société Inoui - Rdc droite, 29 Rue Robert Caumont immeuble U, 33300 Bordeaux<br/>Tél. : 09 72 54 66 80 - https://inouiagency.com/
        </p>
    
        <p class="text-2xl fontbold pt-8 pb-4 leading-snug uppercase">Hébergement du site</p>
    
        <p class="text-lg leading-normal"> L’hébergement du site sotoya.fr est assuré par la société Inoui – Rdc droite, 29 Rue Robert Caumont immeuble U, 33300 Bordeaux<br/>
            Tél. : 09 72 54 66 80 - https://inouiagency.com/
        </p>
    
    </div>

</main>

@endsection

@section('scripts')
@endsection

@section('footer')
@include('layouts.footer')
@endsection
