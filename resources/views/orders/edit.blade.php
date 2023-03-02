@extends('layouts.app')

@section('title', 'Order edit')

@section('content')
    <div class="bg-white" style="padding: 20px; border-radius: 5px">
        <form method="POST" action="{{ route('orders.update', $order->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="order_status">Order status</label>
                <input type="text" value="{{ $order->order_status }}" name="order_status" class="form-control">
            </div>
{{--            <button type="submit" class="btn btn-outline-primary">Update</button>--}}
        </form>
    </div>
@endsection
