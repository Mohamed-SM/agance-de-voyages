<figure>
    <a href="/trips/{{ $trip->id }}"><img src="/images/tours/{{ $trip->image ? $trip->image : 'trip.default.png'}}" alt="image destinations"></a>
    <span class="tg-descount">{{ $trip->places }} place</span>
</figure>
<div class="tg-populartourcontent">
    <div class="tg-populartourtitle">
        <h3><a href="/trips/{{ $trip->id }}">{{ $trip->title }}</a></h3>
    </div>
    <div class="tg-description">
        <p>{{  str_limit($trip->description, 100) }}</p>
    </div>
    <div class="tg-populartourfoot">
        <div class="tg-durationrating">
            <?php 
                $start = \Carbon\Carbon::parse($trip->start_at);
                $end = \Carbon\Carbon::parse($trip->end_at); 
            ?>
            <span class="tg-tourduration">{{ $start->diffInDays($end) }}</span>
            <span class="tg-tourduration tg-availabilty">depart {{ $start->format('d-M-Y') }}</span>
        </div>
        <div class="tg-pricearea">
            <h4>{{ $trip->price }} DA</h4>
        </div>
    </div>
</div>