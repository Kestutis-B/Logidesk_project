<?php

namespace App\Http\Controllers;

use App\Models\Offers;
use App\Models\Orders;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OffersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, int $ordersId)
    {
        $offers = new Offers();
        $offers->user_id = Auth::user()->id;
        $offers->orders_id = $ordersId;
        $offers->loading_place = $request->loading_place;
        $offers->unloading_place = $request->unloading_place;
        $offers->loading_date = $request->loading_date;
        $offers->price = $request->price;
        $offers->carrier = $request->carrier;
        $offers->order_status = $request->order_status;

        $offers->save();

        return redirect()->intended(route('orders.show', $ordersId));
    }

    /**
     * Display the specified resource.
     */
    public function show(offers $offers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(offers $offers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id): RedirectResponse
    {

        $offers = Offers::findOrFail($id);
        $orders = Orders::findOrFail($offers->orders_id);
        $ordersId = $orders->id;

        $offers->price = $request->price;
        $offers->save();

        return redirect()->intended(route('orders.show' , $ordersId));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(offers $offers)
    {
        //
    }
}
