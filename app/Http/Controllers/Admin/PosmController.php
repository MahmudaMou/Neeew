<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Posmitems;

class PosmController extends Controller
{
    public function index()
    {
        $posms = Posmitems::all();
        return view('admin.posmitems')->with('posms',$posms);
    }
}
