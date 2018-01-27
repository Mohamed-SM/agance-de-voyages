<?php Carbon\Carbon::setLocale('fr'); ?>
<!doctype html>
<!--[if lt IE 7]>		<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>			<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>			<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->	<html class="no-js" lang="fr"> <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name') }}</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="apple-touch-icon" href="{{ asset('apple-touch-icon.png') }}">
	<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
	<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
	<link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
	<link rel="stylesheet" href="{{ asset('css/bootstrap-select.css') }}">
	<link rel="stylesheet" href="{{ asset('css/scrollbar.css') }}">
	<link rel="stylesheet" href="{{ asset('css/jquery.mmenu.all.css') }}">
	<link rel="stylesheet" href="{{ asset('css/prettyPhoto.css') }}">
	<link rel="stylesheet" href="{{ asset('css/transitions.css') }}">
	<link rel="stylesheet" href="{{ asset('css/main.css') }}">
	<link rel="stylesheet" href="{{ asset('css/color.css') }}">
	<link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <script src="{{ asset('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js') }}"></script>
	<script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
		]) !!};
	</script>
	@yield('style')
</head>
<body class="tg-home tg-homevone {{ !Auth::user() ? '': 'tg-login' }}">
	<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<!--************************************
				Loader Start
	*************************************-->
	<div class="loader">
		<div class="span">
			<div class="location_indicator"></div>
		</div>
	</div>
	<!--************************************
				Loader End
	*************************************-->
	<!--************************************
				Loader Start
	*************************************-->
	<div class="loader">
		<div class="span">
			<div class="location_indicator"></div>
		</div>
	</div>
	<!--************************************
				Loader End
	*************************************-->
	<!--************************************
			Mobile Menu Start
	*************************************-->
	<nav id="menu">
		<ul>
			<li><a href="javascript:void(0);">Home</a>
			</li>
			<li><a href="destinations.html">Destinations</a></li>
			<li><a href="javascript:void(0);">Listings</a>
				<div>
					<ul>
						<li><a href="listingvone.html">list style one</a></li>
						<li><a href="listingvtwo.html">list style two</a></li>
						<li><a href="listingvthree.html">list style three</a></li>
						<li><a href="listingvfour.html">list style four</a></li>
						<li><a href="listingvfive.html">list style five</a></li>
						<li><a href="listingvsix.html">list style six</a></li>
					</ul>
					<div class="tg-sliderarea">
						<h2>Popular Tours</h2>
						<div class="tg-trendingtripsslider tg-trendingtrips owl-carousel">
							<div class="item tg-trendingtrip">
								<figure>
									<a href="javascript:void(0);">
										<img src="{{ asset('/images/tours/img-05.jpg')}}" alt="image destinations">
										<div class="tg-hover">
											<span class="tg-stars"><span></span></span>
											<span class="tg-tourduration">7 Days</span>
											<span class="tg-locationname">Paris</span>
											<div class="tg-pricearea">
												<span>from</span>
												<h4>$600</h4>
											</div>
										</div>
									</a>
								</figure>
							</div>
							<div class="item tg-trendingtrip">
								<figure>
									<a href="javascript:void(0);">
										<img src="{{ asset('images/tours/img-06.jpg')}}" alt="image destinations">
										<div class="tg-hover">
											<span class="tg-stars"><span></span></span>
											<span class="tg-tourduration">7 Days</span>
											<span class="tg-locationname">Paris</span>
											<div class="tg-pricearea">
												<span>from</span>
												<h4>$600</h4>
											</div>
										</div>
									</a>
								</figure>
							</div>
							<div class="item tg-trendingtrip">
								<figure>
									<a href="javascript:void(0);">
										<img src="{{ asset('images/tours/img-07.jpg')}}" alt="image destinations">
										<div class="tg-hover">
											<span class="tg-stars"><span></span></span>
											<span class="tg-tourduration">7 Days</span>
											<span class="tg-locationname">Paris</span>
											<div class="tg-pricearea">
												<span>from</span>
												<h4>$600</h4>
											</div>
										</div>
									</a>
								</figure>
							</div>
							<div class="item tg-trendingtrip">
								<figure>
									<a href="javascript:void(0);">
										<img src="{{ asset('images/tours/img-08.jpg')}}" alt="image destinations">
										<div class="tg-hover">
											<span class="tg-stars"><span></span></span>
											<span class="tg-tourduration">7 Days</span>
											<span class="tg-locationname">Paris</span>
											<div class="tg-pricearea">
												<span>from</span>
												<h4>$600</h4>
											</div>
										</div>
									</a>
								</figure>
							</div>
						</div>
					</div>
				</div>
			</li>
			<li><a href="javascript:void(0);">Pages</a>
				<ul>
					<li><a href="faqs.html">FAQ’s</a></li>
					<li><a href="packages.html">Table</a></li>
					<li><a href="aboutus.html">About Us</a></li>
					<li><a href="contactus.html">Contact us</a></li>
					<li><a href="billingdetail.html">Billing Detail</a></li>
					<li><a href="404error.html">404 Error</a></li>
					<li><a href="comingsoon.html">Coming Soon</a></li>
					<li><a href="cart.html">cart</a></li>
					<li>
						<a href="javascript:void(0);">Tours</a>
						<ul>
							<li><a href="tourcatagory.html">Tour Catagory</a></li>
							<li><a href="tourbookingdetail.html">Tour Detail</a></li>
							<li><a href="tourpaymentdetail.html">Tour Payment</a></li>
						</ul>
					</li>
				</ul>
			</li>
			<li><a href="javascript:void(0);">Shop</a>
				<ul>
					<li><a href="shop.html">Shop</a></li>
					<li><a href="shopdetail.html">Shop Detail</a></li>
					<li><a href="cart.html">Cart</a></li>
				</ul>
			</li>
			<li><a href="javascript:void(0);">Blog</a>
				<ul>
					<li><a href="blog.html">Blog</a></li>
					<li><a href="blogdetail.html">Blog Detail</a></li>
				</ul>
			</li>
		</ul>
	</nav>
	<!--************************************
			Mobile Menu End
	*************************************-->
	<!--************************************
			Wrapper Start
	*************************************-->
	<div id="tg-wrapper" class="tg-wrapper tg-haslayout">
		<!--************************************
				Header Start
		*************************************-->
		<header id="tg-header" class="tg-header tg-haslayout">
			<div class="container-fluid">
				<div class="row">
					<div class="tg-topbar">
						<nav class="tg-infonav">
							<ul>
								<li>
									<i><img src="{{ asset('images/icons/icon-01.png')}}" alt="image destinations"></i>
									<span>1-800-321-6543</span>
								</li>
								<li>
									<i><img src="{{ asset('images/icons/icon-02.png')}}" alt="image destinations"></i>
									<span>CHOOSE YOUR EXPERIENCE <a href="javascript:void(0);">Discover more</a></span>
								</li>
							</ul>
						</nav>
						<div class="tg-addnavcartsearch">
							<nav class="tg-addnav">
								<ul>
									<li><a href="aboutus.html">about</a></li>
									<li><a href="contactus.html">contact</a></li>
								</ul>
							</nav>
							<nav class="tg-cartsearch">
								<ul>
									<li>
										<a href="javascript:void(0);"><img src="{{ asset('images/icons/icon-03.png')}}" alt="image destinations"></a>
										<div class="tg-cartitems">
											<div class="tg-cartlistitems">
												<h3>Shopping Cart</h3>
												<div class="tg-cartitem">
													<figure class="tg-itemimg"><img src="{{ asset('images/products/img-11.jpg')}}" alt="image description"></figure>
													<div class="tg-contentbox">
														<div class="tg-producthead">
															<em>x 2</em>
															<h4><a href="javascript:void(0);">Switzerland – 12 Days<span>Hiking Tour</span></a></h4>
														</div>
														<span>$600</span>
													</div>
												</div>
												<div class="tg-cartitem">
													<figure class="tg-itemimg"><img src="{{ asset('images/products/img-11.jpg')}}" alt="image description"></figure>
													<div class="tg-contentbox">
														<div class="tg-producthead">
															<em>x 2</em>
															<h4><a href="javascript:void(0);">Switzerland – 12 Days<span>Hiking Tour</span></a></h4>
														</div>
														<span>$600</span>
													</div>
												</div>
												<div class="tg-subtotal">
													<h2>Subtotal</h2>
													<span>$830</span>
												</div>
											</div>
											<div class="tg-btnarea">
												<a class="tg-btn" href="#"><span>view cart</span></a>
											</div>
										</div>
									</li>
									<li><a href="#tg-search"><img src="{{ asset('images/icons/icon-04.png')}}" alt="image destinations"></a></li>
								</ul>
							</nav>
						</div>
					</div>
					<div class="tg-navigationarea tg-headerfixed">
						<strong class="tg-logo"><a href="{{ route('home') }}"><img src="{{ asset('images/logo.png')}}" alt="company logo here"></a></strong>
						
						<div class="tg-socialsignin">
						
							<ul class="tg-socialicons">
								<li><a href="javascript:void(0);"><i class="icon-facebook-logo-outline"></i></a></li>
								<li><a href="javascript:void(0);"><i class="icon-instagram-social-outlined-logo"></i></a></li>
								<li><a href="javascript:void(0);"><i class="icon-twitter-social-outlined-logo"></i></a></li>
							</ul>
							@if (Auth::guest())
							<div class="tg-userbox">
								<a id="tg-btnsignin" class="tg-btn" href="#tg-loginsingup"><span>sign in</span></a>
							</div>
						
						@else
						
							<div class="tg-userbox">
								<div class="dropdown tg-dropdown">
									<button class="tg-btndropdown" id="tg-dropdowndashboard" type="button" data-toggle="dropdown">
										<img src="{{ asset('images/author/img-01.jpg')}}" alt="image description">
										<span>{{ Auth::user()->name }}</span>
										<i class="fa fa-caret-down"></i>
									</button>
									<ul class="dropdown-menu tg-dropdownusermenu" aria-labelledby="tg-dropdowndashboard">
										<li><a href="{{route('dashboard')}}">Dashboard</a></li>
										<li><a href="dashboard.html">Edit Profile</a></li>
										<li>
										<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            Logout
                                        </a></li>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
									</ul>
								</div>
							</div>
						@endif
						</div>
						

						<nav id="tg-nav" class="tg-nav">
							<div class="navbar-header">
								<a href="#menu" class="navbar-toggle collapsed">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</a>
							</div>
							<div id="tg-navigation" class="collapse navbar-collapse tg-navigation">
								<ul>
									<li><a href="{{ route('home') }}">Home</a>
									</li>
									<li class="menu-item-has-children menu-item-has-mega-menu">
										<a href="{{ route('trips') }}">Voyages</a>
										<div class="mega-menu">
											<ul>
												@for ($i = 0; $i < 7; $i++)
												<li><a href="{{ route('trips') }} ">Category {{ $i }}</a></li>	
												@endfor
											</ul>
											<div class="tg-sliderarea">
												<h2>Voyages Populair</h2>
												<div class="tg-trendingtripsslider tg-trendingtrips owl-carousel">
													@foreach ($menuTrips as $trip)
														<div class="item tg-trendingtrip">
															<figure>
																<a href="{{ route('trips.show',$trip->id) }}">
																	<img src="/images/tours/{{ $trip->image ? $trip->image : 'trip.default.png'}}" alt="image destinations">
																	<div class="tg-hover">
																			<?php 
																			$start = \Carbon\Carbon::parse($trip->start_at);
																			$end = \Carbon\Carbon::parse($trip->end_at); 
																		?>
																		<span class="tg-tourduration">{{ $start->diffInDays($end) }} jours </span>
																		<div class="tg-pricearea">
																			<span>prix</span>
																			<h4>{{ $trip->price }} DA</h4>
																		</div>
																	</div>
																</a>
															</figure>
															<h4>{{ $trip->title }}</h4>
														</div>	
													@endforeach
												</div>
											</div>
										</div>
									</li>
									<li><a href="shop.html">FAQ’s</a></li>
									<li><a href="blog.html">Blog</a></li>
								</ul>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</header>
		<!--************************************
				Header End
		*************************************-->
		<!--************************************
				Home Slider Start
		*************************************-->
        @yield('banner')
        
		<!--************************************
				Home Slider End
		*************************************-->
		<!--************************************
				Main Start
        *************************************-->
        @yield('main')
		<!--************************************
				Main End
		*************************************-->
		<!--************************************
				Footer Start
		*************************************-->
		<footer id="tg-footer" class="tg-footer tg-haslayout">
			<div class="tg-fourcolumns">
				<div class="container">
					<div class="row">
						<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
							<div class="tg-footercolumn tg-widget tg-widgettext">
								<div class="tg-widgettitle">
									<h3>About Travlu</h3>
								</div>
								<div class="tg-widgetcontent">
									<div class="tg-description">
										<p>Nunc cursus liero purs ac cogue arcu cursus ut sed vitae pulvinar massaidp nequetiam lore elerisque</p>
									</div>
									<span>1-800-321-6543</span>
									<a href="mailto:info@travlu.com">info@travlu.com</a>
									<ul class="tg-socialicons tg-socialiconsvtwo">
										<li><a href="javascript:void(0);"><i class="icon-facebook-logo-outline"></i></a></li>
										<li><a href="javascript:void(0);"><i class="icon-instagram-social-outlined-logo"></i></a></li>
										<li><a href="javascript:void(0);"><i class="icon-twitter-social-outlined-logo"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
							<div class="tg-footercolumn tg-widget tg-widgettravelunews">
								<div class="tg-widgettitle">
									<h3>Travelu News</h3>
								</div>
								<div class="tg-widgetcontent">
									<ul>
										<li>
											<figure>
												<a href="javascript:void(0);"><img src="{{ asset('images/thumbnail/img-01.jpg')}}" alt="image destinations"></a>
											</figure>
											<div class="tg-newcontent">
												<h4><a href="javascript:void(0);">Bungee Jumping Trip</a></h4>
												<div class="tg-description">
													<p>Nunc cursus libero purus congue arcu vitae pulvinar</p>
												</div>
												<time datetime="2017-06-06">Feb 22, 2017</time>
											</div>
										</li>
										<li>
											<figure>
												<a href="javascript:void(0);"><img src="{{ asset('images/thumbnail/img-02.jpg')}}" alt="image destinations"></a>
											</figure>
											<div class="tg-newcontent">
												<h4><a href="javascript:void(0);">Trip to White Castle</a></h4>
												<div class="tg-description">
													<p>Nunc cursus libero purus congue arcu vitae pulvinar</p>
												</div>
												<time datetime="2017-06-06">Feb 22, 2017</time>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
							<div class="tg-footercolumn tg-widget tg-widgetdestinations">
								<div class="tg-widgettitle">
									<h3>Top Destinations</h3>
								</div>
								<div class="tg-widgetcontent">
									<ul>
										<li><a href="javascript:void(0);">Bayonne, Melbourne</a></li>
										<li><a href="javascript:void(0);">Greenville, New Jersey</a></li>
										<li><a href="javascript:void(0);">The Heights, London</a></li>
										<li><a href="javascript:void(0);">West Side, New York</a></li>
										<li><a href="javascript:void(0);">Upper East Side, New York</a></li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
							<div class="tg-footercolumn tg-widget tg-widgetnewsletter">
								<div class="tg-widgettitle">
									<h3>Newsletter</h3>
								</div>
								<div class="tg-widgetcontent">
									<div class="tg-description"><p>Sign up for our mailing list to get latest updates and offers</p></div>
									<form class="tg-formtheme tg-formnewsletter">
										<fieldset>
											<input type="email" name="email" class="form-control" placeholder="Your Email">
											<button type="submit"><img src="/images/icons/icon-08.png" alt="image destinations"></button>
										</fieldset>
									</form>
									<span>We respect your privacy</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="tg-footerbar">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<p>Copyright &copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!--************************************
				Footer End
		*************************************-->
	</div>
	<!--************************************
			Wrapper End
	*************************************-->
	<!--************************************
			Search Start
	*************************************-->
	<div id="tg-search" class="tg-search">
		<button type="button" class="close"><i class="icon-cross"></i></button>
		<form>
			<fieldset>
				<div class="form-group">
					<input type="search" name="search" class="form-control" value="" placeholder="search here">
					<button type="submit" class="tg-btn"><span class="icon-search2"></span></button>
				</div>
			</fieldset>
		</form>
		<ul class="tg-destinations">
			<li>
				<a href="javascript:void(0);">
					<h3>Europe</h3>
					<em>(05)</em>
				</a>
			</li>
			<li>
				<a href="javascript:void(0);">
					<h3>Africa</h3>
					<em>(15)</em>
				</a>
			</li>
			<li>
				<a href="javascript:void(0);">
					<h3>Asia</h3>
					<em>(12)</em>
				</a>
			</li>
			<li>
				<a href="javascript:void(0);">
					<h3>Oceania</h3>
					<em>(02)</em>
				</a>
			</li>
			<li>
				<a href="javascript:void(0);">
					<h3>North America</h3>
					<em>(08)</em>
				</a>
			</li>
		</ul>
	</div>
	<!--************************************
			Search End
	*************************************-->
	@if (Auth::guest())
	<!--************************************
			Login Singup Start
	*************************************-->
	@if (isset($errors))
	<div id="tg-loginsingup" class="tg-loginsingup {{ $errors->has('email') ? 'open' : ''}}" data-vide-bg="poster: {{ asset('images/singup-img.jpg')}}" data-vide-options="position: 0% 50%">
		<div class="tg-contentarea tg-themescrollbar">
			<div class="tg-scrollbar">
				<button type="button" class="close">x</button>
				<div class="tg-logincontent">
					<nav id="tg-loginnav" class="tg-loginnav">
						<ul>
							<li><a href="#">About Us</a></li>
							<li><a href="#">Contact Us</a></li>
						</ul>
					</nav>
					<div class="tg-themetabs">
						<ul class="tg-navtbs" role="tablist">
							<li role="presentation" class="active"><a href="#home" data-toggle="tab">Connextion</a></li>
							<li role="presentation"><a href="#profile" data-toggle="tab">Inscription</a></li>
						</ul>
						<div class="tg-tabcontent tab-content">
							<div role="tabpanel" class="tab-pane active fade in" id="home">
								<form class="tg-formtheme tg-formlogin" role="form" method="POST" action="{{ route('login') }}" id="connection-form">
									{{ csrf_field() }}
									<fieldset>
										<div class="form-group">
											<label>Email <sup>*</sup></label>
											<input type="text" name="email" class="form-control" placeholder="" value="{{ old('email') }}" required>
											@if ($errors->has('email'))
												<span class="help-block">
													<strong>{{ $errors->first('email') }}</strong>
												</span>
											@endif
										</div>
										<div class="form-group">
											<label>Password <sup>*</sup></label>
											<input type="password" name="password" class="form-control" placeholder="" required>
											@if ($errors->has('password'))
												<span class="help-block">
													<strong>{{ $errors->first('password') }}</strong>
												</span>
											@endif
										</div>
										<div class="form-group">
											<div class="tg-checkbox">
												<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} id="rememberpass">
												<label for="rememberpass">Remember Me</label>
											</div>
											<span><a href="{{ route('password.request') }}">Lost your password?</a></span>
										</div>
										<button class="tg-btn tg-btn-lg">
											<span>Connection</span>
										</button>
									</fieldset>
								</form>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="profile">
								<form class="tg-formtheme tg-formlogin"role="form" method="POST" action="{{ route('register') }}">
										{{ csrf_field() }}
									<fieldset>
										<div class="form-group">
											<label>Name<sup>*</sup></label>
											<input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
											@if ($errors->has('name'))
												<span class="help-block">
													<strong>{{ $errors->first('name') }}</strong>
												</span>
											@endif
										</div>
										<div class="form-group">
											<label>Email<sup>*</sup></label>
											<input type="text" name="email" class="form-control" value="{{ old('email') }}" required>
											@if ($errors->has('email'))
												<span class="help-block">
													<strong>{{ $errors->first('email') }}</strong>
												</span>
											@endif
										</div>
										<div class="form-group">
											<label>Password <sup>*</sup></label>
											<input type="password" name="password" class="form-control" placeholder="" required>
											@if ($errors->has('password'))
												<span class="help-block">
													<strong>{{ $errors->first('password') }}</strong>
												</span>
											@endif
										</div>
										<div class="form-group">
											<label>Confirm Password <sup>*</sup></label>
											<input type="password" name="password_confirmation" class="form-control" placeholder="" required>
										</div>
										<button class="tg-btn tg-btn-lg">
											<span>Inscrit</span>
										</button>
									</fieldset>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	@endif
	<!--************************************
			Login Singup End
	*************************************-->
	@endif

	<script src="{{ asset('js/vendor/jquery-library.js') }}"></script>
	<script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
	<script src="https://maps.google.com/maps/api/js?key=AIzaSyCR-KEWAVCn52mSdeVeTqZjtqbmVJyfSus&amp;language=en"></script>
	<script src="{{ asset('js/bootstrap-select.min.js') }}"></script>
	<script src="{{ asset('js/jquery-scrolltofixed.js') }}"></script>
	<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
	<script src="{{ asset('js/jquery.mmenu.all.js') }}"></script>
	<script src="{{ asset('js/packery.pkgd.min.js') }}"></script>
	<script src="{{ asset('js/jquery.vide.min.js') }}"></script>
	<script src="{{ asset('js/scrollbar.min.js') }}"></script>
	<script src="{{ asset('js/prettyPhoto.js') }}"></script>
	<script src="{{ asset('js/countdown.js') }}"></script>
	<script src="{{ asset('js/parallax.js') }}"></script>
	<script src="{{ asset('js/gmap3.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>
	<script src="{{ asset('vendor/bootstrap-notify/bootstrap-notify.min.js') }}"></script>

	@include ('errors.list') {{-- Including error file --}}
	@include ('layouts.notifications') {{-- Including notifications file --}}

</body>
</html>