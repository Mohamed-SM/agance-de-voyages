@extends('layouts.app')

@section('banner')
  <section class="tg-parallax tg-innerbanner" data-appear-top-offset="600" data-parallax="scroll" data-image-src="{{ asset('images/parallax/bgparallax-06.jpg')}}">
    <div class="tg-sectionspace tg-haslayout">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <h1>Dashboard</h1>
            <h2>Ici Vous pouvez administrer les voyages et les reservation</h2>
            <ol class="tg-breadcrumb">
              <li><a href="javascript:void(0);">Home</a></li>
              <li class="tg-active">Dashboard</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

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
                    <h3>Mon Compt</h3>
                  </div>
                  <div class="tg-widgetcontent">
                    <ul>
                      <li class="selected"><a href="dashboard.html"><i class="icon-user"></i><span>Dashboard</span></a></li>
                      <li><a href="my-profile.html"><i class="icon-pen2"></i><span>Modifer Profile</span></a></li>
                      <li><a href="change-password.html"><i class="icon-lock-open3"></i><span>Changer Mot de pass</span></a></li>
                      <li><a href="{{ route('reservations') }}"><i class="icon-basket3"></i><span>Mes reservations</span></a></li>
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
