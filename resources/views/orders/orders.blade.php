@extends('layouts.app')

@section('title', 'Orders')

@section('content')
    <div>
        <table>
            <tr>
                <th>ID</th>
                <th>User Id</th>
                <th>Loading place</th>
                <th>Unloading place</th>
                <th>Loading date</th>
                <th>Price</th>
                <th>Carrier</th>
                <th>Created At</th>
                <th>Updated At</th>
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
                    <td>{{ $order->created_at }}</td>
                    <td>{{ $order->updated_at }}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
