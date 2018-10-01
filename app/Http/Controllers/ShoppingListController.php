<?php

namespace App\Http\Controllers;

use App\Fruit;

class ShoppingListController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index()
    {
        $totalPrice = 0;
        $fruits = Fruit::all();
        foreach($fruits as &$fruit) {
            $fruit->total_quantity = 0;
            foreach($fruit->orders as $order) {
                $fruit->total_quantity += $order->pivot->quantity;
            }
            $totalPrice += $fruit->total_quantity * $fruit->price;
        }
        return view('shopping-list', compact('fruits', 'totalPrice'));
    }
}
