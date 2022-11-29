<?php

namespace App\Http\Controllers;

use App\Models\country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
     public function index(){
         $countries=country::paginate(16);
         return view('admin.countries.countries')->with(['countries'=>$countries]);
     }
}
