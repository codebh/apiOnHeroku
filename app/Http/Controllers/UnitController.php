<?php

namespace App\Http\Controllers;

use App\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    //
public function showAdd(){

    $units = Unit::all();
//    echo 'faisal';
//    return view('admin.unit.addEdit');
    return view('admin.unit.addEdit')->with('units',$units);
}

}
