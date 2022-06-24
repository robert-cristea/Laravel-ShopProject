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
            <span class="text-base text-dark fontbold leading-snug">Contact</span>
        </div>
    </div>
    
    <div class="w-full mx-auto maxwidth-676">
        <p class="text-4xl fontbold pt-4 md:pt-10 pb-8 md:pb-15">Contactez-nous</p>
        <div class="bg-white shadow-md py-52 text-center">

            <svg class="pt-2 mx-auto" xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 80 80">
                <defs>
                    <style>.a{fill:#18a75a;}</style>
                </defs>
                <path class="a" d="M44.094,84.094a40.3,40.3,0,0,0,40-40,40.356,40.356,0,0,0-40.039-40,40.262,40.262,0,0,0-39.961,40A40.271,40.271,0,0,0,44.094,84.094ZM38.682,64.211a4.4,4.4,0,0,1-3.49-1.921L23.9,48.329a4.261,4.261,0,0,1-.941-2.549,3.206,3.206,0,0,1,3.176-3.255,3.59,3.59,0,0,1,3.02,1.647L38.525,56.29,56.76,27.074a3.331,3.331,0,0,1,2.784-1.8,3.189,3.189,0,0,1,3.412,3.02,5.217,5.217,0,0,1-1.019,2.588L42.015,62.29A3.84,3.84,0,0,1,38.682,64.211Z" transform="translate(-4.094 -4.094)"/>
            </svg>

            <p class="text-2xl fontbold pt-8">Message envoyé !</p>

            <p class="text-lg text-darkgray pt-4 pb-2 px-1">Merci pour votre message, nous y répondrons dans les plus brefs délais.</p>
        </div>
    </div>

</main>

@endsection

@section('scripts')
@endsection

@section('footer')
@include('layouts.footer')
@endsection
