@extends('layouts.app')

@section('title', 'Order - ' . $orders->loading_place . $orders->unloading_place)

@section('content')
<div class="bg-white" style="padding: 20px; border-radius: 5px">
    <form method="POST" action="{{ route('orders.update', $orders->id) }}">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="loading_place">Loading place</label>
            <input type="text" name="loading_place"  value="{{ $orders->loading_place }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="unloading_place">Unloading place</label>
            <input type="text" value="{{ $orders->unloading_place }}" name="unloading_place" class="form-control">
        </div>
        <div class="form-group">
            <label for="loading_date">Loading date</label>
            <input type="date" value="{{ $orders->loading_date }}" name="loading_date" class="form-control">
        </div>
        <div class="form-group">
            <label for="price">Price in $</label>
            <input type="number" value="{{ $orders->price }}" name="price" class="form-control">
        </div>
        <div class="form-group">
            <label for="carrier">Carrier</label>
            <input type="text" value="{{ $orders->carrier }}" name="carrier" class="form-control">
        </div>
        <div class="form-group">
            <label for="order_status">Order status</label>
            <input type="text" value="{{ $orders->order_status }}" name="order_status" class="form-control">
        </div>
        <button type="submit" class="btn btn-outline-primary">Update</button>
    </form>
</div>
@endsection
