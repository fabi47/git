<?php
namespace App\Http\Controllers;
use App\Owner;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    public function index (Request $request)
    {
        $all_inputs = $requst->all();
      //$items = Owner::all();

        $owner = new \App\Owner;

        $owner->name = $request->owner;
        $owner->tel = $request->owner;
        $owner->car_name = $request->owner;
        $owner->car_number = $request->owner;
        $owner->save();

        return view ('owner.index', compact('owners'));
        //return redirect('/form/index');
    }
}
