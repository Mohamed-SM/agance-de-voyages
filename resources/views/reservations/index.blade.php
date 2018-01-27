@extends('layouts.dashboard')


@section('dashbord-content')
<div id="tg-content" class="tg-content">
    <div class="tg-dashboard">
        
        <div class="tg-box tg-mybooking">
            <div class="tg-heading">
                <h3>Mes Reservations</h3>
            </div>
            <div class="tg-dashboardcontent">
                <div class="tg-content">
                    <table class="table table-responsive">
                        <tr>
                            <th scope="col">Tour Name</th>
                            <th scope="col">Travel Date</th>
                            <th scope="col">Total</th>
                            <th scope="col">Status</th>
                            <th scope="col">Actions</th>
                        </tr>
                        <tbody>
                            @foreach ($reservations as $reservation)
                            <?php 
                                $start = \Carbon\Carbon::parse($reservation->trip->start_at); 
                            ?>
                            <tr>
                                <td data-title="tour name">{{ $reservation->trip->title }}</td>
                                <td data-title="tour date">{{ $start->format('d-m-Y') }}</td>
                                <td data-title="total"><strong>{{ $reservation->places * $reservation->trip->price }} DA</strong></td>
                                <td class="tg-status" data-title="status">
                                    @if ($reservation->status == 0)
                                        non payée
                                    @elseif ($reservation->status == 1)
                                        en cours de procceess
                                    @elseif ($reservation->status == 2)
                                        terminné
                                    @elseif ($reservation->status == 3)
                                        Suprimmer
                                    @endif
                                </td>
                                <td data-title="action"><a class="tg-btnview" href="my-booking-view.html">view</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
        
    </div>
</div>
@endsection
