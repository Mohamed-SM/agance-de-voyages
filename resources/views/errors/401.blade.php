
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
</head>
<body class="tg-home tg-homevone">
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
			Wrapper Start
	*************************************-->
	<div id="tg-wrapper" class="tg-wrapper tg-haslayout">
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
        <main id="tg-main" class="tg-main tg-haslayout">
            <div class="tg-404error">
                <div class="container">
                    <div class="row">
                        <div class="tg-404errorcontent">
                            <h1>401</h1>
                            <h2>Access non autoriser</h2>
                            <div class="tg-description">
                                <p>ce sera rapporté</p>
                            </div>
                            <a class="tg-btn" href="{{ route('home') }}"><span>go back to home</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <script>
        (function() {
            document.body.classList.add("tg-404errorpage");
        })();
        </script>
		<!--************************************
				Main End
		*************************************-->

	</div>
	<!--************************************
			Wrapper End
	*************************************-->

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