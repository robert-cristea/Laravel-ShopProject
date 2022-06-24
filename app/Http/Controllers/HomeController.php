<?php

namespace App\Http\Controllers;

use App\Model\Base\Join;
use App\Model\Common\Cgv;
use App\Model\Common\Faq;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    
    public function index()
    {
        $joinery = Join::all();

        return view('home', compact('joinery'));
    }

    public function mentions()
    {
        return view('common.mentions');
    }

    public function faq()
    {
        $faqs = Faq::all();

        return view('common.faq', compact('faqs'));
    }
    public function cgv()
    {
        $premilaries = "Le client est censé avoir accepté sans réserve les présentes conditions générales de vente dès la signature pour validation sur le devis.";
        $articles = Cgv::all();

        return view('common.cgv', compact('premilaries', 'articles'));
    }

    public function contact()
    {
        return view('common.contact');
    }

    public function about()
    {
        return view('common.about');
    }

    public function email(Request $request) {

        $to = 'contact@gmail.com';
        $from = $request->input('email');
        $subject = $request->input('subject');
        $message = $request->input('message');
        $headers = 'From: '.$from . "\r\n" .
        'Reply-To: '.$from . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

        mail($to, $subject, $message, $headers);

        return view('common.contact_summary');

    }
}
