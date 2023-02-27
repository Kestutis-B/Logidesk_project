@extends('layouts.app')

@section('title', 'Create Order')

@section('content')
    <div class="bg-white" style="">
        <form action={{ route('orders.store') }} method="post">
            @csrf
            <div class="form-group">
                <label for="loading_place">Loading place</label>
                <input name="loading_place" type="text" class="form-control" id="questionTitle" aria-describedby="Email address">
            </div>
            <div class="form-group">
                <label for="unloading_place">Unloading place</label>
                <input name="unloading_place" class="form-control">
            </div>
            <div class="form-group">
                <label for="loading_date">Loading date</label>
                <input type="date" name="loading_date" class="form-control">
            </div>
            <div class="form-group">
                <label for="price">Price in $</label>
                <input name="price" class="form-control">
            </div>
            <div class="form-group">
                <label for="carrier">Carrier</label>
                <input name="carrier" class="form-control" >
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
