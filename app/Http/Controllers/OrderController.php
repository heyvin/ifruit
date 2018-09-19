<?php

namespace App\Http\Controllers;

use App\Fruit;
use App\Order;
use App\Util;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;

class OrderController extends Controller
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
        $orders = Order::all();
        return view('order.list', compact('orders'));
    }

    public function create()
    {
        $fruits = Fruit::all();
        return view('order.create', compact('fruits'));
    }

    public function edit($id)
    {
        $order = Order::find($id);
        $allFruits = Fruit::all();
        $fruits = [];
        foreach ($allFruits as $fruit) {
            array_push($fruits, [
                'id' => $fruit->id,
                'name' => $fruit->name,
                'image' => $fruit->image,
                'quantity' => $order->fruits()->where('fruits.id', $fruit->id)->first()
                    ? $order->fruits()->where('fruits.id', $fruit->id)->first()->pivot->quantity
                    : 0
            ]);
        }
        return view('order.edit', compact('order', 'fruits'));
    }

    public function add(Request $request)
    {
        $ampHeader = $this->buildAmpResponseHeader($request);

        try {

            $order = Order::where('name', strtolower($request->input('name')))->first();
            if ($order) {
                return (new JsonResponse(
                    [
                        'message' => 'Existing customer name.'
                    ],
                    Response::HTTP_BAD_REQUEST
                ))->withHeaders($ampHeader);
            } else {
                $orderInputArray = [];
                foreach($request->except('_token') as $key => $input) {
                    if (str_contains($key, 'quantity')) {
                        array_push($orderInputArray, [
                            'id' => str_replace('quantity', '', $key),
                            'quantity' => $input
                        ]);
                    }
                }
                $order = new Order();
                $order->name = trim($request->input('name'));
                $order->password = md5($request->input('password'));
                $order->save();
                foreach ($orderInputArray as $orderInput) {
                    $fruit = Fruit::find((int) $orderInput['id']);
                    $order->fruits()->save($fruit, [
                        'quantity' => $orderInput['quantity'],
                        'frequency' => 'Mon,Tue,Wed,Thu,Fri'
                    ]);
                }
            }

            return (new JsonResponse(
                [
                    'message' => 'Order added.'
                ],
                Response::HTTP_OK
            ))->withHeaders($ampHeader);

        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return (new JsonResponse(
                [
                    'message' => 'Crappy code by Lucas. Contact him.'
                ],
                Response::HTTP_INTERNAL_SERVER_ERROR
            ))->withHeaders($ampHeader);
        }
    }

    public function update(Request $request)
    {
        $ampHeader = $this->buildAmpResponseHeader($request);

        try {

            $order = Order::where('id', $request->input('order_id'))->first();
            if ($order->password != md5($request->input('password'))) {
                return (new JsonResponse(
                    [
                        'message' => 'Wrong security key. Please try again.'
                    ],
                    Response::HTTP_BAD_REQUEST
                ))->withHeaders($ampHeader);
            } else {
                $quantityInputArray = [];
                foreach($request->except('_token') as $key => $input) {
                    if (str_contains($key, 'quantity')) {
                        array_push($quantityInputArray, [
                            'id' => str_replace('quantity', '', $key),
                            'quantity' => $input
                        ]);
                    }
                }
                $orderSyncArray = [];
                foreach ($quantityInputArray as $quantityInput) {
                    $fruit = Fruit::find((int) $quantityInput['id']);
                    $orderSyncArray[$fruit->id] = [
                        'quantity' => $quantityInput['quantity'],
                        'frequency' => 'Mon,Tue,Wed,Thu,Fri'
                    ];
                }
                $order->fruits()->sync($orderSyncArray);

            }

            return (new JsonResponse(
                [
                    'message' => 'Order updated.'
                ],
                Response::HTTP_OK
            ))->withHeaders($ampHeader);

        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return (new JsonResponse(
                [
                    'message' => 'Crappy code by Lucas. Contact him.'
                ],
                Response::HTTP_INTERNAL_SERVER_ERROR
            ))->withHeaders($ampHeader);
        }
    }

    private function buildAmpResponseHeader(Request $request)
    {
        return [
            'Access-Control-Allow-Origin' => $request->header('Origin'),
            'AMP-Access-Control-Allow-Source-Origin' => $request->get('__amp_source_origin'),
            'Access-Control-Expose-Headers' => 'AMP-Access-Control-Allow-Source-Origin'
        ];
    }
}
