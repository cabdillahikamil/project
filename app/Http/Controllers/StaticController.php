<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
   public function home () {
       return view('index');
   }

   public function trips () {
    return view('top_place');
    }

    public function trip($var) {
        return view('tour_details');
    }

}


