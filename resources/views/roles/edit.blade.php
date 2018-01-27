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
                    <h3>Modifer {{$role->name}}</h3>
                </div>
                <div class="tg-dashboardcontent">
                    <div class="tg-content">
                        {{ Form::model($role, array('route' => array('roles.update', $role->id), 'method' => 'PUT')) }}{{-- Form model binding to automatically populate our fields with permission data --}}
                        <fieldset>
                            <div class="form-group">
                                {{ Form::label('name', 'Name') }}
                                {{ Form::text('name', null, array('class' => 'form-control')) }}
                            </div>
                            <h5><b style="padding: 10px;">Assign Permissions</b></h5>

                            <div class='form-group'>
                                @foreach ($permissions as $permission)
                                    {{ Form::checkbox('permissions[]',  $permission->id, $role->permissions ) }}
                                    {{ Form::label($permission->name, ucfirst($permission->name)) }}<br>

                                @endforeach
                            </div>
                            <button class="tg-btn"><span>Engregistre</span></button>
                        </fieldset>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
