<?php

namespace App\Http\Controllers\Api;

use App\Country;
use App\Http\Resources\CountryResource;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CountryController extends Controller
{
    public  function  index(){
        return CountryResource::collection(Country::paginate());
    }
    public  function  showCities($id){
        return CountryResource::collection(Country::paginate());
    }
    public  function  showStates($id){

        return CountryResource::collection(Country::paginate());
    }
}
