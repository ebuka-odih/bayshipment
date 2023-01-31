<?php

namespace App\Http\Controllers;

use App\Shipment;
use Illuminate\Http\Request;

class ShipmentController extends Controller
{

    public function trackShipment(Request $request)
    {
        $shipment = Shipment::where('shipment_number', $request->shipment_number)->exists();
        if ($shipment) {
            $shipment = Shipment::findOrFail($shipment);
            return view('pages.shipment-details', compact('shipment'));
        }
        return redirect()->back()->with('declined', "Sorry! No Such Shipment Code");
    }

}
