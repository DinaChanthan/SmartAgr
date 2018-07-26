<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Device;

class StatusController extends Controller
{
    public function status($id)
    {
    	$status = Device::find($id);
    	$status->status = true;
    	$status->save();
    }
}
