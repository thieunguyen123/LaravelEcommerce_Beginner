<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;
class FrontendController extends Controller
{
    //
    public function index(){
        $feature_products = product::where('trending','1')->take(10)->get();
        return view('frontend.index',compact('feature_products'));
    }
}
