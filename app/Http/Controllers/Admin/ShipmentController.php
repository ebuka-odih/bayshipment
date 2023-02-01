<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\NewShipment;
use App\Shipment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ShipmentController extends Controller
{
    public function index()
    {
        $shipment = Shipment::all();
        return view('admin.shipment.list', compact('shipment'));
    }

    public function create()
    {
        return view('admin.shipment.create');
    }
    public function store(Request $request)
    {

        $data = $this->getData($request);
        $data['shipment_number'] = $this->trackingNo();
        $data = Shipment::create($data);
        Mail::to($data->rec_email)->send(new NewShipment($data));
        return redirect()->route('admin.shipment.index')->with('success', "Shipment Created Successful");
    }

    public function show($id)
    {
        $shipment = Shipment::findOrFail($id);
        return view('admin.shipment.detail', compact('shipment'));
    }

    protected function getData(Request $request)
    {
        $rules = [
          'sender_name' => 'required',
          'sender_email' => 'required',
          'sender_phone' => 'required',
          'sender_address' => 'required',

          'rec_name' => 'required',
          'rec_email' => 'required',
          'rec_phone' => 'required',
          'rec_address' => 'required',

          'type' => 'required',
          'courier' => 'required',
          'mode' => 'required',
          'quantity' => 'required',
          'total_freight' => 'required',
          'carrier_no' => 'required',
          'origin' => 'required',
          'pickup_date' => 'required',
          'expected_date' => 'required',
          'weight' => 'required',
          'package' => 'required',
          'product' => 'required',
          'payment_mode' => 'nullable',
          'carrier' => 'nullable',
          'departure_time' => 'required',
          'destination' => 'required',
          'pickup_time' => 'required',
          'comment' => 'nullable',
        ];
        return $request->validate($rules);
    }
}
