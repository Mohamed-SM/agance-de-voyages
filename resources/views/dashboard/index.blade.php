@extends('layouts.dashboard')

@section('dashbord-content')
  <div id="tg-content" class="tg-content">
    <div class="tg-dashboard">
      <div class="tg-box tg-profile">
        <div class="tg-heading">
          <h3>My Profile</h3>
          {{ session('flash_message') }}
          <a class="tg-btnedit" href="my-profile.html">Edit Profile</a>
        </div>
        <div class="tg-dashboardcontent">
          <figure><img src="images/authorimg.jpg" alt="image description"></figure>
          <div class="tg-content">
            <ul class="tg-liststyle">
              <li><span>Name</span></li>
              <li><span>John Smith</span></li>
              <li><span>Email Address</span></li>
              <li><span>John@gmail.com</span></li>
              <li><span>Phone</span></li>
              <li><span>1-800-321-6549</span></li>
              <li><span>Contact Address</span></li>
              <li><span>Manhattan Hall, Advisor Ltd 1258, Melbourne</span></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
