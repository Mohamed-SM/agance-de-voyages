@extends('layouts.admindashbord')

@section('dashbord-content')
<div id="tg-content" class="tg-content">
        <div class="tg-dashboard">
          <div class="tg-box tg-profile">
            <div class="tg-heading">
              <h3>Gestion des utilisateurs</h3>
              <a class="tg-btnedit" href="{{ route('users.create') }}">Ajouté Utilisateur</a>
            </div>
            <div class="tg-dashboardcontent">
                <div class="">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Date/Time Added</th>
                                <th>User Roles</th>
                                <th>Operations</th>
                            </tr>
                        </thead>
                        <tbody>
                                @foreach ($users as $user)
                                <tr>
                
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->created_at->format('F d, Y h:ia') }}</td>
                                    <td>{{  $user->roles()->pluck('name')->implode(' ') }}</td>{{-- Retrieve array of roles associated to a user and convert to string --}}
                                    <td>
                                    {!! Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $user->id] ]) !!}
                                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-info pull-left" style="margin-right: 3px;">Edit</a>
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
