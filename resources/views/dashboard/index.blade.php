@extends('layouts.dashboard')

@section('dashbord-content')
  <div id="tg-content" class="tg-content">
    <div class="tg-dashboard">
      <div class="tg-box tg-profile">
        <div class="tg-heading">
          <h3>My Profile</h3>
          <a class="tg-btnedit" href="{{ route('profile') }}">Edit Profile</a>
        </div>
        <div class="tg-dashboardcontent">
          <div class="tg-imgholder">
            <figure>
              <img src="/images/avatars/{{ Auth::user()->image ? Auth::user()->image : 'authorimg.jpg'}}" alt="image description" width="87px">
            </figure>
          </div>
          <div class="tg-content">
            <ul class="tg-liststyle">
              <li><span>Name</span></li>
              <li><span>{{ Auth::user()->name }}</span></li>
              <li><span>Email Address</span></li>
              <li><span>{{ Auth::user()->email }}</span></li>
              <li><span>Phone</span></li>
              <li><span>{{ Auth::user()->phone ? Auth::user()->phone : '---'}}</span></li>
              <li><span>Contact Address</span></li>
              <li><span>{{ Auth::user()->address ? Auth::user()->address : '---' }}</span></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
