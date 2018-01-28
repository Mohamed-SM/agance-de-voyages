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
                    <h3>Modifer {{Auth::user()->name}}</h3>
                </div>
                <div class="tg-dashboardcontent">
                    <div class="tg-imgholder">
                        <figure>
                            <img src="/images/avatars/{{ Auth::user()->image ? Auth::user()->image : 'authorimg.jpg'}}" id="output" alt="image description" width="100%">
                        </figure>
                        <a class="tg-btn" href="#" onclick="event.preventDefault();loadfile();">Change Profile Picture</a>
                    </div>
                    <div class="tg-content">
                    {{ Form::model(Auth::user(), array('route' =>'profile.update', 'method' => 'PUT' ,'files' => true)) }}{{-- Form model binding to automatically populate our fields with user data --}}
                        <fieldset>
                            <div class="form-group">
                                {{ Form::label('name', 'Name') }}
                                {{ Form::text('name', null, array('class' => 'form-control')) }}
                            </div>
                            <div class="form-group">
                                {{ Form::label('email', 'Email') }}
                                {{ Form::email('email', null, array('class' => 'form-control')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('phone', 'Telephone') }}
                                {{ Form::text('phone', null, array('class' => 'form-control')) }}
                            </div>

                            <div class="form-group">
                                {{ Form::label('address', 'Address') }}
                                {{ Form::textarea('address', null, array('class' => 'form-control')) }}
                            </div>
                            
                            <p></p>
                            <h5><b style="padding: 10px;">Changer Mot De pass</b></h5>
                            <p style="padding: 10px;">lesser les chaps vide pour ne pas modifer le mot de pass </p>
                        
                            <div class="form-group">
                                {{ Form::label('password', 'Password') }}<br>
                                {{ Form::password('password', array('class' => 'form-control')) }}
                        
                            </div>
                        
                            <div class="form-group">
                                {{ Form::label('password', 'Confirm Password') }}<br>
                                {{ Form::password('password_confirmation', array('class' => 'form-control')) }}
                        
                            </div>

                            {{ Form::file('image', array('id'=>'file', 'class' => 'file', 'accept'=>'image/*','style'=>'display: none' , 'onchange'=>'loadFile(event)')) }}
                            
                            <button class="tg-btn"><span>Engregistre</span></button>
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
