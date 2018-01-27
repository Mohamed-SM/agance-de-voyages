@extends('layouts.app')

@section('banner')
<div class="tg-bannerholder">
  <div class="tg-slidercontent">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <h1>Agance de Voyages</h1>
          <h2>chercher dans las list des voyages</h2>
          <a class="tg-btn" href="{{route('trips')}}"><span>Consulter</span></a>
        </div>
      </div>
    </div>
  </div>
  <div id="tg-homeslider" class="tg-homeslider owl-carousel tg-haslayout">
    <figure class="item" data-vide-bg="poster: images/slider/img-01.jpg" data-vide-options="position: 0% 50%"></figure>
    <figure class="item" data-vide-bg="poster: images/slider/img-02.jpg" data-vide-options="position: 0% 50%"></figure>
    <figure class="item" data-vide-bg="poster: images/slider/img-03.jpg" data-vide-options="position: 0% 50%"></figure>
  </div>
</div>
@endsection

@section('main')
<main id="tg-main" class="tg-main tg-haslayout">
  <!--************************************
      Advantures Start
  *************************************-->
  <section class="tg-sectionspace tg-haslayout">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="tg-toursdestinations">
            <div class="tg-tourdestination tg-tourdestinationbigbox">
              <figure>
                <a href="{{route('trips')}}">
                  <img src="images/destination/img-01.jpg" alt="image destinations">
                  <div class="tg-hoverbox">
                    <div class="tg-adventuretitle">
                      <h2>Ice Adventure Vacations</h2>
                    </div>
                    <div class="tg-description">
                      <p>your best vacation ever</p>
                    </div>
                  </div>
                </a>
              </figure>
            </div>
            <div class="tg-tourdestination">
              <figure>
                <a href="{{route('trips')}}">
                  <img src="images/destination/img-02.jpg" alt="image destinations">
                  <div class="tg-hoverbox">
                    <div class="tg-adventuretitle">
                      <h2>National Park</h2>
                    </div>
                  </div>
                </a>
              </figure>
            </div>
            <div class="tg-tourdestination">
              <figure>
                <a href="{{route('trips')}}">
                  <img src="images/destination/img-03.jpg" alt="image destinations">
                  <div class="tg-hoverbox">
                    <div class="tg-adventuretitle">
                      <h2>Adult Vacations</h2>
                    </div>
                  </div>
                </a>
              </figure>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--************************************
      Advantures End
  *************************************-->
  <!--************************************
      Features Start
  *************************************-->
  <section class="tg-sectionspace tg-zerotoppadding tg-haslayout">
    <div class="container">
      <div class="row">
        <div class="tg-features">
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <div class="tg-feature">
              <div class="tg-featuretitle">
                <h2><span>01</span>Luxury Hotels</h2>
              </div>
              <div class="tg-description">
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum soluta nobis consectetuer nihil imperdiet doming...</p>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <div class="tg-feature">
              <div class="tg-featuretitle">
                <h2><span>02</span>Tourist Guide</h2>
              </div>
              <div class="tg-description">
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum soluta nobis consectetuer nihil imperdiet doming...</p>
              </div>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            <div class="tg-feature">
              <div class="tg-featuretitle">
                <h2><span>03</span>Flights Tickets</h2>
              </div>
              <div class="tg-description">
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh tempor cum soluta nobis consectetuer nihil imperdiet doming...</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--************************************
      Features End
  *************************************-->
  <!--************************************
      Popular Tour Start
  *************************************-->
  <section class="tg-parallax" data-appear-top-offset="600" data-parallax="scroll" data-image-src="images/parallax/bgparallax-01.jpg">
    <div class="tg-sectionspace tg-haslayout">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <div class="tg-sectiontitle tg-sectiontitleleft">
              <h2>Popular Tours</h2>
              <a class="tg-btnvtwo" href="{{ route('trips') }}">Tout les voyages</a>
            </div>
            <div id="tg-populartoursslider" class="tg-populartoursslider tg-populartours owl-carousel">
              @foreach ($menuTrips as $trip)
              <div class="item tg-populartour">
                  @include('trips.item',$trip)
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--************************************
      Popular Tour End
  *************************************-->
  <!--************************************
      Our Destination Start
  *************************************-->
  <section class="tg-sectionspace tg-haslayout">
    <div class="container">
      <div class="row">
        <div class="tg-ourdestination">
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 tg-verticalmiddle">
            <figure><img src="images/placeholder/placeholder-01.png" alt="image destinations"></figure>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 tg-verticalmiddle">
            <div class="tg-ourdestinationcontent">
              <div class="tg-sectiontitle tg-sectiontitleleft">
                <h2>Popular Tours</h2>
              </div>
              <div class="tg-description"><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam consectetuer adipiscing elit, sed diam nonummy nibh...</p></div>
              <ul class="tg-destinations">
                <li>
                  <a href="{{route('trips')}}">
                    <h3>Europe</h3>
                    <em>(05)</em>
                  </a>
                </li>
                <li>
                  <a href="{{route('trips')}}">
                    <h3>Africa</h3>
                    <em>(15)</em>
                  </a>
                </li>
                <li>
                  <a href="{{route('trips')}}">
                    <h3>Asia</h3>
                    <em>(12)</em>
                  </a>
                </li>
                <li>
                  <a href="{{route('trips')}}">
                    <h3>Oceania</h3>
                    <em>(02)</em>
                  </a>
                </li>
                <li>
                  <a href="{{route('trips')}}">
                    <h3>North America</h3>
                    <em>(08)</em>
                  </a>
                </li>
                <li>
                  <a href="{{route('trips')}}">
                    <h3>South America</h3>
                    <em>(27)</em>
                  </a>
                </li>
              </ul>
              <a class="tg-btn" href="{{route('trips')}}"><span>all destinations</span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--************************************
      Our Destination End
  *************************************-->
  <!--************************************
      Destination Start
  *************************************-->
  <section class="tg-sectionspace tg-zerotoppadding tg-haslayout">
    <div class="container">
      <div class="row">
        <div id="tg-destinationsslider" class="tg-destinationsslider tg-destinations owl-carousel">
          <div class="item tg-destination">
            <figure>
              <a href="{{route('trips')}}"><img src="images/destination/img-04.jpg" alt="image description"></a>
              <figcaption>
                <h2><a href="{{route('trips')}}">Paris</a></h2>
                <div class="tg-description">
                  <p>in the streets of London</p>
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="item tg-destination">
            <figure>
              <a href="{{route('trips')}}"><img src="images/destination/img-05.jpg" alt="image description"></a>
              <figcaption>
                <h2><a href="{{route('trips')}}">Egypt</a></h2>
                <div class="tg-description">
                  <p>in the streets of London</p>
                </div>
              </figcaption>
            </figure>
            <figure>
              <a href="{{route('trips')}}"><img src="images/destination/img-06.jpg" alt="image description"></a>
              <figcaption>
                <h2><a href="{{route('trips')}}">London</a></h2>
                <div class="tg-description">
                  <p>in the streets of London</p>
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="item tg-destination">
            <figure>
              <a href="{{route('trips')}}"><img src="images/destination/img-07.jpg" alt="image description"></a>
              <figcaption>
                <h2><a href="{{route('trips')}}">Istanbul</a></h2>
                <div class="tg-description">
                  <p>Beautiful Mosque</p>
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="item tg-destination">
            <figure>
              <a href="{{route('trips')}}"><img src="images/destination/img-04.jpg" alt="image description"></a>
              <figcaption>
                <h2><a href="{{route('trips')}}">Paris</a></h2>
                <div class="tg-description">
                  <p>in the streets of London</p>
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="item tg-destination">
            <figure>
              <a href="{{route('trips')}}"><img src="images/destination/img-05.jpg" alt="image description"></a>
              <figcaption>
                <h2><a href="{{route('trips')}}">Egypt</a></h2>
                <div class="tg-description">
                  <p>in the streets of London</p>
                </div>
              </figcaption>
            </figure>
            <figure>
              <a href="{{route('trips')}}"><img src="images/destination/img-06.jpg" alt="image description"></a>
              <figcaption>
                <h2><a href="{{route('trips')}}">London</a></h2>
                <div class="tg-description">
                  <p>in the streets of London</p>
                </div>
              </figcaption>
            </figure>
          </div>
          <div class="item tg-destination">
            <figure>
              <a href="{{route('trips')}}"><img src="images/destination/img-07.jpg" alt="image description"></a>
              <figcaption>
                <h2><a href="{{route('trips')}}">Istanbul</a></h2>
                <div class="tg-description">
                  <p>Beautiful Mosque</p>
                </div>
              </figcaption>
            </figure>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--************************************
      Destination End
  *************************************-->
</main>
@endsection
