<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KitchenController extends Controller
{
    //
    public function serveOrder()
    {

        $managerSetting = config('restaurant.name');
        //restaurant is the file name and name is the key in the file. we can access it using config('restaurant.name').
        return view('plate', [
            'restaurantName' => $managerSetting,
            'mealName' => 'Chicken Biryani',
        ]);
    }
}
