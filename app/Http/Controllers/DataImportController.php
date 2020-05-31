<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataImportController extends Controller
{
    //

    public function importUnit()
    {
        $units = [

            "BG" => "Bag",
            "BK" => "Bucket",
            "BN" => "Bundle",
            "BO" => "Bowl",
            "BX" => "Box",
            "CR" => "Card",
            "CM" => "Centimeters",
            "CS" => "Case",
            "CT" => "Carton",
        ];
        foreach ($units as $key =>$value){
            DB::table('units')->insert([
                'unit_code'=>$key,
                'unit_name'=>$value,
                'created_at'=>now(),
                'updated_at'=>now(),
            ]);
        }
    }

}
