<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Shipment;
use Illuminate\Http\Request;

class AdminShipmentHistoryController extends Controller
{
    public function history($id)
    {
        $shipment = Shipment::findOrFail($id);
        return view('admin.shipment.history', compact('shipment'));
    }
}
