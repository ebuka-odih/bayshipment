<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    protected $guarded = [];

    public function shipmentCode()
    {
        $code = "BAY".$this->id."4255362".$this->id."90";
        return $code;
    }
}
