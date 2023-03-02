<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('orders.orders', ['orders' => Orders::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('orders/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $orders = new Orders();
        $orders->user_id = Auth::user()->id;
        $orders->loading_place = $request->loading_place;
        $orders->unloading_place = $request->unloading_place;
        $orders->loading_date = $request->loading_date;
        $orders->price = $request->price;
        $orders->carrier = $request->carrier;
        $orders->order_status = $request->order_status;

        $orders->save();

        return redirect()->intended('/orders');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id): View
    {

        $orders = Orders::findorfail($id);

        $customerName = DB::table('users')
        ->where('id', $orders->user_id)
        ->value('name');

        return view('orders.show',[
            'orders' => $orders,
            //pratesti
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $orders = Orders::findOrFail($id);

        return view('orders.edit', [
            'order' => Orders::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $orders = Orders::findOrFail($id);

//        if ($orders->user_id != Auth::user()->id) {
//            return abort(404);
//        }
//        dd($request->toArray());
//        $order->loading_place = $request->loading_place;
//        $order->unloading_place = $request->unloading_place;
//        $order->loading_date = $request->loading_date;
//        $order->price = $request->price;
//        $order->carrier = $request->carrier;
        $orders->order_status = $request->order_status;
        $orders->save();


        return redirect()->intended('/orders/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Orders::destroy($id);

        return redirect()->intended('/orders');
    }
}
