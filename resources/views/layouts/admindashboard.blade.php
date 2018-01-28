@extends('layouts.app')

@section('main')
  <main id="tg-main" class="tg-main tg-sectionspace tg-haslayout">
    <div class="container">
      <div class="row">
        <div id="tg-twocolumns" class="tg-twocolumns">
          <div class="tg-formtheme tg-formdashboard">
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
              <aside id="tg-sidebar" class="tg-sidebar">
                <div class="tg-widget tg-widgetdashboard">
                  <div class="tg-widgettitle">
                    <h3>Admin</h3>
                  </div>
                  <div class="tg-widgetcontent">
                    <ul>
                      <li class="selected"><a href="{{ route('admindashboard') }}"><i class="icon-shop"></i><span>Dashboard</span></a></li>
                      <li><a href="{{ route('users.index') }}"><i class="icon-profile-male"></i><span>Utilisateurs</span></a></li>
                      <li><a href="{{ route('trips.index') }}"><i class=" icon-global"></i><span>Voyages</span></a></li>
                      <li><a href="{{ route('reservations.index') }}"><i class="icon-pricetags"></i><span>Reservations</span></a></li>
                      <li><a href=""><i class="icon-icons102"></i><span>Payements</span></a></li>
                      <li><a href=""><i class="icon-gears"></i><span>Paramaitre</span></a></li>
                      <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="icon-lock"></i><span>Logout</span></a></li>
                    </ul>
                  </div>
                </div>
              </aside>
            </div>
            <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
              @yield('dashbord-content')
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection
