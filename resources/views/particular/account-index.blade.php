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
            <span class="text-base text-dark fontbold leading-snug">Mon compte particulier</span>
        </div>
    </div>
    
    <div class="w-full shadow-md bg-white pt-4 md:pt-10 px-4 md:px-15 pb-4 md:pb-15 mx-auto maxwidth-816">
        <p class="text-4xl fontbold text-center pb-10 leading-snug">Mon compte particulier</p>
        <a href="{{ route('part-projects') }}" class="flex items-center border-t border-underline pt-6" style="padding-bottom:22px;">
            <svg class="flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                <path id="floppy_disk" d="M2.88,0V4.32A1.08,1.08,0,0,0,3.96,5.4H12.6a1.08,1.08,0,0,0,1.08-1.08V0H13.8a1.44,1.44,0,0,1,1.018.422l2.756,2.756A1.44,1.44,0,0,1,18,4.2V16.56A1.44,1.44,0,0,1,16.56,18H1.44A1.44,1.44,0,0,1,0,16.56V1.44A1.44,1.44,0,0,1,1.44,0ZM3.96,9.36a1.08,1.08,0,0,0-1.08,1.08v4.32a1.08,1.08,0,0,0,1.08,1.08H12.6a1.08,1.08,0,0,0,1.08-1.08V10.44A1.08,1.08,0,0,0,12.6,9.36ZM10.8,0h.72a.36.36,0,0,1,.36.36V3.24a.36.36,0,0,1-.36.36H10.8a.36.36,0,0,1-.36-.36V.36A.36.36,0,0,1,10.8,0Z" fill="#3b3b3a" fill-rule="evenodd"/>
            </svg>
            <p class="text-lg fontbold pl-4 leading-snug">Mes projets enregistrés</p>
        </a>
        <a href="{{ route('part-history') }}" class="flex items-center border-t border-underline pt-6" style="padding-bottom:22px;">
            <svg class="flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                <path id="house_alt_fill" d="M.869,8.651A.76.76,0,0,1,.42,7.278L9.508.613A.76.76,0,0,1,10.4.606l4.874,3.459V3.33a.76.76,0,0,1,.76-.76h.76a.76.76,0,0,1,.76.76V5.684l2.236,1.587a.76.76,0,0,1-.44,1.38h-1.8v8.362a1.52,1.52,0,0,1-1.52,1.52H3.869a1.52,1.52,0,0,1-1.52-1.52V8.651Zm11.362,1.52v6.082h3.041V10.172Z" transform="translate(-0.109 -0.466)" fill="#3b3b3a" fill-rule="evenodd"/>
            </svg>  
            <p class="text-lg fontbold pl-4 leading-snug">Mon historique de commande</p>
        </a>
        <a href="{{ route('part-info') }}" class="flex items-center border-t border-underline pt-6" style="padding-bottom:22px;">
            <svg class="flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                <path id="person_circle_fill" d="M13.094,22.094a9.073,9.073,0,0,0,9-9,9,9,0,0,0-18,0A9.067,9.067,0,0,0,13.094,22.094Zm0-9.494a2.276,2.276,0,0,1-2.2-2.4,2.278,2.278,0,0,1,2.2-2.347A2.277,2.277,0,0,1,15.282,10.2,2.259,2.259,0,0,1,13.094,12.6ZM9.185,17.514a.484.484,0,0,1-.512-.538,4.3,4.3,0,0,1,4.421-3.371,4.293,4.293,0,0,1,4.412,3.371.482.482,0,0,1-.5.538Z" transform="translate(-4.094 -4.094)" fill="#3b3b3a"/>
              </svg>
            <p class="text-lg fontbold pl-4 leading-snug">Mes informations personnelles</p>
        </a>
        <form class="w-full" method="post" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="w-full flex items-center border-t border-underline pt-6" style="padding-bottom:22px;">
                <svg class="flex-shrink-0" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
                    <path id="square_arrow_left_fill" d="M13.825,8.059a.706.706,0,0,0,.682.709h2.774l1.329-.062-.638.6-1.427,1.347a.652.652,0,0,0-.213.487.61.61,0,0,0,.62.638.632.632,0,0,0,.47-.213l2.889-3a.678.678,0,0,0,.239-.514.691.691,0,0,0-.239-.514l-2.889-3a.627.627,0,0,0-1.09.443.647.647,0,0,0,.213.478L17.972,6.81l.629.6-1.32-.053H14.507A.7.7,0,0,0,13.825,8.059ZM.551,13.145A2.447,2.447,0,0,0,3.3,15.928h8.471a2.447,2.447,0,0,0,2.747-2.782V8.963H8.18a.9.9,0,0,1,0-1.808h6.336V2.982A2.444,2.444,0,0,0,11.769.2H3.3A2.444,2.444,0,0,0,.551,2.982Z" transform="translate(-0.551 -0.199)" fill="#3b3b3a"/>
                </svg>
                <p class="text-lg fontbold pl-4 leading-snug">Se déconnecter</p>
            </button>
        </form>
    
    </div>

</main>

@endsection

@section('scripts')
@endsection

@section('footer')
@include('layouts.footer')
@endsection
