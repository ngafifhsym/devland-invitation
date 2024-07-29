<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FlowerController extends Controller
{
    public function index(){
        return view('product.flower',[
            'title' => 'Ngafif Wedding'
        ]);
    }
}
