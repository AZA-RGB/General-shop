<?php

namespace App\Http\Controllers;

use App\Models\support;
use Illuminate\Http\Request;

class SupportController extends Controller
{

    public function index()
    {
        $supports = support::with(['supportType','user','order'])->paginate(16);
        return view('admin.supports.supports')->with(['supports' => $supports]);
    }


}
