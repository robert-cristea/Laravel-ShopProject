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
    
    <form class="w-full mx-auto maxwidth-676" method="post" action="/mailsend">
        @csrf
        <p class="text-4xl fontbold pt-4 md:pt-10 pb-8 md:pb-15 leading-snug">Contactez-nous</p>
        <div class="px-4 md:px-8 py-8 bg-white shadow-md">
            <p class="text-lg fontbold pb-3 leading-snug">Sujet</p>
            <input id="subject" name="subject" type="text" class="w-full appearance-none text-base px-4 bg-input h-input" style="padding-top:19px; padding-bottom:18px;" placeholder="Sujet de votre demande" required/>
            <p class="text-lg fontbold pt-6 pb-3 leading-snug">E-mail</p>
            <input id="email" name="email" type="email" class="w-full appearance-none text-base px-4 bg-input h-input" style="padding-top:19px; padding-bottom:18px;" placeholder="Adresse e-mail" required/>
            <p class="text-lg fontbold pt-6 pb-3 leading-snug">Message</p>
            <textarea id="comment" name="message" class="w-full appearance-none text-base p-4 bg-input" style="height:156px;" placeholder="Comment peut-on vous aider ?" required></textarea>
    
            <p id="beforetext" class="text-base leading-snug py-8">*Champ obligatoire</p>

            <div class="w-full text-center md:text-left">
                <button type="submit" class="px-20 py-4 text-white text-lg fontbold bg-lightlightgray submit-button h-input" style="padding-top:19px; padding-bottom:15px;">Envoyer</button>
            </div>
        </div>
    </form>

</main>

@endsection

@section('scripts')
<script src="{{asset('js/pages/common/contact.js')}}"></script>
@endsection

@section('footer')
@include('layouts.footer')
@endsection
