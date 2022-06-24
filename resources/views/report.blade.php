<!DOCTYPE html>
<html>
<head>
	<title>Hi</title>
	<meta charset="utf-8"/>
	<style>
		@font-face {
            font-family: 'ManRegular';
            src: url("/fonts/manrope/manrope-regular.ttf") format('truetype');
            /* src: "../fonts/manrope/manrope-regular.ttf" format('truetype'); */
            /* src: url({{ public_path('fonts/manrope/manrope-regular.ttf') }}) format('truetype'); */
			font-weight: bold;
    		font-style: normal;
        }
        @font-face {
            font-family: 'ManBold';
            src: url("/manrope/manrope-bold.ttf") format('truetype');
		}
		.font-manbold {
			font-family: ManBold;
		}
		.font-manregular {
			font-family: ManRegualr;
		}
        body {
            font-family: 'ManRegular';
            color:black;
        }
		body {
			padding-top:38px;
			padding-bottom:38px;
			padding-left:0px;
			padding-right:0px;
			font-size: 12px;
			margin-left: -23px;
			margin-right:-23px;
		}
		table {
		}
		th, td {
			padding:5px;
		}
		
		.fontbold {
            font-family: 'ManBold';
		}
		.pl-8 {
			padding-left: 2rem;
		}
		.pt-10 {
			padding-top: 2.5rem;
		}
		.pt-3 {
			padding-top: 0.75rem;
		}
		.p-8 {
			padding: 2rem;
		}
		.pt-2 {
			padding-top: 0.5rem;
		}
		.pt-8 {
			padding-top: 2rem;
		}
		.pl-8 {
			padding-left: 2rem;
		}
		.inline-block {
			display: inline-block;
		}
		.flex {
			display:flex;
		}
		.items-start {
			align-items: flex-start;
		}
		.justify-between {
			justify-content: space-between;
		}
		.w-7\/12 {
			width: 58.333333%;
		}
		.w-1\/12 {
			width: 8.333333%;
		}
		.w-5\/12 {
			width: 41.666667%;
		}
		.w-2\/12 {
			width: 16.666667%;
		}
		.w-full {
			width:100%;
		}
		.inline-block {
			display: inline-block;
		}
		.absolute {
			position: absolute;
		}
		.border-b {
			border-bottom-width: 1px;
		}
		.mt-8 {
			margin-top: 2rem;
		}
		.grid {
			display: grid;
		}
		.grid-cols-12 {
			grid-template-columns: repeat(12, minmax(0, 1fr));
		}
		.pt-5 {
			padding-top: 1.25rem;
		}
		.col-start-1 {
			grid-column-start: 1;
		}
		.col-start-2 {
			grid-column-start: 2;
		}
		.col-start-3 {
			grid-column-start: 2;
		}
		.col-start-4 {
			grid-column-start: 2;
		}
		.col-start-5 {
			grid-column-start: 2;
		}
		.col-start-8 {
			grid-column-start: 2;
		}
		.col-span-1 {
			grid-column: span 1 / span 1;
		}
		.col-span-4 {
			grid-column: span 4 / span 4;
		}
		.relative {
			position: relative;
		}
		.absolute {
			position: absolute;
		}
		.right-0 {
			right: 0;
		}
		.top-0 {
			top: 0;
		}
		.text-center {
			text-align: center;
		}
		.text-left {
			text-align: left;
		}
		.inline-block {
			display: inline-block;
		}
		.items-start {
			align-items: flex-start;
		}

	}
	</style>
	<link href="{{ mix('css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('css/common.css') }}" rel="stylesheet">
	<link href="{{ asset('css/accessory.css') }}" rel="stylesheet">
