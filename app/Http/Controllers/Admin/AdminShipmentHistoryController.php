<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Shipment;
use App\ShipmentUpdate;
use Illuminate\Http\Request;

class AdminShipmentHistoryController extends Controller
{
    public function history($id)
    {
        $shipment = Shipment::findOrFail($id);
        return view('admin.shipment.history', compact('shipment'));
    }

    public function updateHistory(Request $request)
    {
        $request->validate([
           'location' => 'required',
           'status' => 'required',
           'updated_by' => 'nullable',
        ]);

        $shipment = new ShipmentUpdate();
        $shipment->location = $request->location;
        $shipment->status = $request->status;
        $shipment->updated_by = "BayShipment Admin";
        $shipment->shipment_id = $request->status;
        $shipment->save();
        return redirect()->back()->with('success', "Shipment Status Updated Successfully");

    }
}
