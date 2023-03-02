@extends('layouts.app')

@section('title', 'Orders')

@section('content')
    <div class="d-flex justify-content-end">
        <a href="{{ url('/orders/create') }}" class="btn btn-outline-primary">Create Order</a>
    </div>
    <div>
        <table>
            <tr>
                <th>ID</th>
                <th>Order made by</th>
                <th>Loading place</th>
                <th>Unloading place</th>
                <th>Loading date</th>
                <th>Price, $</th>
                <th>Carrier</th>
                <th>Order status</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Actions</th>
            </tr>
            @foreach($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->user_id }}</td>
                    <td>{{ $order->loading_place }}</td>
                    <td>{{ $order->unloading_place }}</td>
                    <td>{{ $order->loading_date }}</td>
                    <td>{{ $order->price }}</td>
                    <td>{{ $order->carrier }}</td>
                    <td>{{ $order->order_status }}</td>
                    <td>{{ $order->created_at }}</td>
                    <td>{{ $order->updated_at }}</td>
                    <td>
                        <div class="d-flex">
                            <form method="GET" action="/orders/{{ $order->id }}/">
                                @csrf
                                @method('GET')
                                <button class="btn btn-outline-primary">Info</button>
                            </form>
                            <form method="post" action="{{ route('orders.destroy', $order->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
