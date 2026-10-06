<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KitchenController extends Controller
{
    //
    public function serveOrder()
    {
        return view('plate' , [
            'mealName' => 'Chicken Biryani',
        ]);
    }
}