</head>
<body>
	<div class="pl-8">
		<div class="inline-block items-center">
			<img class="inline-block" src="{{ url('/images/logo.jpg')}}" alt="logo" style="width:130px;"/>
		</div>
		<div class="inline-block items-center" style="padding-left:12px; font-size:10px;">
			<p style="font-family: ManBold">
				Centre d’Afaires ALTA ROCCA<br/>
				Bâtiment G –G DC<br/>
				1120 Route Départementale de Gémenos<br/>
				13400 AUBAGNE
			</p>

		</div>
	</div>
	<div class="w-full pl-8" style="padding-top:27px;">
		<div class="inline-block">
			<p><span><b>Dossier : </b></span>{{$name}}</p>
			<p style="margin-top:-4px;"><span class="fontbold"><b>Réf. Client : </b></span>{{$client}}</p>
			<p style="margin-top:-4px;"><span class="fontbold"><b>Date : </b></span>{{$date}}</p>
		</div>
		<div class="inline-block" style="padding-bottom:14px; padding-left:310px;">
			<div class="inline-block" style="padding-bottom: 16px;">
				<p class="fontbold"><b>Client : </b></p>
			</div>
			<div class="inline-block relative" style="width:150px; margin-top:-54px;">
				<p style="position: absolute; top-0; left-0 width:150px;">
					ART Société<br/>
					10B avenue Charles de Gaulle<br/>
					13860 Peyrolles en Provence
				</p>
			</div>
		</div>
	</div>

	<div class="pl-8" style="margin-top:-10px;">
		<p>
			Madame/Monsieur ,<br/>
			Faisant suite à votre demande de devis, veuillez trouver ci–joint nos meilleures conditions pour la fourniture des articles suivants :
		</p>
	</div>
	<div class="pt-10" style="margin-top:-20px; padding-left:14px; padding-right:14px;">
		<table class="w-full" style="padding-bottom:10px; border-bottom: 1px solid #e5e7eb;">
			<tr class="w-full" style="background-color: #f7f7f7">
				<th class="w-9/12 text-left" style="padding-left:16px;padding-top:8px; padding-bottom:8px; width:75%; background-color: #f7f7f7"><b>REPÈRE</b></th>
				<th class="w-1/12 text-center" style="padding-top:8px; padding-bottom:8px; width:8.33%; background-color: #f7f7f7"><b>QTÉ</b></th>
				<th class="w-1/12 text-center" style="padding-top:8px; padding-bottom:8px; width:8.33%; background-color: #f7f7f7"><b>PU H.T.</b></th>
				<th class="w-1/12 text-center" style="padding-top:8px; padding-bottom:8px; width:8.33%; background-color: #f7f7f7"><b>TOTAL H.T.</b></th>
			</tr>
			@if(isset($orders) && count($orders) > 0)
				@foreach($orders as $key=>$order)
					<tr class="w-full border-b border-gray-200" style="border-bottom: 1px solid #e5e7eb; padding-bottom:10px;">
						<td class="py-4 text-left leading-normal" style="padding-left:16px; width:55%;">
							Type de menuiserie : <span class="fontbold"><b>{{App\Model\Base\Join::find($order["join_id"])["name"] }}</b></span><br/>
							Matériau : <span class="fontbold"><b>{{App\Model\Base\Material::find($order["material_id"])["name"] }}</b></span><br/>
							Gamme : <span class="fontbold"><b>{{App\Model\Base\Range::find($order["range_id"])["name"] }}</b></span><br/>
							Type d’ouverture : <span class="fontbold"><b>{{App\Model\Base\Opening::find($order["opening_id"])["name"] }}</b></span><br/>
							Nombre de vantaux : <span class="fontbold"><b>{{App\Model\Base\Leave::find($order["leave_id"])["name"] }}</b></span><br/>
							Type de pose : <span class="fontbold"><b>{{App\Model\Base\Installation::find($order["installation_id"])["name"] }}</b></span><br/>
							Hauteur totale : <span class="fontbold"><b>{{App\Model\Base\TotalHeight::find($order["totalheight_id"])["value"] }}</b></span><br/>
							Largeur totale : <span class="fontbold"><b>{{App\Model\Base\TotalWidth::find($order["totalwidth_id"])["value"] }}</b></span><br/>
							Pour isolation de : <span class="fontbold"><b>{{App\Model\Base\Insulation::find($order["insulation_id"])["value"] }}</b></span><br/>
							Aération : <span class="fontbold"><b>{{App\Model\Base\Aeration::find($order["aeration_id"])["name"] }}</b></span><br/>
							Vitrage : <span class="fontbold"><b>{{App\Model\Base\Glazing::find($order["glazing_id"])["name"] }}</b></span><br/>
							Couleur menuiserie : <span class="fontbold"><b>{{App\Model\Base\Color::find($order["color_id"])["name"] }}</b></span><br/>
						</td>
						<td class="text-center relative" style="width:15%"><div class="w-full absolute top-0"><span><b>{{$order["quantity"]}}</b></span></div></td>
						<td class="text-center relative" style="width:15%"><div class="w-full absolute top-0"><span><b>@if(isset($order["price"]))<?php echo number_format($order["price"], 0, '.', ',') ?>@endif €</b></span></div></td>
						<td class="text-center relative" style="width:15%"><div class="w-full absolute top-0"><span><b>@if(isset($order["sum"]))<?php echo number_format($order["sum"], 0, '.', ',') ?>@endif €</b></span></div></td>
					</tr>
				@endforeach
			@endif
		</table>
		<div class="w-full flex h-full text-right py-4" style="width:208px;padding-left:479px;">
			<div style="width:250px; padding-top:15px; padding-bottom:13px; position: relative;">
				<div>
					<div class="py-1" style="padding-bottom:13px; width:240px; position: relative;"><b style="position: absolute; left:0;">TOTAL HT :</b><b style="position: absolute; right:0;">@if(isset($total_ht))<?php echo number_format($total_ht, 0, '.', ',') ?>@endif €</b></div>
				</div>
				<div style="padding-top:20px;">
					<div class="py-1" style="padding-bottom:13px; width:240px; position: relative;"><b style="position: absolute; left:0;">TVA 20 % :</b><b style="position: absolute; right:0;">@if(isset($tva))<?php echo number_format($tva, 0, '.', ',') ?>@endif €</b></div>
				</div>
				<div style="padding-top:40px;">
					<div class="py-1" style="padding-bottom:13px; width:240px; position: relative;"><b style="position: absolute; left:0;">TOTAL TTC :</b><b style="position: absolute; right:0;">@if(isset($tva))<?php echo number_format($total_tva, 0, '.', ',') ?>@endif €</b></div>
				</div>
				<hr style="position:absolute; left:0; top:75px; width:100%; color: #e5e7eb;"/>
			</div>
		</div>
	</div>

	<div class="pl-8" style="margin-top:90px;">
		<div style="padding-bottom:10px;">
			<span class="fontbold"><b>Remarques générales : </b></span>Prix départ usine – Le délai court à partir de la date de signature électronique<br/>
		</div>
		<div style="padding-bottom:10px;">
			<span class="fontbold pt-3"><b>Option(s) incluses dans le prix :</b></span><br/>
		</div>
		<div style="padding-bottom:10px;">
			<span class="fontbold pt-3"><b>Option(s) non incluse(s) dans le prix :</b></span><br/>
		</div>
	</div>
	<div style="background-color: #f3fbf6; padding-left:17px; padding-right:17px; padding-top:5px; padding-bottom:16px; margin-top:24px; margin-left:15px; margin-right:15px;">
		<p class="fontbold"><b>Bon pour accord</b></p>
		<p style="padding-top:0px;">Ce devis est valable <b>15 jours</b> apres la date d’émission. <span class="fontbold"><b>Règlement : 30 % à la commande, le solde à la livraison</b></span></p>
		<p style="padding-top:10px; padding-bottom:20px;">Fait à :<span style="padding-left:137px;">Le :</span><span style="padding-left:135px;">Signature client :</span></p>
	</div>

	<div class="pt-8 pl-8" style="line-height:1.5">
		En espérant que notre ofre retiendra favorablement votre atention, veuillez croire, Madame, Monsieur, en l’assurance de nos sentiments<br/> les plus dévoués.
	</div>
	
</body>
</html>