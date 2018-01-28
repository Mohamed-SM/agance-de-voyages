@extends('layouts.admindashboard')


@section('dashbord-content')
<div id="tg-content" class="tg-content">
    <div class="tg-dashboard">  
        <div class="tg-box tg-mybooking">
            <div class="tg-heading">
                <h3>resumée des voyages <small>Page {{ $trips->currentPage() }} sur {{ $trips->lastPage() }}</small></h3>
            </div>
            <div class="tg-dashboardcontent">
                <div class="tg-content">
                    <table class="table table-responsive">
                        <tr>
                            <th scope="col">Nom de voyage</th>
                            <th scope="col">Joure de depart</th>
                            <th scope="col">N° reservations</th>
                            <th scope="col">Prix</th>
                            <th scope="col">Actions</th>
                        </tr>
                        <tbody>
                            @foreach ($trips as $trip)
                            <?php 
                                $start = \Carbon\Carbon::parse($trip->start_at); 
                            ?>
                            <tr>
                                <td data-title="tour name"><a href="{{ route('trips.show',$trip->id) }}">{{ $trip->title }}</a></td>
                                <td data-title="tour date">{{ $start->format('d-m-Y') }}</td>
                                <td data-title="total"><strong>{{ $trip->places_taken .'/'. $trip->places }}</strong></td>
                                <td class="tg-status" data-title="status">{{ $trip->price }}</td>
                                <td data-title="action">
                                    <a class="tg-btnview" href="{{ route('trips.edit',$trip->id) }}">Modifer</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div> 
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="tg-listing tg-listingvone">
        {!! $trips->links('layouts.links') !!}
    </div>   
</div>
@endsection
