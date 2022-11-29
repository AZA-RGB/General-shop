<?php

namespace App\Http\Controllers;

use App\Models\city;
use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index(){
        $cities=city::with(['state','country'])->paginate(16);
        return view('admin.cities.cities')->with(['cities' => $cities]);
    }
}
