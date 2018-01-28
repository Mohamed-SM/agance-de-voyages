@extends('layouts.admindashboard')

@section('dashbord-content')
<div id="tg-content" class="tg-content">
        <div class="tg-dashboard">
          <div class="tg-box tg-profile">
            <div class="tg-heading">
              <h3>les Roles</h3>
              <a class="tg-btnedit" href="{{ route('roles.create') }}">Ajouté Role</a>
            </div>
            <div class="tg-dashboardcontent">
                <div class="">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Role</th>
                                <th>Permissions</th>
                                <th>Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $role)                            <tr>
                                <td>{{ $role->name }}</td> 
                                <td>{{ str_replace(array('[',']','"'),'', $role->permissions()->pluck('name')) }}</td>{{-- Retrieve array of permissions associated to a role and convert to string --}}
                                <td>
                                <a href="{{ URL::to('admin/roles/'.$role->id.'/edit') }}" class="btn btn-info pull-left">Edit</a>
            
                                {!! Form::open(['method' => 'DELETE', 'route' => ['roles.destroy', $role->id] ]) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                {!! Form::close() !!}
            
                                </td>
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
