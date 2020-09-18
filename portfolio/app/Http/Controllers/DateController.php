<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class DateController extends Controller
{
    public function index (Request $request)
    {
        $owner = new \App\Owner;

        $owner->name = $request['name'];
        $owner->car_name = $request['car_name'];       
        $owner->car_number = $request['car_number'];
        $owner->menutype = $request['menutype'];
        $owner->updated_at = now();
        $owner->created_at = now();
        
        $owner->save();
        
        return view('date', compact('owner'));
    }
}
