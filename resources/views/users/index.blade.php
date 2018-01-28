@extends('layouts.admindashboard')

@section('dashbord-content')
<div id="tg-content" class="tg-content">
        <div class="tg-dashboard">
          <div class="tg-box tg-profile">
            <div class="tg-heading">
              <h3>Gestion des utilisateurs</h3>
              <a class="tg-btnedit" href="{{ route('users.create') }}">Ajouté Utilisateur</a>
            </div>
            <div class="tg-dashboardcontent">
                <div class="tg-content">
                    <table class="table table-responsive">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Date/Time Added</th>
                                <th scope="col">User Roles</th>
                                <th scope="col">Operations</th>
                            </tr>
                        </thead>
                        <tbody>
                                @foreach ($users as $user)
                                <tr>
                
                                    <td data-title="name"><a href="{{ route('users.show', $user->id) }}">{{ $user->name }}</a></td>
                                    <td data-title="email"><a href="{{ route('users.show', $user->id) }}">{{ $user->email }}</a></td>
                                    <td data-title="date">{{ $user->created_at->format('F d, Y h:ia') }}</td>
                                    <td data-title="roles">{{  $user->roles()->pluck('name')->implode(' ') }}</td>{{-- Retrieve array of roles associated to a user and convert to string --}}
                                    <td data-title="action">
                                        <a class="tg-btnview" href="{{ route('users.edit', $user->id) }}">Edit</a>
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
