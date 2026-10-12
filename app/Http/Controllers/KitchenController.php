<?php

namespace App\Http\Controllers;

use App\Services\ChefServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class KitchenController extends Controller
{
    public function serveOrder(ChefServices $chef)
    {

        Cache::add('total_order_count', 0);
        $orderCount = Cache::increment('total_order_count');
        Log::info("Total orders served: {$orderCount}");


        $managerSetting = config('restaurant.name');
        $specialDish = $chef->PrepareSpecialDish();

        //restaurant is the file name and name is the key in the file. we can access it using config('restaurant.name').
        return view('plate', [
            'restaurantName' => $managerSetting,
            'mealName' => $specialDish,
            'orderNumber' => $orderCount,
        ]);
    }
}
