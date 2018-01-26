@extends('layouts.app')

@section('banner')
<section class="tg-parallax tg-innerbanner" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/parallax/bgparallax-06.jpg">
  <div class="tg-sectionspace tg-haslayout">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <h1>Dashboard</h1>
          <h2>Ici Vous pouvez suiver vos reservations et modifer votre profile</h2>
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
        <form class="tg-formtheme tg-formdashboard">
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <aside id="tg-sidebar" class="tg-sidebar">
              <div class="tg-widget tg-widgetdashboard">
                <div class="tg-widgettitle">
                  <h3>Mon Compte</h3>
                </div>
                <div class="tg-widgetcontent">
                  <ul>
                    <li class="selected"><a href="dashboard.html"><i class="icon-user"></i><span>Dashboard</span></a></li>
                    <li><a href="my-profile.html"><i class="icon-pen2"></i><span>Modifer Profile</span></a></li>
                    <li><a href="change-password.html"><i class="icon-lock-open3"></i><span>Changer Mot de pass</span></a></li>
                    <li><a href="my-booking.html"><i class="icon-basket3"></i><span>Mes reservations</span></a></li>
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="icon-lock"></i><span>Logout</span></a></li>
                  </ul>
                </div>
              </div>
            </aside>
          </div>
          <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
            <div id="tg-content" class="tg-content">
              <div class="tg-dashboard">
                <div class="tg-box tg-profile">
                  <div class="tg-heading">
                    <h3>My Profile</h3>
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
          </div>
        </form>
      </div>
    </div>
  </div>
</main>
@endsection
