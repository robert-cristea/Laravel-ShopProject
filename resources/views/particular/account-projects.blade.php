@extends('layouts.app')

@section('title')
<title>{{__('Sotoya')}}</title>
@endsection

@section('styles')
@endsection

@section('content')

<main id="main-content" class="bg-whitegreen px-8 pb-10 md:px-20 md:pb-20">

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
                <a href="{{ route('part-account') }}" class="text-base text-darkgray fontbold leading-snug">Mon compte particulier</a>
                <span>
                    <svg class="ml-4 mr-3" xmlns="http://www.w3.org/2000/svg" width="7.253" height="12.5" viewBox="0 0 7.253 12.5">
                        <path id="chevron_right" d="M17.174,19.633a.644.644,0,0,0,.449-.186L23.091,14.1a.644.644,0,0,0,.2-.463.611.611,0,0,0-.2-.463L17.623,7.826a.611.611,0,0,0-.449-.193.625.625,0,0,0-.635.635.676.676,0,0,0,.186.449l5.02,4.916-5.02,4.916a.662.662,0,0,0-.186.449A.625.625,0,0,0,17.174,19.633Z" transform="translate(-16.289 -7.383)" fill="#3b3b3a" stroke="#3b3b3a" stroke-width="0.5"/>
                    </svg>
                </span>
            </div>
            <span class="text-base text-dark fontbold leading-snug">Mes  projets enregistrés</span>
        </div>
    </div>
    
    <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-3 col-gap-4 row-gap-4 mx-auto w-full maxwidth-1280">
        @if(isset($projects) && count($projects) > 0)
            @foreach($projects as $key => $item)
                <div class="relative bg-white shadow-md">
                    <a href="{{ route('part-order-delete', $item['id'])}}" class="absolute right-6 top-6 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20.001 19.998">
                            <path id="xmark" d="M9.743,27.5a1.131,1.131,0,0,0,0,1.589,1.158,1.158,0,0,0,1.6,0l8.072-8.072,8.072,8.072a1.128,1.128,0,0,0,1.6-1.589L21.007,19.42l8.085-8.072a1.128,1.128,0,0,0-1.6-1.589l-8.072,8.072L11.345,9.759a1.123,1.123,0,0,0-1.6,0,1.142,1.142,0,0,0,0,1.589l8.072,8.072Z" transform="translate(-9.417 -9.423)" fill="#020000"/>
                        </svg>
                    </a>
                    <p class="text-2xl fontbold text-center pt-8 leading-normal">Enregistrement</p>
                    <p class="text-2xl fontbold text-center pb-6 leading-normal">
                        du 
                        <span class="capitalize">
                            <?php echo ucfirst(utf8_encode(strftime('%d %B %Y', strtotime($item->created_at))));?>
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

                        <a href="{{ route('part-order', $item['id'])}}">
                            <button class="w-full mt-5 text-lg text-white fontbold bg-darkgray h-input" style="padding-top:19px; padding-bottom:15px;">Modifier</button>
                        </a>

                        <form method="POST" action="{{ route('part-clicandpay') }}">
                            @csrf
                            <input type="hidden" name="order_id" value="{{$item['id']}}"/>
                            <button type="submit" class="w-full mt-4 text-lg text-white fontbold bg-green h-input" style="padding-top:19px; padding-bottom:15px;">Commander</button>
                        </form>
                    </div>
                </div>
            @endforeach
        
        @endif
    </div>

    @if(count($projects) == 0)
        <div class="flex items-center" style="height:628px;">
            <p class="mx-auto fontbold capitalize text-center text-2xl items-center">pas de projet</p>
        </div>
    @endif

</main>

@endsection

@section('scripts')
@endsection

@section('footer')
@include('layouts.footer')
@endsection
