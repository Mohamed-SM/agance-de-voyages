@extends('layouts.dashboard')


@section('dashbord-content')
    <div id="tg-content" class="tg-content">
        <div class="tg-dashboard">
            <div class="tg-fulltourdetail">
                <div class="tg-box tg-tourname">
                    <div class="tg-heading">
                        <h3>Reservation #{{ $reservation->id }} - {{ $reservation->trip->title }}</h3>
                    </div>
                    <div class="tg-dashboardcontent">
                        <h3>Information de reservation </h3>
                        <hr>
                        <div class="tg-content">
                            <ul class="tg-liststyle">
                                <li><span>Numero D'Ordre:</span></li>
                                <li><span>#{{ $reservation->id }}</span></li>
                                <li><span>Date de Reservation</span></li>
                                <li><span>{{ $reservation->created_at }}</span></li>
                                <li><span>Titre</span></li>
                                <li><span>{{ $reservation->trip->title }}</span></li>
                                <li><span>Date De depart</span></li>
                                <li><span>{{ $reservation->trip->start_at }}</span></li>
                                <li><span>Status de Reservation</span></li>
                                <li>
                                    <span>
                                        @if ($reservation->status == 0)
                                            non payée
                                            <p class="danger">cette reservation serait suppremier automatiquement avans 7 jours de jour de depart si vous ne confirme pas la reservation avec payment</p>
                                        @elseif ($reservation->status == 1)
                                            en cours de procceess
                                        @elseif ($reservation->status == 2)
                                            terminné
                                        @elseif ($reservation->status == 3)
                                            Suprimmer
                                        @endif
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tg-box tg-contactdetail">
                    <div class="tg-dashboardcontent">
                        <h3>information de Contact </h3>
                        <hr>
                        <div class="tg-content">
                            <ul class="tg-liststyle">
                                <li><span>Nom</span></li>
                                <li><span>{{ $reservation->user->name }}</span></li>
                                <li><span>Email Address</span></li>
                                <li><span>{{ $reservation->user->email }}</span></li>
                                <li><span>Phone Number</span></li>
                                <li><span>1-800-321-6549</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="tg-box tg-travellerprice">
                    <div class="tg-dashboardcontent">
                        <div class="tg-widgetpersonprice">
                            <div class="tg-widgetcontent">
                                <ul>
                                    <li class="tg-personprice"><div class="tg-perperson"><span>Prix / Personne <i> {{ $reservation->places }} x {{ $reservation->trip->price }} Da</i></span><em>{{ $reservation->places * $reservation->trip->price }} DA</em></div></li>
                                    <li><span>Sous Total</span><em>{{ $reservation->places * $reservation->trip->price }} DA</em></li>
                                    <li><span>Tax</span><em>00 DA</em></li>
                                    <li><span>TVA</span><em>00 DA</em></li>
                                    <li class="tg-totalprice"><div class="tg-totalpayment"><span>Prix Total</span><em>{{ $reservation->places * $reservation->trip->price }} DA</em></div></li>
                                </ul>
                            </div>
                        </div>
                        
                    </div>
                </div>
                @if ($reservation->status == 0)
                <div class="pull-right">
                    <br>
                    <button type="submit" class="tg-btn"><span>Passer au payment</span></button>
                    <button type="submit" class="tg-btn"><span>anuler la reservations</span></button>
                </div>
                @endif
            </div>
        </div>
    </div>
@endsection
