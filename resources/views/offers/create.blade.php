<div class="bg-white" style="padding: 20px; border-radius: 5px">
    @if((auth()->user()->id == 3) || (auth()->user()->id == 4))
    <div class="card-header bg-transparent">Create New Offer</div>
    <form method="post" action="{{route('offers.store', $orders->id)}}">
        @csrf
        <div class="form-group">
{{--            <label for="loading_place">Loading place</label>--}}
            <input type="hidden" name="loading_place"  value="{{ $orders->loading_place }}" class="form-control">
        </div>
        <div class="form-group">
{{--            <label for="unloading_place">Unloading place</label>--}}
            <input type="hidden" value="{{ $orders->unloading_place }}" name="unloading_place" class="form-control">
        </div>
        <div class="form-group">
{{--            <label for="loading_date">Loading date</label>--}}
            <input type="hidden" value="{{ $orders->loading_date }}" name="loading_date" class="form-control">
        </div>
        <div class="form-group">
{{--            <label for="carrier">Carrier</label>--}}
            <input type="hidden" value="{{ $orders->carrier }}" name="carrier" class="form-control">
        </div>
        <div class="form-group">
{{--            <label for="order_status">Order status</label>--}}
            <input type="hidden" value="{{ $orders->order_status }}" name="order_status" class="form-control">
        </div>
        <div class="form-group">
            <label for="offer">Offer</label>
            <input name="price" value="{{ $orders->price }}" class="form-control" placeholder="offer your price here">
        </div>
        <div style="text-align: end">
            <button type="submit" class="btn btn-outline-primary">Offer</button>
        </div>
    </form>
    @endif
</div>
