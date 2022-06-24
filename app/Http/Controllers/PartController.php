<?php

namespace App\Http\Controllers;

use App\Model\Base\Aeration;
use App\Model\Base\Color;
use App\Model\Base\Glazing;
use App\Model\Base\Installation;
use App\Model\Base\Insulation;
use App\Model\Base\Join;
use App\Model\Base\Leave;
use App\Model\Base\Material;
use App\Model\Base\Opening;
use App\Model\Base\Range;
use App\Model\Base\TotalHeight;
use App\Model\Base\TotalWidth;
use App\Model\Order;
use App\Model\Payment;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PartController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('part');
    }
    
    public function index()
    {
        $joinery = Join::all();
        $material = Material::all();
        $range = Range::all();
        $opening = Opening::all();
        $leave = Leave::all();
        $installation = Installation::all();
        $height = TotalHeight::all();
        $width = TotalWidth::all();
        $insulation = Insulation::all();
        $aeration = Aeration::all();
        $glazing = Glazing::all();
        $color = Color::all();

        return view('particular.index', compact('joinery', 'material', 'range', 'opening', 'leave', 'installation', 'height', 'width', 'insulation', 'aeration', 'glazing', 'color'));
    }
    
    public function joinery($joinery) 
    {
        $selected_joinery = $joinery;

        $joinery = Join::all();
        $material = Material::all();
        $range = Range::all();
        $opening = Opening::all();
        $leave = Leave::all();
        $installation = Installation::all();
        $height = TotalHeight::all();
        $width = TotalWidth::all();
        $insulation = Insulation::all();
        $aeration = Aeration::all();
        $glazing = Glazing::all();
        $color = Color::all();

        return view('particular.index', compact('selected_joinery', 'joinery', 'material', 'range', 'opening', 'leave', 'installation', 'height', 'width', 'insulation', 'aeration', 'glazing', 'color'));
    }
    
    public function summary(Request $request) 
    {

        $joinery_id = $request->post("joinery_submit");
        $material_id = $request->post("material_submit");
        $range_id = $request->post("range_submit");
        $opening_id = $request->post("opening_submit");
        $leave_id = $request->post("leave_submit");
        $installation_id = $request->post("installation_submit");
        $aeration_id = $request->post("aeration_submit");
        $glazing_id = $request->post("glazing_submit");
        $color_id = $request->post("color_submit");
        $height_size_id = $request->post("height_size_submit");
        $width_size_id = $request->post("width_size_submit");
        $insulation_size_id = $request->post("insulation_size_submit");

        $joinery = Join::find($joinery_id);
        $material = Material::find($material_id);
        $range = Range::find($range_id);
        $opening = Opening::find($opening_id);
        $leave = Leave::find($leave_id);
        $installation = Installation::find($installation_id);
        $aeration = Aeration::find($aeration_id);
        $glazing = Glazing::find($glazing_id);
        $color = Color::find($color_id);
        $height_size = TotalHeight::find($height_size_id);
        $width_size = TotalWidth::find($width_size_id);
        $insulation_size = Insulation::find($insulation_size_id);

        $price = 

            $joinery["price"] + 
            $material["price"] + 
            $range["price"] + 
            $opening["price"] + 
            $leave["price"] + 
            $installation["price"] +
            $aeration["price"] +
            $glazing["price"] + 
            $color["price"] + 
            $height_size["price"] + 
            $width_size["price"] + 
            $insulation_size["price"];

        $price = $price."€";

        return view('particular.summary', compact('price', 'joinery', 'material', 'range', 'opening', 'leave', 'installation', 'aeration', 'glazing', 'color', 'height_size', 'width_size', 'insulation_size'));
    }

    public function account() 
    {
        return view('particular.account-index');
    }
    
    public function projects() 
    {
        setlocale(LC_ALL, 'French');

        $projects = Order::where('state_order', "0")
                        ->where('user_id', Auth::id())
                        ->where('mode', 0)
                        ->orderBy('created_at', 'DESC')
                        ->get();

        return view('particular.account-projects', compact('projects'));
    }

    public function history()
    {
        setlocale(LC_ALL, 'French');
        
        $history = Order::where('state_order', "1")
                        ->where('user_id', Auth::id())
                        ->where('mode', 0)
                        ->orderBy('updated_at', 'DESC')
                        ->get();

        return view('particular.account-history', compact('history'));
    }

    public function info()
    {
        $user = User::find(Auth::id());

        return view('particular.account-info', compact('user'));
    }

    public function modifyinfo(Request $request)
    {

        if(User::find(Auth::id())->email == $request->email) {

            $validator = Validator::make($request->all(),
            [
                'gender' => 'required|string',
                'firstname' => 'required|string',
                'lastname' => 'required|string',
                'email' => 'required|string',
                'address' => 'required|string',
                'postcode' => 'required|string',
                'city' => 'required|string',
            ]);

        } else {

            $validator = Validator::make($request->all(),
            [
                'gender' => 'required|string',
                'firstname' => 'required|string',
                'lastname' => 'required|string',
                'email' => 'required|string|unique:users',
                'address' => 'required|string',
                'postcode' => 'required|string',
                'city' => 'required|string',
            ]);

        }

        $data = ([
            'gender' => $request->gender,
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'address' => $request->address,
            'postcode' => $request->postcode,
            'city' => $request->city,
            'telephone' => $request->telephone,
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $updated = User::where('id', Auth::id())->update($data);

        return redirect()->route("part-account");
    }

    public function recordorder(Request $request) 
    {
        $joinery_id = $request->post("joinery");
        $material_id = $request->post("material");
        $range_id = $request->post("range");
        $opening_id = $request->post("opening");
        $leave_id = $request->post("leave");
        $installation_id = $request->post("installation");
        $aeration_id = $request->post("aeration");
        $glazing_id = $request->post("glazing");
        $color_id = $request->post("color");
        $height_size_id = $request->post("height_size");
        $width_size_id = $request->post("width_size");
        $insulation_size_id = $request->post("insulation_size");

        $idArray = 
            [
                "join" => $joinery_id,
                "material" => $material_id,
                "range" => $range_id,
                "opening" => $opening_id,
                "leave" => $leave_id,
                "installation" => $installation_id,
                "aeration" => $aeration_id,
                "glazing" => $glazing_id,
                "color" => $color_id,
                "height" => $height_size_id,
                "width" => $width_size_id,
                "insulation" => $insulation_size_id,
            ];

        $order = new Order();

        $order->user_id = Auth::id();
        $order->join_id = $joinery_id;
        $order->totalheight_id = $height_size_id;
        $order->material_id = $material_id;
        $order->insulation_id = $insulation_size_id;
        $order->range_id = $range_id;
        $order->aeration_id = $aeration_id;
        $order->opening_id = $opening_id;
        $order->leave_id = $leave_id;
        $order->glazing_id = $glazing_id;
        $order->installation_id = $installation_id;
        $order->color_id = $color_id;
        $order->totalwidth_id = $width_size_id;
        $order->mode = Auth::user()->mode;

        $order->price = $this->calculatePrice($idArray);

        $order->save();

        return redirect()->route("part-projects");
    }

    public function modifyorder($id)
    {
        $joinery = Join::all();
        $material = Material::all();
        $range = Range::all();
        $opening = Opening::all();
        $leave = Leave::all();
        $installation = Installation::all();
        $height = TotalHeight::all();
        $width = TotalWidth::all();
        $insulation = Insulation::all();
        $aeration = Aeration::all();
        $glazing = Glazing::all();
        $color = Color::all();

        $order = Order::find($id);

        return view('modify.order', compact('joinery', 'material', 'range', 'opening', 'leave', 'installation', 'height', 'width', 'insulation', 'aeration', 'glazing', 'color', 'order'));
    }

    public function updateorder(Request $request)
    {
        $joinery_id = $request->post("joinery_submit");
        $material_id = $request->post("material_submit");
        $range_id = $request->post("range_submit");
        $opening_id = $request->post("opening_submit");
        $leave_id = $request->post("leave_submit");
        $installation_id = $request->post("installation_submit");
        $aeration_id = $request->post("aeration_submit");
        $glazing_id = $request->post("glazing_submit");
        $color_id = $request->post("color_submit");
        $height_size_id = $request->post("height_size_submit");
        $width_size_id = $request->post("width_size_submit");
        $insulation_size_id = $request->post("insulation_size_submit");

        $idArray = 
            [
                "join" => $joinery_id,
                "material" => $material_id,
                "range" => $range_id,
                "opening" => $opening_id,
                "leave" => $leave_id,
                "installation" => $installation_id,
                "aeration" => $aeration_id,
                "glazing" => $glazing_id,
                "color" => $color_id,
                "height" => $height_size_id,
                "width" => $width_size_id,
                "insulation" => $insulation_size_id,
            ];

        $data = 
            [
                'join_id' => $joinery_id,
                'material_id' => $material_id,
                'range_id' => $range_id,
                'opening_id' => $opening_id,
                'leave_id' => $leave_id,
                'installation_id' => $installation_id,
                'totalheight_id' => $height_size_id,
                'totalwidth_id' => $width_size_id,
                'insulation_id' => $insulation_size_id,
                'aeration_id' => $aeration_id,
                'glazing_id' => $glazing_id,
                'color_id' => $color_id,
                'price' => $price = $this->calculatePrice($idArray)

            ];

        $update = Order::where('id', $request->order_id)->update($data);

        return redirect()->route("part-projects");
    }

    public function deleteorder($id)
    {
        $delete = Order::find($id)->delete();

        if($delete) {
            return redirect()->route("part-projects");
        }
    }

    public function clicandpay(Request $request)
    {

        $order_id = $request->order_id;

        $joinery_id = $request->joinery_submit_pay;
        $material_id = $request->material_submit_pay;
        $range_id = $request->range_submit_pay;
        $opening_id = $request->opening_submit_pay;
        $leave_id = $request->leave_submit_pay;
        $installation_id = $request->installation_submit_pay;
        $aeration_id = $request->aeration_submit_pay;
        $glazing_id = $request->glazing_submit_pay;
        $color_id = $request->color_submit_pay;
        $height_size_id = $request->height_size_submit_pay;
        $width_size_id = $request->width_size_submit_pay;
        $insulation_size_id = $request->insulation_size_submit_pay;

        $idArray = 
            [
                "join" => $joinery_id,
                "material" => $material_id,
                "range" => $range_id,
                "opening" => $opening_id,
                "leave" => $leave_id,
                "installation" => $installation_id,
                "aeration" => $aeration_id,
                "glazing" => $glazing_id,
                "color" => $color_id,
                "height" => $height_size_id,
                "width" => $width_size_id,
                "insulation" => $insulation_size_id,
            ];

        if($order_id) {

            if($joinery_id) {

                $data = 
                    [
                        'join_id' => $joinery_id,
                        'material_id' => $material_id,
                        'range_id' => $range_id,
                        'opening_id' => $opening_id,
                        'leave_id' => $leave_id,
                        'installation_id' => $installation_id,
                        'totalheight_id' => $height_size_id,
                        'totalwidth_id' => $width_size_id,
                        'insulation_id' => $insulation_size_id,
                        'aeration_id' => $aeration_id,
                        'glazing_id' => $glazing_id,
                        'color_id' => $color_id,
                        'price' => $this->calculatePrice($idArray)
                    ];
    
                $update = Order::where('id', $order_id)->update($data);

            }

            $price = Order::find($order_id)->price * 1.2;

            return view('payment.index', compact('price', 'order_id'));
            
        } else {

            $price = $this->calculatePrice($idArray) * 1.2;

            return view('payment.index', compact('price', 'joinery_id', 'material_id', 'range_id', 'aeration_id', 'opening_id', 'leave_id', 'glazing_id', 'installation_id', 'color_id', 'height_size_id', 'width_size_id', 'insulation_size_id'));

        }
        
    }
    public function pay(Request $request)
    {

        $order_id = $request->order_id;

        $joinery_id = $request->joinery_id;
        $material_id = $request->material_id;
        $range_id = $request->range_id;
        $opening_id = $request->opening_id;
        $leave_id = $request->leave_id;
        $installation_id = $request->installation_id;
        $aeration_id = $request->aeration_id;
        $glazing_id = $request->glazing_id;
        $color_id = $request->color_id;
        $height_size_id = $request->height_size_id;
        $width_size_id = $request->width_size_id;
        $insulation_size_id = $request->insulation_size_id;

        $idArray = 
            [
                "join" => $joinery_id,
                "material" => $material_id,
                "range" => $range_id,
                "opening" => $opening_id,
                "leave" => $leave_id,
                "installation" => $installation_id,
                "aeration" => $aeration_id,
                "glazing" => $glazing_id,
                "color" => $color_id,
                "height" => $height_size_id,
                "width" => $width_size_id,
                "insulation" => $insulation_size_id,
            ];

        if($order_id) {

            $data = ([
                'state_order' => "1"
            ]);
    
            Order::where('id', $order_id)->update($data);

            $price = Order::find($order_id)->price;
            
        } else {

            $order = new Order();

            $order->user_id = Auth::id();
            $order->join_id = $joinery_id;
            $order->totalheight_id = $height_size_id;
            $order->material_id = $material_id;
            $order->insulation_id = $insulation_size_id;
            $order->range_id = $range_id;
            $order->aeration_id = $aeration_id;
            $order->opening_id = $opening_id;
            $order->leave_id = $leave_id;
            $order->glazing_id = $glazing_id;
            $order->installation_id = $installation_id;
            $order->color_id = $color_id;
            $order->totalwidth_id = $width_size_id;
            $order->mode = Auth::user()->mode;

            $price = $this->calculatePrice($idArray);

            $order->price = $price;
            
            $order->state_order = 1;
    
            $order->save();

            $order_id = $order->id;
            
        }

        $address_state = $request->address_state;

        $firstname_delivery = $request->firstname_delivery;
        $lastname_delivery = $request->lastname_delivery;
        $address_delivery = $request->address_delivery;
        $postcode_delivery = $request->postcode_delivery;
        $city_delivery = $request->city_delivery;

        
        $payment = new Payment();

        $payment->user_id = Auth::id();
        $payment->mode = Auth::user()->mode;
        $payment->state_address = $request->address_state;
        $payment->order_id = $order_id;
        $payment->cardnumber = $request->cardnumber;
        $payment->expirationdate = $request->expirationdate;
        $payment->securitycode = $request->securitycode;
        $payment->price = $price;

        if($address_state == 0) {

            $payment->firstname = $request->firstname_billing;
            $payment->lastname = $request->lastname_billing;
            $payment->address = $request->address_billing;
            $payment->postcode = $request->postcode_billing;
            $payment->city = $request->city_billing;
            
        }

        $payment->save();

        return view('payment.summary');
    }

    public function calculatePrice($value)
     {

        $joinery = Join::find($value["join"]);
        $material = Material::find($value["material"]);
        $range = Range::find($value["range"]);
        $opening = Opening::find($value["opening"]);
        $leave = Leave::find($value["leave"]);
        $installation = Installation::find($value["installation"]);
        $aeration = Aeration::find($value["aeration"]);
        $glazing = Glazing::find($value["glazing"]);
        $color = Color::find($value["color"]);
        $height_size = TotalHeight::find($value["height"]);
        $width_size = TotalWidth::find($value["width"]);
        $insulation_size = Insulation::find($value["insulation"]);

        $price = 
            $joinery["price"] + 
            $material["price"] + 
            $range["price"] + 
            $opening["price"] + 
            $leave["price"] + 
            $installation["price"] +
            $aeration["price"] +
            $glazing["price"] + 
            $color["price"] + 
            $height_size["price"] + 
            $width_size["price"] + 
            $insulation_size["price"];

        return $price;
    }

}
