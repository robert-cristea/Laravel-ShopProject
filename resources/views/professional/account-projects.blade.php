@extends('layouts.app')

@section('title')
<title>{{__('Sotoya')}}</title>
@endsection

@section('styles')
<link rel="stylesheet" href="{{asset('css/components/modal/base.css')}}"/>
<link rel="stylesheet" href="{{asset('css/components/modal/projects.css')}}"/>
@endsection

@section('content')

<main id="main-content" class="bg-whitegreen w-full px-8 pb-10 md:px-20 md:pb-20">

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
                <a href="{{ route('pro-account') }}" class="text-base text-darkgray fontbold leading-snug">Mon compte professionnel</a>
                <span>
                    <svg class="ml-4 mr-3" xmlns="http://www.w3.org/2000/svg" width="7.253" height="12.5" viewBox="0 0 7.253 12.5">
                        <path id="chevron_right" d="M17.174,19.633a.644.644,0,0,0,.449-.186L23.091,14.1a.644.644,0,0,0,.2-.463.611.611,0,0,0-.2-.463L17.623,7.826a.611.611,0,0,0-.449-.193.625.625,0,0,0-.635.635.676.676,0,0,0,.186.449l5.02,4.916-5.02,4.916a.662.662,0,0,0-.186.449A.625.625,0,0,0,17.174,19.633Z" transform="translate(-16.289 -7.383)" fill="#3b3b3a" stroke="#3b3b3a" stroke-width="0.5"/>
                    </svg>
                </span>
            </div>
            <span class="text-base text-dark fontbold leading-snug">Mes  projets enregistrés</span>
        </div>
    </div>
    
    <div class="w-full pt-4 md:pt-10 pb-4 md:pb-15 px-4 md:px-14 mb-4 shadow-md bg-white mx-auto maxwidth-1280">
        <p class="text-4xl fontbold text-center pb-10 leading-snug">Mes projets enregistrés</p>
        <div class="grid grid-cols-1 lg:grid-cols-2 col-gap-10 row-gap-10">
            <div>
                <p class="text-lg fontbold pb-3 leading-snug">Sélectionner le projet</p>

                <div class="h-12">
                    <button type="button" class="select-button focus:border-green p-4 text-base border border-heavygray rounded-lg w-full relative text-left h-input">
                        <span id="select-project">
                            @if(isset($id))
                                @if(isset($projects) && count($projects) > 0)
                                    @foreach($projects as $key => $item)
                                        @if($item['id'] == $id) {{$item['name']}} @endif
                                    @endforeach
                                @endif
                            @else
                                Pas de Projet
                            @endif
                        </span>
                        <input id="select-project-submit" type="hidden" name="select_project_submit"/>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-gray-700">
                            <svg class="down-icon" xmlns="http://www.w3.org/2000/svg" width="17.771" height="10" viewBox="0 0 17.771 10">
                                <path d="M16.518,26.539a.921.921,0,0,0,.685-.3l7.924-8.108a.912.912,0,0,0,.276-.654.926.926,0,0,0-.941-.941.99.99,0,0,0-.665.266l-7.28,7.444L9.238,16.8a.971.971,0,0,0-.665-.266.926.926,0,0,0-.941.941.954.954,0,0,0,.276.665l7.924,8.1A.937.937,0,0,0,16.518,26.539Z" transform="translate(-7.633 -16.539)" fill="#3b3b3a"/>
                            </svg>
                            <svg class="up-icon hidden" xmlns="http://www.w3.org/2000/svg" width="17.771" height="10" viewBox="0 0 17.771 10">
                                <path d="M16.519,16.539a.921.921,0,0,1,.685.3l7.925,8.109a.912.912,0,0,1,.276.654.926.926,0,0,1-.941.941.991.991,0,0,1-.665-.266l-7.28-7.444-7.28,7.444a.971.971,0,0,1-.665.266.926.926,0,0,1-.941-.941.954.954,0,0,1,.276-.665l7.925-8.1A.937.937,0,0,1,16.519,16.539Z" transform="translate(-7.633 -16.539)" fill="#3b3b3a"/>
                            </svg>
                        </div>
                    </button>
                    <div class="hidden rounded-lg w-full mt-3 relative z-50 bg-white " style="@if(isset($projects) && count($projects) > 0) border: 1px solid #dedede @endif">
                        <p id="project-disabled" class="hidden bg-white hover:bg-gray-100 rounded-md cursor-default px-4 py-4">projet</p>
                        @if(isset($projects) && count($projects) > 0)
                            @foreach($projects as $key => $item)
                                <a href="{{ route('pro-projects-id', $item['id']) }}" class="w-full">
                                    <p id="{{$item['id']}}" class="project-item w-full bg-white hover:bg-gray-100 rounded-lg cursor-default px-4 py-4">{{$item["name"]}}</p>
                                </a>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
            <form method="post" action="{{ route('pro-project-add') }}" class="mb-6 md:h-input">
                @csrf
                <p class="text-lg fontbold pb-3 leading-snug">Créer un nouveau projet</p>
                <div class="flex-none md:flex relative text-center md:text-left items-center">
                    <input id="new_project_name" type="text" name="new_project_name" class="w-full appearance-none pl-4 py-4 mb-4 md:mb-0 text-base bg-input h-input" placeholder="Nom du projet"/>
                    <button type="button" class="px-16 py-5 text-lg fontbold text-white submit-button relative md:absolute right-0 h-input">Enregistrer</button>
                </div>
            </form>
        </div>
    
    </div>
    
    <div class="w-full pt-4 md:pt-9 pb-4 md:pb-15 px-4 md:px-15 mb-4 shadow-md bg-white mx-auto maxwidth-1280">
        @if(isset($projects))
            <div class="grid grid-cols-1 lg:grid-cols-2 col-gap-10 row-gap-0">
                <div class="border-b border-underline flex items-center py-6">
                    <p class="text-lg leading-none">Nom du projet :</p>
                    <p id="project_name_display" class="fontbold pl-4">
                        @if(isset($id))
                            @if(isset($projects) && count($projects) > 0)
                                @foreach($projects as $key => $item)
                                    @if($item['id'] == $id) {{$item['name']}} @endif
                                @endforeach
                            @endif
                        @endif
                    </p>
                </div>
                <div class="border-b border-underline flex items-center py-6">
                    <p class="text-lg leading-none">Nom du client :</p>
                    <p class="fontbold pl-4">@if(isset($id)){{Auth::user()->firstname}}&nbsp;{{Auth::user()->lastname}}@endif</p>
                </div>
            </div>
            <div>
                <div class="border-b border-underline flex items-center py-6">
                    <p class="text-lg leading-none">Adresse du client :</p>
                    <p class="fontbold pl-4">@if(isset($id)){{Auth::user()->address}}@endif</p>
                </div>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 col-gap-10 row-gap-0">
                <div class="border-b border-underline flex justify-between" style="padding-top:28px; padding-bottom:25px;">
                    <p class="text-lg leading-none">Total du projet :</p>
                    <p class="text-lg fontbold">@if(isset($total_ht))<?php echo number_format($total_ht, 0, '.', ',') ?> € HT @endif</p>
                </div>
                <div class="border-b border-underline flex justify-between" style="padding-top:28px; padding-bottom:25px;">
                    <p class="text-lg leading-none">Total avec TVA (20%) :</p>
                    <p class="text-lg fontbold">@if(isset($total_tva))<?php echo number_format($total_tva, 0, '.', ',') ?> € TTC @endif</p>
                </div>
            </div>
            
            <div class="mt-4 md:mt-10 w-full items-center grid grid-cols-1 lg:grid-cols-2 xxl:grid-cols-4 lg:col-gap-4 xxl:col-gap-0 lg:row-gap-4 col-gap-0 row-gap-4">
                <form class="xxl:pr-3" method="POST" action="{{ route('pro-clicandpay') }}">
                    @csrf
                    <input type="hidden" name="project_id" value="{{$id}}" />
                    <button type="submit" class="w-full text-lg fontbold text-white bg-green tracking-tighter h-input" style="padding-top:19px; padding-bottom:15px;">Tout commander</button>
                </form>
                <div class="xxl:pl-1 xxl:pr-2">
                    <a href="/pro/{{$id}}">
                        <button class="w-full text-lg fontbold text-white bg-darkgray tracking-tighter h-input" style="padding-top:19px; padding-bottom:15px;">Ajouter un nouveau produit</button>
                    </a>
                </div>
                <form class="xxl:pl-2 xxl:pr-1" action="/quote" method="post">
                    @csrf
                    <input type="hidden" name="project_id" value="@if(isset($id)){{$id}}@endif" />
                    <button @if(isset($id))type="submit"@else type="button"@endif class="w-full text-lg fontbold text-white bg-darkgray tracking-tighter h-input" style="padding-top:19px; padding-bottom:15px;">Télécharger un devis</button>
                </form>
                <div class="xxl:pl-3">
                    <button id="modal-trigger-button" class="w-full text-lg fontbold text-white bg-darkgray tracking-tighter h-input" style="padding-top:19px; padding-bottom:15px;">Supprimer le dossier</button>
                </div>
            </div>
        @else
            <div class="flex items-center" style="height:334px;">
                <p class="mx-auto  fontbold capitalize text-center text-2xl">Pas de Projet</p>
            </div>
        @endif
        
    </div>
    
    <div class="w-full grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 col-gap-4 row-gap-4 mx-auto maxwidth-1280">

        @if(isset($orders) && count($orders) > 0)
            @foreach($orders as $key => $item)
                <div class="relative bg-white shadow-md">
                    <a href="{{ route('pro-order-delete', $item['id'])}}" class="absolute right-6 top-6 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                            <path id="xmark" d="M9.743,27.5a1.131,1.131,0,0,0,0,1.589,1.158,1.158,0,0,0,1.6,0l8.072-8.072,8.072,8.072a1.128,1.128,0,0,0,1.6-1.589L21.007,19.42l8.085-8.072a1.128,1.128,0,0,0-1.6-1.589l-8.072,8.072L11.345,9.759a1.123,1.123,0,0,0-1.6,0,1.142,1.142,0,0,0,0,1.589l8.072,8.072Z" transform="translate(-9.417 -9.423)" fill="#020000"/>
                        </svg>
                    </a>
                    <p class="text-2xl fontbold text-center pt-8 leading-normal">Enregistrement</p>
                    <p class="text-2xl fontbold text-center pb-6 leading-normal">
                        du 
                        <span class="capitalize">
                            <?php echo ucfirst(utf8_encode(strftime('%d %B %Y', strtotime($item->created_at)))); ?>
                        </span>
                    </p>
                    <div class="flex justify-between items-center h-15 bg-whitepink">
                        <p class="text-lg fontbold absolute left-3 md:left-8">Prix :</p>
                        <p class="text-4xl fontbold absolute right-3 md:right-8">{{$item["price"]}}€</p>
                    </div>
                    <div class="px-3 pb-3 md:px-8 md:pb-8">
                        <p class="text-base py-4 leading-snug">Type de menuiserie :&nbsp;&nbsp;<span class="fontbold mr-4">{{App\Model\Base\Join::find($item["join_id"])["name"] }}</span></p>
                        <hr class="w-full bg-border">
                        <p class="text-base py-4 leading-snug">Matériau :&nbsp;&nbsp;<span class="fontbold mr-4">{{App\Model\Base\Material::find($item["material_id"])["name"]}}</span></p>
                        <hr class="w-full bg-border">
                        <p class="text-base py-4 leading-snug">Gamme :&nbsp;&nbsp;<span class="fontbold mr-4">{{App\Model\Base\Range::find($item["range_id"])["name"]}}</span></p>
                        <hr class="w-full bg-border">
                        <p class="text-base py-4 leading-snug">Type d’ouverture :&nbsp;&nbsp;<span class="fontbold mr-4">{{App\Model\Base\Opening::find($item["opening_id"])["name"]}}</span></p>
                        <hr class="w-full bg-border">
                        <p class="text-base py-4 leading-snug">Nombre de vantaux :&nbsp;&nbsp;<span class="fontbold mr-4">{{App\Model\Base\Leave::find($item["leave_id"])["name"]}}</span></p>

                        <a href="{{ route('pro-order', $item['id']) }}">
                            <button class="w-full mt-5 text-lg text-white fontbold bg-darkgray h-input" style="padding-top:19px; padding-bottom:15px;">Modifier</button>
                        </a>
            
                        <form method="POST" action="{{ route('pro-clicandpay')}} ">
                            @csrf
                            <input type="hidden" name="order_id" value="{{$item['id']}}"/>
                            <button class="w-full mt-4 text-lg text-white fontbold bg-green h-input" style="padding-top:19px; padding-bottom:15px;">Commander</button>
                        </form>
                        
                    </div>
                </div>
            @endforeach
        
        @endif
    
    </div>

    <div id="modal-wrapper" class="modal mx-auto z-50">
    
        <div class="modal-content relative p-8 md:p-10">
    
            <span class="absolute top-4 md:top-8 right-4 md:right-8 text-4xl close">
                <svg xmlns="http://www.w3.org/2000/svg" width="20.001" height="19.998" viewBox="0 0 20.001 19.998">
                    <path id="xmark" d="M9.743,27.5a1.131,1.131,0,0,0,0,1.589,1.158,1.158,0,0,0,1.6,0l8.072-8.072,8.072,8.072a1.128,1.128,0,0,0,1.6-1.589L21.007,19.42l8.085-8.072a1.128,1.128,0,0,0-1.6-1.589l-8.072,8.072L11.345,9.759a1.123,1.123,0,0,0-1.6,0,1.142,1.142,0,0,0,0,1.589l8.072,8.072Z" transform="translate(-9.417 -9.423)" fill="#020000"/>
                </svg>              
            </span>
    
            <p class="text-4xl text-black fontbold text-center leading-snug">Supprimer le projet</p>

            <p class="text-lg text-darkgray text-center pt-6">Vous ne pourrez pas le récupérer.</p>

            <div class="grid grid-cols-1 md:grid-cols-2 col-gap-4 pt-4 md:pt-10">
                <button class="close w-full bg-darkgray text-lg text-white text-center fontbold h-input" style="padding-top:19px; padding-bottom:15px">Annuler</button>
                <a @if(isset($id))href="{{ route('pro-project-delete', $id) }}"@endif class="w-full bg-green text-lg text-white text-center fontbold h-input mt-8 md:mt-0" style="padding-top:19px; padding-bottom:15px">Supprimer</a>
            </div>
    
        </div>
    
    </div>

</main>

@endsection

@section('scripts')
<script src="{{asset('js/components/custom-select.js')}}"></script>
<script src="{{asset('js/pages/pro/projects.js')}}"></script>
<script src="{{asset('js/components/modal.js')}}"></script>
@endsection


@section('footer')
@include('layouts.footer')
@endsection
