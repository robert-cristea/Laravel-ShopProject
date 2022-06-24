<?php

namespace App\Http\Controllers;

use App\Http\Middleware\ProjectMiddleware;
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
use App\Model\Project;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use PDF;
use Barryvdh\DomPDF\PDF as DomPDF;

class ProController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('pro');
    }

    public function index($id = null)
    {
        $projects = Project::where('user_id', Auth::id())->get();

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

        if($id) {

            return view('professional.index', compact('id', 'joinery', 'material', 'range', 'opening', 'leave', 'installation', 'height', 'width', 'insulation', 'aeration', 'glazing', 'color', 'projects'));

        } else {

            return view('professional.index', compact('joinery', 'material', 'range', 'opening', 'leave', 'installation', 'height', 'width', 'insulation', 'aeration', 'glazing', 'color', 'projects'));

        }
    }

    public function joinery($id)
    {
        $selected_joinery = $id;

        $projects = Project::where('user_id', Auth::id())->get();

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

        return view('professional.index', compact('selected_joinery', 'joinery', 'material', 'range', 'opening', 'leave', 'installation', 'height', 'width', 'insulation', 'aeration', 'glazing', 'color', 'projects'));
    }

    public function account() 
    {
        return view('professional.account-index');
    }

    public function projects($id = null)
    {
        setlocale(LC_ALL, 'French');

        $projects = Project::where('user_id', Auth::id())->get();

        if($id == null) {

            if(count($projects) > 0) {

                $id = Project::where('user_id', Auth::id())->first()->id;

                $orders = Project::where('user_id', Auth::id())
                                ->first()
                                ->orders()
                                ->where('state_order', "0")
                                ->orderBy('created_at', 'DESC')
                                ->get();

                $total_ht = 0;

                foreach($orders as $key => $order) {
                    $total_ht += $order["price"];
                }

                $total_tva = $total_ht * 1.2;

                return view('professional.account-projects', compact('projects', 'id', 'orders', 'total_ht', 'total_tva'));

            } else {

                $total_ht = 0;
                $total_tva = 0;

                return view('professional.account-projects', compact('total_ht', 'total_tva'));

            }

        } else {

            $orders = Project::where('id', $id)
                            ->first()
                            ->orders()
                            ->where('state_order', "0")
                            ->orderBy('created_at', 'DESC')
                            ->get();

            $total_ht = 0;

            foreach($orders as $key => $order) {
                $total_ht += $order["price"];
            }

            $total_tva = $total_ht * 1.2;

            return view('professional.account-projects', compact('projects', 'id', 'orders', 'total_ht', 'total_tva'));

        }
    }

    public function history()
    {
        $currentyear = date('Y');
        $currentmonth = date('m');

        $currenthistory = Order::where('state_order', 1)
                            ->where('user_id', Auth::id())
                            ->where('mode', 1)
                            ->whereYear('updated_at', '=', $currentyear)
                            ->whereMonth('updated_at', '=', $currentmonth)
                            ->orderBy('updated_at', 'DESC')
                            ->get();

        setlocale(LC_ALL, 'French');

        $otherhistory = Order::where('mode', 1)
                            ->where(function ($query) {

                            $currentyear = date('Y');
                            $currentmonth = date('m');

                            $query->whereMonth('updated_at', '!=', $currentmonth)
                            ->orWhereYear('updated_at', '!=', $currentyear);

                            })
                            ->orderBy('updated_at', 'DESC')
                            ->get()
                            ->groupBy(function ($val) {
                                return ucfirst(utf8_encode(strftime('%B %Y', strtotime($val->created_at))));
                            });
  
        return view('professional.account-history', compact('currenthistory', 'otherhistory'));
    }

    public function info()
    {
        $user = User::find(Auth::id());
        return view('professional.account-info', compact('user'));
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
            'company' => $request->company,
            'address' => $request->address,
            'postcode' => $request->postcode,
            'city' => $request->city,
            'telephone' => $request->telephone,
            'profession_id' => $request->profession,
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $updated = User::where('id', Auth::user()->id)->update($data);

        return redirect()->route("pro-account");
    }

    public function recordorder(Request $request)
    {
        $joinery_id = $request->joinery_submit;
        $material_id = $request->material_submit;
        $range_id = $request->range_submit;
        $opening_id = $request->opening_submit;
        $leave_id = $request->leave_submit;
        $installation_id = $request->installation_submit;
        $aeration_id = $request->aeration_submit;
        $glazing_id = $request->glazing_submit;
        $color_id = $request->color_submit;
        $height_size_id = $request->height_size_submit;
        $width_size_id = $request->width_size_submit;
        $insulation_size_id = $request->insulation_size_submit;

        $select_project_id = $request->select_project_submit;
        $new_project_name = $request->new_project_submit;

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

        if($select_project_id) {

            $order->project_id = $select_project_id;

        } else {

            $project = new Project();

            $project->user_id = Auth::id();
            $project->name = $new_project_name;

            $project->save();

            $order->project_id = $project->id;
            
        }

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

        $order->price = $price;

        $order->save();

        return redirect()->route("pro-projects-id", Order::find($order->id)->project_id);
    }

    public function deleteproject($id)
    {
        $delete = Project::find($id)->delete();

        if($delete) {
            return redirect()->route("pro-projects");
        }
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
        $joinery_id = $request->joinery_submit;
        $material_id = $request->material_submit;
        $range_id = $request->range_submit;
        $opening_id = $request->opening_submit;
        $leave_id = $request->leave_submit;
        $installation_id = $request->installation_submit;
        $aeration_id = $request->aeration_submit;
        $glazing_id = $request->glazing_submit;
        $color_id = $request->color_submit;
        $height_size_id = $request->height_size_submit;
        $width_size_id = $request->width_size_submit;
        $insulation_size_id = $request->insulation_size_submit;

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

        $data = ([
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
            'price'=>$price
        ]);

        $update = Order::where('id', $request->order_id)->update($data);

        return redirect()->route("pro-projects-id", Order::find($request->order_id)->project_id);
    }

    public function deleteorder($id)
    {
        $project_id = Order::find($id)->project_id;

        $delete = Order::find($id)->delete();

        if($delete) {
            return redirect()->route("pro-projects-id", $project_id);
        }
    }

    public function createproject(Request $request)
    {
        $new_project_name = $request->post("new_project_name");

        $project = new Project();

        $project->user_id = Auth::id();
        $project->name = $new_project_name;

        $project->save();

        return redirect()->route("pro-projects-id", $project->id);
    }

    public function clicandpay(Request $request)
    {

        $project_id = $request->post("project_id");
        $order_id = $request->post("order_id");

        $joinery_id = $request->post("joinery_submit_pay");
        $material_id = $request->post("material_submit_pay");
        $range_id = $request->post("range_submit_pay");
        $opening_id = $request->post("opening_submit_pay");
        $leave_id = $request->post("leave_submit_pay");
        $installation_id = $request->post("installation_submit_pay");
        $aeration_id = $request->post("aeration_submit_pay");
        $glazing_id = $request->post("glazing_submit_pay");
        $color_id = $request->post("color_submit_pay");
        $height_size_id = $request->post("height_size_submit_pay");
        $width_size_id = $request->post("width_size_submit_pay");
        $insulation_size_id = $request->post("insulation_size_submit_pay");

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

        if($project_id) {

            $price = Order::where('project_id', $project_id)->where('state_order', 0)->sum('price') * 1.2;

            return view('payment.index', compact('price', 'project_id'));

        } else {

            if($order_id) {

                $project_id = Order::find($order_id)->project_id;

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

                return view('payment.index', compact('price', 'project_id', 'order_id'));

            } else {

                $price = $this->calculatePrice($idArray) * 1.2;

                return view('payment.index', compact('price', 'joinery_id', 'material_id', 'range_id', 'aeration_id', 'opening_id', 'leave_id', 'glazing_id', 'installation_id', 'color_id', 'height_size_id', 'width_size_id', 'insulation_size_id'));
                
            }
        }
        
    }

    public function pay(Request $request)
    {

        $project_id = $request->post("project_id");
        $order_id = $request->post("order_id");

        $joinery_id = $request->post("joinery_id");
        $material_id = $request->post("material_id");
        $range_id = $request->post("range_id");
        $opening_id = $request->post("opening_id");
        $leave_id = $request->post("leave_id");
        $installation_id = $request->post("installation_id");
        $aeration_id = $request->post("aeration_id");
        $glazing_id = $request->post("glazing_id");
        $color_id = $request->post("color_id");
        $height_size_id = $request->post("height_size_id");
        $width_size_id = $request->post("width_size_id");
        $insulation_size_id = $request->post("insulation_size_id");

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

        if($project_id) {

            if($order_id) {

                $price = Order::find($order_id)->price;

                $data = ([
                    'state_order' => "1"
                ]);
        
                Order::where('id', $order_id)->update($data);

            } else {

                $price = Order::where('project_id', $project_id)->where('state_order', 0)->sum('price');

                $data = ([
                    'state_order' => "1"
                ]);
    
                Order::where('project_id', $project_id)->update($data);

            }

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
        $payment->project_id = $request->project_id;
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

   public function downloadQuote(Request $request)
   {
       $id = $request->project_id;

       set_time_limit(6000);

       $name = Project::find($id)->name;
       $date = Project::find($id)->updated_at;
       $client = Auth::user()->company;
       $address = Auth::user()->address;
       $orders_original = Project::where('user_id', Auth::id())
                               ->where('id', $id)
                               ->first()
                               ->orders()
                               ->where('state_order', "0")
                               ->orderBy('created_at', 'DESC')
                               ->get();

       $total_ht = 0;

       foreach($orders_original as $key => $item) {
           $item["quantity"] = 1;
           $item["sum"] = $item["price"];
       }

       foreach($orders_original as $key => $item) {
           $total_ht += $item["price"];
       }

       $total_tva = $total_ht * 1.2;

       $tva = $total_tva - $total_ht;

       for($x = 0 ; $x < count($orders_original) ; $x ++) {
           for($y = $x + 1 ; $y < count($orders_original) ; $y ++) {
               if($orders_original[$x]["price"] == $orders_original[$y]["price"]) {
                   if( 
                       $orders_original[$x]["join_id"] == $orders_original[$y]["join_id"] &&
                       $orders_original[$x]["material_id"] == $orders_original[$y]["material_id"] &&
                       $orders_original[$x]["range_id"] == $orders_original[$y]["range_id"] &&
                       $orders_original[$x]["opening_id"] == $orders_original[$y]["opening_id"] &&
                       $orders_original[$x]["leave_id"] == $orders_original[$y]["leave_id"] &&
                       $orders_original[$x]["installation_id"] == $orders_original[$y]["installation_id"] &&
                       $orders_original[$x]["totalheight_id"] == $orders_original[$y]["totalheight_id"] &&
                       $orders_original[$x]["totalwidth_id"] == $orders_original[$y]["totalwidth_id"] &&
                       $orders_original[$x]["insulation_id"] == $orders_original[$y]["insulation_id"] &&
                       $orders_original[$x]["aeration_id"] == $orders_original[$y]["aeration_id"] &&
                       $orders_original[$x]["color_id"] == $orders_original[$y]["color_id"]
                       ) {
                           $orders_original[$x]["quantity"] += 1;
                           $orders_original[$x]["sum"] += $orders_original[$x]["price"];
                           unset($orders_original[$y]);
                       }
                   
               }
           }
       }
       
       $data = 
       [
           'name' => $name,
           'date' => $date,
           'client' => $client,
           'address' => $address,
           'orders' => $orders_original,
           'total_ht' => $total_ht,
           'total_tva' => $total_tva,
           'tva' => $tva,
       ];

       $pdf = PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])->loadView('report', $data);
 
       return $pdf->download('Report-'.$name.'.pdf');
   }

}
