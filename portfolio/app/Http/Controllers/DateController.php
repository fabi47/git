<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class DateController extends Controller
{
    public function index (Request $request)
    {
        $owner = new \App\Owner;

        $owner->name = $request['name'];
        $owner->updated_at = "2020-09-09 12:00:00";
        $owner->created_at = "2020-09-09 12:00:00";
        $owner->car_name = $request['car_name'];  
        $owner->save();
        
        return view('date', compact('owner'));
    }
}
