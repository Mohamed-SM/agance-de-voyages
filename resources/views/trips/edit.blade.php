@extends('layouts.admindashboard')

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
                    <h3>Ajouté un voyage</h3>
                </div>
                <div class="tg-dashboardcontent">
                    <div class="tg-content">
                        {{ Form::model($trip,array('route' => ['trips.update',$trip->id],'method' => 'PUT' , 'files' => true)) }}
                        <fieldset>
                            <div class="form-group">
                                {{ Form::label('title', 'Title') }}
                                {{ Form::text('title', null, array('class' => 'form-control')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('price', 'Prix') }}
                                {{ Form::number('price', null, array('class' => 'form-control' ,'step'=>'0.01' ,'min'=>'0')) }}
                            </div>    
                        
                            <div class="form-group">
                                {{ Form::label('places', 'Nombre des places') }}
                                {{ Form::number('places', null, array('class' => 'form-control', 'step'=>'1','min'=>'0')) }}
                            </div>

                            <?php 
                                $start = \Carbon\Carbon::parse($trip->start_at);
                                $end = \Carbon\Carbon::parse($trip->end_at); 
                            ?>

                            <div class="form-group">
                                {{ Form::label('start_at', 'date debut') }}
                                {{ Form::date('start_at', $start, array('class' => 'form-control')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('end_at', 'date fin') }}
                                {{ Form::date('end_at', $end, array('class' => 'form-control')) }}
                            </div>

                            <div class="form-group">
                                <img src="/images/tours/{{ $trip->image ? $trip->image : 'trip.default.png'}}" id="output" alt="Change Profile Picture" width="100%">
                            </div>

                            
                            <a class="tg-btn" onclick="event.preventDefault();loadfile();">Change Profile Picture</a>
                            <br>
                            
                            <div class="form-group">
                                <br>
                                {{ Form::label('description', 'Post Body') }}
                                {{ Form::textarea('description', null, array('class' => 'form-control')) }}
                            </div>

                            {{ Form::file('image', array('id'=>'file', 'class' => 'file', 'accept'=>'image/*','style'=>'display: none' , 'onchange'=>'loadFile(event)')) }}
                            <button class="tg-btn"><span>Enregistrer</span></button>
                        </fieldset>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function loadfile(){
            jQuery('#file').click();
        }
        var loadFile = function(event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
        };

    </script>
@endsection
