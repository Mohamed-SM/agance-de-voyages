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
                    <h3>Ajouté une permission</h3>
                </div>
                <div class="tg-dashboardcontent">
                    <div class="tg-content">
                        {{ Form::open(array('route' => 'roles.index')) }}
                        <fieldset>
                            <div class="form-group">
                                {{ Form::label('name', 'Name') }}
                                {{ Form::text('name', '', array('class' => 'form-control')) }}
                            </div>
                            
                            <h5><b style="padding: 10px;">Assign Permissions</b></h5>

                            <div class='form-group'>
                                @foreach ($permissions as $permission)
                                    {{ Form::checkbox('permissions[]',  $permission->id ) }}
                                    {{ Form::label($permission->name, ucfirst($permission->name)) }}<br>

                                @endforeach
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
