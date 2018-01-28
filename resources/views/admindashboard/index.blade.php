@extends('layouts.admindashboard')

@section('dashbord-content')
  <div id="tg-content" class="tg-content">
    <div class="tg-dashboard">
      <div class="tg-box tg-profile">
        <div class="tg-heading">
          <h3>Resumée</h3>
          <a class="tg-btnedit" href="my-profile.html">Edit Profile</a>
        </div>
        <div class="tg-dashboardcontent">
          <div class="tg-content">
            <ul class="tg-liststyle">
              <li><span>Nombre Des Utilisateurs</span></li>
              <li><span>{{ $data['users'] }}</span></li>
              <li><span>Nombre Des Voyages</span></li>
              <li><span>{{ $data['trips'] }}</span></li>
              <li><span>Nombre Des Reservation</span></li>
              <li><span>{{ $data['reservations'] }} </span></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
