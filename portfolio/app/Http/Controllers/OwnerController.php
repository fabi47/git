<?php
namespace App\Http\Controllers;
use App\Owner;
use Illuminate\Http\Request;

class OwnerController extends Controller
{
    public function index (Request $request)
    {
        $all_inputs = $requst->all();

        return view ('owner.index', compact('owners'));
    }
}
