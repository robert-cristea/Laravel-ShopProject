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
            <span class="text-base text-dark fontbold leading-snug">Conditions générales de ventes Sotoya Constructions (CGV)</span>
        </div>
        <p class="text-4xl fontbold pb-8 md:pt-10 md:pb-15 text-center md:text-left leading-snug">Conditions générales de ventes<br/>Sotoya Constructions (CGV)</p>
    </div>
    
    <div class="bg-white pt-4 md:pt-8 pb-8 md:pb-20 px-8 md:px-35">

        <p class="text-lg fontbold" style="line-height: 1.59">Société par actions simplifiée unipersonnelle au capital de 10 000€ <br/>
            - 822 746 517 R.C.S. MARSEILLE<br/>
            - SIRET 822 746 517 00017 <br/>
            – APE 4399C <br/>
            - N° DE TVA INTRA CE : FR 67 822746517
        </p>
    
        <p class="text-2xl fontbold pt-8 pb-4 leading-snug">PREMILAIRES</p>
        <p class="text-lg leading-snug">@if(isset($premilaries)) {{$premilaries}} @endif</p>
    
        @if(isset($articles) && count($articles) > 0)
            @foreach($articles as $key => $item)
                <p class="text-2xl fontbold pt-8 pb-4 leading-snug">ARTICLE {{$key + 1}} : {{$item["title"]}}</p>
                <p class="text-lg tracking-normal" style="line-height: 1.59">{{$item["detail"]}}</p>
            @endforeach
        @endif
    
    </div>

</main>

@endsection

@section('scripts')
@endsection

@section('footer')
@include('layouts.footer')
@endsection
