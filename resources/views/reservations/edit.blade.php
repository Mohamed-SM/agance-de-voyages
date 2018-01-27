@extends('layouts.dashboard')

@section('style')
    <style>
        .tg-dashboardcontent .form-group {
            width: 100%;
        }
        label {
            display: inline-block;
        }
    </style>
@endsection

@section('dashbord-content')
    <div id="tg-content" class="tg-content">
        <div class="tg-dashboard">
            <div class="tg-box tg-ediprofile">
                <div class="tg-heading">
                    <h3>Modifer reservation #{{ $reservation->id }} {{$reservation->trip->title}}</h3>
                </div>
                <div class="tg-dashboardcontent">
                    <div class="tg-content">
                        {{ Form::model($reservation, array('route' => array('reservations.update', $reservation->id), 'method' => 'PUT')) }}{{-- Form model binding to automatically populate our fields with permission data --}}
                        <fieldset>
                            <div class="form-group">
                                <p><strong>prix par personne : </strong>{{ $reservation->trip->price }} DA</p>
                                <p><strong>prix totle : </strong><span id='total' >{{ $reservation->places * $reservation->trip->price }}</span> DA</p>
                            </div>
                            <div class="form-group">
                                {{ Form::label('places', 'Name') }}
                                {{ Form::number('places', null, array('class' => 'form-control' ,'min' => '1' , 'max' => $reservation->places_rest , 'required' => 'required' ,'onchange' => 'calculer(this)')) }}
                            </div>
                            <script>
                                function calculer(e){
                                    $('#total').text(e.value * {{ $reservation->trip->price }});
                                }
                            </script>
                            <div class="form-group"></div>
                            <button class="tg-btn"><span>Engregistre</span></button>
                        </fieldset>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
