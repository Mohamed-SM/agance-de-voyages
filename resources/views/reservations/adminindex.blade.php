@extends('layouts.admindashboard')


@section('dashbord-content')
<div id="tg-content" class="tg-content">
    <div class="tg-dashboard">  
        <div class="tg-box tg-mybooking">
            <div class="tg-heading">
                <h3>resumée des voyages <small>Page {{ $reservations->currentPage() }} sur {{ $reservations->lastPage() }}</small></h3>
            </div>
            <div class="tg-dashboardcontent">
                <div class="tg-content">
                    <table class="table table-responsive">
                        <tr>
                            <th scope="col">Voyage</th>
                            <th scope="col">Date</th>
                            <th scope="col">Utilisatur</th>
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
                                <td data-title="trip">{{ $reservation->trip->title }}</td>
                                <td data-title="date">{{ $start->format('d-m-Y') }}</td>
                                <td data-title="user"><a href="{{ route('users.show',$reservation->user->id) }}">{{ $reservation->user->name }}</a></td>
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
                                <td data-title="action">
                                    <a class="tg-btnview" href="{{ route('reservations.show',$reservation->id) }}">Voir</a>
                                    @if ($reservation->status == 0)
                                    {!! Form::open(['method' => 'DELETE', 'route' => ['reservations.destroy', $reservation->id],'id' => 'delete-form'.$reservation->id ]) !!}
                                    <a class="tg-btnview" href="{{ route('admin.reservations.edit',$reservation->id) }}">Modifer</a>
                                    <a class="tg-btnview" href="reservation/delete" onclick="event.preventDefault(); document.getElementById('delete-form{{ $reservation->id  }}').submit();">Anuler</a>
                                    {!! Form::close() !!}
                                    @endif
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
        {!! $reservations->links('layouts.links') !!}
    </div>   
</div>
@endsection
