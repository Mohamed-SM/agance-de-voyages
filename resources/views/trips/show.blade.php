@extends('layouts.app')

@section('banner')
<div class="tg-parallax tg-innerbanner" data-appear-top-offset="600" data-parallax="scroll" data-image-src="/images/parallax/bgparallax-06.jpg">
    <div class="tg-sectionspace tg-haslayout">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"></div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('main')
<main id="tg-main" class="tg-main tg-haslayout">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div id="tg-content" class="tg-content">
                        <div class="tg-tourbookingdetail">
                            <div class="tg-bookinginfo">
                                <h2>{{ $trip->title }}</h2>
                                <div class="tg-durationrating">
                                    <span class="tg-stars"><span></span></span>
                                    <em>(3 Review)</em>
                                </div>
                                <div class="tg-pricearea">
                                    <span>Prix</span>
                                    <h4>{{ $trip->price }} DA<sub>/ per person</sub></h4>
                                </div>
                                <div class="tg-description">
                                    <p>rest {{ $trip->places }} place</p>
                                </div>
                                <form class="tg-formtheme tg-formbookingdetail">
                                    <fieldset>
                                        <div class="form-group">
                                            <div class="tg-formicon"><i class="icon-user-check"></i></div>
                                            <span class="tg-select">
                                                <select class="selectpicker" data-live-search="true" data-width="100%">
                                                    <option data-tokens="Number of Rooms">Number of Rooms</option>
                                                    <option data-tokens="2">2</option>
                                                    <option data-tokens="4">4</option>
                                                    <option data-tokens="5">5</option>
                                                    <option data-tokens="6">6</option>
                                                    <option data-tokens="10">10</option>
                                                </select>
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <div class="tg-formicon"><i class="icon-users"></i></div>
                                            <span class="tg-select">
                                                <select class="selectpicker" data-live-search="true" data-width="100%">
                                                    <option data-tokens="Persons">Number of Rooms</option>
                                                    <option data-tokens="2">2</option>
                                                    <option data-tokens="4">4</option>
                                                    <option data-tokens="5">5</option>
                                                    <option data-tokens="6">6</option>
                                                    <option data-tokens="10">10</option>
                                                </select>
                                            </span>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="tg-btn tg-btn-lg"><span>proceed boking</span></button>
                                        </div>
                                    </fieldset>
                                </form>
                                <ul class="tg-tripinfo">
                                    <?php 
                                        $start = \Carbon\Carbon::parse($trip->start_at);
                                        $end = \Carbon\Carbon::parse($trip->end_at); 
                                    ?>
                                        
                                    <li><span class="tg-tourduration">{{ $start->diffInDays($end) }} jours</span></li>
                                    <li><span class="tg-tourduration tg-availabilty">depart {{ $start->format('d-M-Y') }}</span></li>
                                    <li><span class="tg-tourduration tg-location">San Francisco</span></li>
                                    <li><span class="tg-tourduration tg-peoples">{{ $trip->places }} person</span></li>
                                </ul>
                            </div>
                            <div class="tg-sectionspace tg-haslayout">
                                <div class="tg-themetabs tg-bookingtabs">
                                    <ul class="tg-themetabnav" role="tablist">
                                        <li role="presentation" class="active">
                                            <a href="#description" aria-controls="description" role="tab" data-toggle="tab">
                                                <span>Description</span>
                                            </a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#plan" aria-controls="plan" role="tab" data-toggle="tab">
                                                <span>Itinerary</span>
                                            </a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#mape" aria-controls="mape" role="tab" data-toggle="tab">
                                                <span>location</span>
                                            </a>
                                        </li>
                                        <li role="presentation">
                                            <a href="#images" aria-controls="images" role="tab" data-toggle="tab">
                                                <span>Images</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content tg-themetabcontent">
                                        <div role="tabpanel" class="tab-pane active tg-overviewtab" id="description">
                                            <div class="tg-bookingdetail">
                                                <div class="tg-box">
                                                    <h2>Infotmation sur le voyage</h2>
                                                    <div class="tg-description">
                                                        {{ $trip->description }}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tg-bookingdetail tg-bookingdetailstyle">
                                                <div class="tg-box tg-amentities">
                                                    <h3>{{ $trip->title }}</h3>
                                                    <hr>
                                                    <div class="tg-content">
                                                        <img src="/images/tours/{{ $trip->image ? $trip->image : 'trip.default.png'}}" alt="image destinations">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane tg-itinerary" id="plan">
                                            <div class="tg-bookingdetail">
                                                <div class="tg-box">
                                                    <div class="tg-accordion" role="tablist" aria-multiselectable="true">
                                                        <div class="tg-panel">
                                                            <h4>Day 1<span>Lorem ipsum dolor sit amet consectetuer.</span></h4>
                                                            <div class="tg-panelcontent">
                                                                <div class="tg-description">
                                                                    <p>Maecenas sed diam eget risus varius blandit sit amet non magna. Vivamus sagittis lacus vel augue Sed non mauris vitae;erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tg-panel">
                                                            <h4>Day 3<span>Lorem ipsum dolor sit amet consectetuer.</span></h4>
                                                            <div class="tg-panelcontent">
                                                                <div class="tg-description">
                                                                    <p>Maecenas sed diam eget risus varius blandit sit amet non magna. Vivamus sagittis lacus vel augue Sed non mauris vitae;erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tg-panel">
                                                            <h4>Day 5<span>Lorem ipsum dolor sit amet consectetuer.</span></h4>
                                                            <div class="tg-panelcontent">
                                                                <div class="tg-description">
                                                                    <p>Maecenas sed diam eget risus varius blandit sit amet non magna. Vivamus sagittis lacus vel augue Sed non mauris vitae;erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tg-bookingdetail">
                                                <div class="tg-box">
                                                    <div id="tg-accordion" class="tg-accordion" role="tablist" aria-multiselectable="true">
                                                        <div class="tg-panel">
                                                            <h4>Day 2<span>Lorem ipsum dolor sit amet consectetuer.</span></h4>
                                                            <div class="tg-panelcontent">
                                                                <div class="tg-description">
                                                                    <p>Maecenas sed diam eget risus varius blandit sit amet non magna. Vivamus sagittis lacus vel augue Sed non mauris vitae;erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tg-panel">
                                                            <h4>Day 4<span>Lorem ipsum dolor sit amet consectetuer.</span></h4>
                                                            <div class="tg-panelcontent">
                                                                <div class="tg-description">
                                                                    <p>Maecenas sed diam eget risus varius blandit sit amet non magna. Vivamus sagittis lacus vel augue Sed non mauris vitae;erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tg-panel">
                                                            <h4>Day 6<span>Lorem ipsum dolor sit amet consectetuer.</span></h4>
                                                            <div class="tg-panelcontent">
                                                                <div class="tg-description">
                                                                    <p>Maecenas sed diam eget risus varius blandit sit amet non magna. Vivamus sagittis lacus vel augue Sed non mauris vitae;erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane tg-locationtab" id="mape">
                                            <div class="tg-box tg-location">
                                                <h3>The neighborhood</h3>
                                                <div class="tg-description">
                                                    <p>Curabitur blandit tempus porttitor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras mattis consectetur purus sit amet fermentum. Etiam porta sem malesuada magna mollis
                                                    euismod. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                </div>
                                                <div id="tg-locationmap" class="tg-locationmap tg-map"></div>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane tg-gallerytab" id="images">
                                            <div class="tg-gallery">
                                                <ul>
                                                    <li>
                                                        <figure>
                                                            <a href="/images/gallery/img-01.jpg" data-rel="prettyPhoto[instagram]">
                                                                <img src="/images/gallery/img-01.jpg" alt="image decruoton">
                                                            </a>
                                                        </figure>
                                                    </li>
                                                    <li>
                                                        <figure>
                                                            <a href="/images/gallery/img-02.jpg" data-rel="prettyPhoto[instagram]">
                                                                <img src="/images/gallery/img-02.jpg" alt="image decruoton">
                                                            </a>
                                                        </figure>
                                                    </li>
                                                    <li>
                                                        <figure>
                                                            <a href="/images/gallery/img-03.jpg" data-rel="prettyPhoto[instagram]">
                                                                <img src="/images/gallery/img-03.jpg" alt="image decruoton">
                                                            </a>
                                                        </figure>
                                                    </li>
                                                    <li>
                                                        <figure>
                                                            <a href="/images/gallery/img-04.jpg" data-rel="prettyPhoto[instagram]">
                                                                <img src="/images/gallery/img-04.jpg" alt="image decruoton">
                                                            </a>
                                                        </figure>
                                                    </li>
                                                    <li>
                                                        <figure>
                                                            <a href="/images/gallery/img-05.jpg" data-rel="prettyPhoto[instagram]">
                                                                <img src="/images/gallery/img-05.jpg" alt="image decruoton">
                                                            </a>
                                                        </figure>
                                                    </li>
                                                    <li>
                                                        <figure>
                                                            <a href="/images/gallery/img-06.jpg" data-rel="prettyPhoto[instagram]">
                                                                <img src="/images/gallery/img-06.jpg" alt="image decruoton">
                                                            </a>
                                                        </figure>
                                                    </li>
                                                    <li>
                                                        <figure>
                                                            <a href="/images/gallery/img-07.jpg" data-rel="prettyPhoto[instagram]">
                                                                <img src="/images/gallery/img-07.jpg" alt="image decruoton">
                                                            </a>
                                                        </figure>
                                                    </li>
                                                    <li>
                                                        <figure>
                                                            <a href="/images/gallery/img-08.jpg" data-rel="prettyPhoto[instagram]">
                                                                <img src="/images/gallery/img-08.jpg" alt="image decruoton">
                                                            </a>
                                                        </figure>
                                                    </li>
                                                    <li>
                                                        <figure>
                                                            <a href="/images/gallery/img-09.jpg" data-rel="prettyPhoto[instagram]">
                                                                <img src="/images/gallery/img-09.jpg" alt="image decruoton">
                                                            </a>
                                                        </figure>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
