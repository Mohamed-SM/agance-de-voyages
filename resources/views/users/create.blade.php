@extends('layouts.admindashbord')

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
                    <h3>Ajouté une utilisateur</h3>
                </div>
                <div class="tg-dashboardcontent">
                    <div class="tg-content">
                        {{ Form::open(array('route' => 'users.index')) }}
                        <fieldset>
                            <div class="form-group">
                                {{ Form::label('name', 'Name') }}
                                {{ Form::text('name', '', array('class' => 'form-control')) }}
                            </div>
                            <div class="form-group">
                                    {{ Form::label('email', 'Email') }}
                                    {{ Form::email('email', '', array('class' => 'form-control')) }}
                                </div>
                            
                                <div class='form-group'>
                                    @foreach ($roles as $role)
                                        {{ Form::checkbox('roles[]',  $role->id ) }}
                                        {{ Form::label($role->name, ucfirst($role->name)) }}<br>
                            
                                    @endforeach
                                </div>
                            
                                <div class="form-group">
                                    {{ Form::label('password', 'Password') }}<br>
                                    {{ Form::password('password', array('class' => 'form-control')) }}
                            
                                </div>
                            
                                <div class="form-group">
                                    {{ Form::label('password', 'Confirm Password') }}<br>
                                    {{ Form::password('password_confirmation', array('class' => 'form-control')) }}
                            
                                </div>
                            
                            <button class="tg-btn"><span>ajouté</span></button>
                        </fieldset>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
