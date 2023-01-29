<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Shipment;
use Illuminate\Http\Request;

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

    }

    protected function getData(Request $request)
    {
        $rules = [
          'sender_name' => 'required',
        ];
    }
}
