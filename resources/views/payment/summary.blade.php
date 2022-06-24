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
            <span class="text-base text-dark fontbold leading-snug">Commande reçu</span>
        </div>
    </div>
    
    <div class="flex-none lg:flex maxwidth-1441 mx-auto px-8 md:px-35">
        <div class="w-full xl:w-9/12 pr-0 lg:pr-5">
    
            <div>
                <div class="grid grid-cols-1 lg:grid-cols-3 mb-4 mx-auto maxwidth-820">
                    <a href="/" class="py-4 mb-4 lg:mb-0 lg:mr-3 shadow-md text-center bg-white text-lg fontbold">Continuer mes achats</a>
                    <a @if(Auth::user()->mode == 1)href="{{ route('pro-history') }}"@else href="{{ route('part-history') }}"@endif class="py-4 mb-4 lg:mb-0 lg:mr-1 lg:ml-1 shadow-md text-center bg-darkgray text-white text-lg fontbold cursor-pointer">
                        <button class="w-full h-full">Voir ma commande</button>
                    </a>
                </div>
        
                <div class="w-full bg-white mx-auto shadow-md relative items-center mt-4 px-8 py-20 maxwidth-820 text-center">

                    <svg class="mx-auto" xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 80 80">
                        <defs>
                            <style>.a{fill:#18a75a;}</style>
                        </defs>
                        <path class="a" d="M44.094,84.094a40.3,40.3,0,0,0,40-40,40.356,40.356,0,0,0-40.039-40,40.262,40.262,0,0,0-39.961,40A40.271,40.271,0,0,0,44.094,84.094ZM38.682,64.211a4.4,4.4,0,0,1-3.49-1.921L23.9,48.329a4.261,4.261,0,0,1-.941-2.549,3.206,3.206,0,0,1,3.176-3.255,3.59,3.59,0,0,1,3.02,1.647L38.525,56.29,56.76,27.074a3.331,3.331,0,0,1,2.784-1.8,3.189,3.189,0,0,1,3.412,3.02,5.217,5.217,0,0,1-1.019,2.588L42.015,62.29A3.84,3.84,0,0,1,38.682,64.211Z" transform="translate(-4.094 -4.094)"/>
                    </svg>

                    <p class="pt-8 pb-6 text-4xl fontbold text-center">Votre commande a bien été reçu !</p>

                    <p class="text-lg text-darkgray leading-relaxed tracking-tight">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    </p>
        
                </div>
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
