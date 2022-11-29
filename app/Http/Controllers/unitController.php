<?php

namespace App\Http\Controllers;

use App\Models\units;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Xml\Unit;

class unitController extends Controller
{

    public function index()
    {
        $units=units::paginate(20);
        return view('admin.units.units')->with(['units'=>$units]);

    }


    public function showAdd(units $units)
    {
        return view('admin.units.add_edit');

    }

}
