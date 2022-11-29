<?php

namespace App\Http\Controllers;

use App\Models\review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index(){
        $reviews=review::with(['user','product'])->paginate(16);
        return view('admin.reviews.reviews')->with([
        'reviews' => $reviews
        ]);
    }
}
