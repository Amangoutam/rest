<?php

namespace App\Http\Controllers;

use App\Food;
use App\FileManager;
use App\ResponseHandler;
use Illuminate\Http\Request;
use App\Http\Resources\FoodResource;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class FoodController extends Controller
{
    private $respHandler;
    private $fileManager;

    public function __construct()
    {
        $this->respHandler = new ResponseHandler();
        $this->fileManager = new FileManager();
    }

    public function most()
    {
         $foods = Food::leftJoin('orders', 'food.id', '=', 'orders.food_id')
        ->whereBetween('created_at', [Carbon::today(), Carbon::now()->subDays(10)])
        ->select('food.id', 'food.name', DB::raw('count(orders.id) as most_count'))
        ->groupBy('orders.food_id')
        ->orderBy('most_count', 'desc')
        ->take(5);
        /// Check if no one food found
        if ($foods->count() > 0) {
            /// Generate success response
            return $this->respHandler->send(200, "Successfuly Get Foods", FoodResource::collection($foods));
        } else {
            /// Generate not found response
            return $this->respHandler->notFound("Foods");
        }
    }
    public function least()
    {
         $foods = Food::leftJoin('orders', 'food.id', '=', 'orders.food_id')
        ->whereBetween('created_at', [Carbon::today(), Carbon::now()->subDays(10)])
        ->select('food.id', 'food.name', DB::raw('count(orders.id) as most_count'))
        ->groupBy('orders.food_id')
        ->orderBy('most_count', 'asc')
        ->take(5);
        /// Check if no one food found
        if ($foods->count() > 0) {
            /// Generate success response
            return $this->respHandler->send(200, "Successfuly Get Foods", FoodResource::collection($foods));
        } else {
            /// Generate not found response
            return $this->respHandler->notFound("Foods");
        }
    }

    public function sold()
    {
         $foods = Food::leftJoin('orders', 'food.id', '=', 'orders.food_id')
        ->whereBetween('created_at', [Carbon::today(), Carbon::now()->subDays(2)])
        ->select('food.id', 'food.name','count', DB::raw('count(orders.id) as count'))
        ->groupBy('orders.food_id')
        ->get();
        /// Check if no one food found
        if ($foods->count() > 0) {
            /// Generate success response
            return $this->respHandler->send(200, "Successfuly Get Foods", FoodResource::collection($foods));
        } else {
            /// Generate not found response
            return $this->respHandler->notFound("Foods");
        }
    }
}
