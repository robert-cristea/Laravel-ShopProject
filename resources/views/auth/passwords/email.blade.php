@extends('layouts.app')

@section('title')
<title>{{__('Sotoya')}}</title>
@endsection

@section('styles')
@endsection

@section('content')

<main id="main-content" class="bg-whitegreen px-8 pb-10 md:px-35 md:pb-30">

    <div>
        <div class="flex-none md:flex items-center pt-39 pb-26">
            <div class="mb-4 md:mb-0 flex items-center">
                <a href="/" class="text-base fontbold">Accueil</a>
                <span>
                    <svg class="ml-4 mr-3" xmlns="http://www.w3.org/2000/svg" width="7.253" height="12.5" viewBox="0 0 7.253 12.5">
                        <path id="chevron_right" d="M17.174,19.633a.644.644,0,0,0,.449-.186L23.091,14.1a.644.644,0,0,0,.2-.463.611.611,0,0,0-.2-.463L17.623,7.826a.611.611,0,0,0-.449-.193.625.625,0,0,0-.635.635.676.676,0,0,0,.186.449l5.02,4.916-5.02,4.916a.662.662,0,0,0-.186.449A.625.625,0,0,0,17.174,19.633Z" transform="translate(-16.289 -7.383)" fill="#3b3b3a" stroke="#3b3b3a" stroke-width="0.5"/>
                    </svg>
                </span>
            </div>
            <span class="text-base fontbold">réinitialiser le mot de passe</span>
        </div>
    </div>
    
    <form class="w-full bg-white px-4 md:px-8 py-6 md:py-10 mx-auto shadow-md maxwidth-508" method="post" action="{{ route('password.email') }}">
        @csrf
        <p class="text-4xl text-center pb-10 fontbold">Réinitialiser le mot de passe</p>
        <p class="text-xl pt-0 pb-3 fontbold">E-mail*</p>
        <input id="email" type="email" name="email" class="w-full p-4 focus:outline-none bg-input h-input" placeholder="E-mail" value="{{ old('email') }}" required autofocus/>
        @error('email')
            <div class="py-3">
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            </div>
        @enderror
        
        <div class="w-full text-center md:text-left mt-8">
            <button id="submit" type="submit" class="px-15 py-4 text-white submit-button fontbold">Se connecter</button> 
        </div>
    </form>
    
</main>

@endsection

@section('scripts')
<script src="{{asset('js/auth/email.js')}}"></script>
@endsection


@section('footer')
@include('layouts.footer')
@endsection
