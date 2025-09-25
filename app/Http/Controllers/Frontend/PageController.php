<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function pricing(){

        $plans = Plan::where('is_active', true)->get();
        return view('frontend.pricing', compact('plans'));
    }
}
