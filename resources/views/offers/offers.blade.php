<div>
    <div><h2>Offers</h2></div>
    @foreach($offers as $offer)
        <div class="card-body bg-white m-2">
            <div>Offer made by company: {{ $offer->user->companyname }}</div>
            <div>
                <h6 class="card-title">Price in $</h6>
                <p class="card-text" id="offersPrice-{{ $offer->price }}">{{ $offer->price }}</p>
            </div>
            <div style="text-align: end">
                <span>Offer made at: {{ $offer->created_at }}</span>
            </div>
        </div>
    @endforeach
</div>
