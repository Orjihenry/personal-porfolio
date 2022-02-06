<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>{{ config('app.name', 'Henry\'s Portfolio') }}</title>

	<!-- Global stylesheets -->
	<link href="{{ asset('/stylesheet/css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('/stylesheet/styles.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('/stylesheet/bootstrap.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('/stylesheet/core.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('/stylesheet/components.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('/stylesheet/animate.min.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('/stylesheet/colors.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ asset('/stylesheet/main.css') }}" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="{{ asset('/stylesheet/main.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/stylesheet/pace.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/stylesheet/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/stylesheet/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/stylesheet/blockui.min.js') }}"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="{{ asset('/stylesheet/prism.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/stylesheet/moment.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/stylesheet/livestamp.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/stylesheet/sweet_alert.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('/stylesheet/app.js') }}"></script>
	<!-- /theme JS files -->

	<link rel="stylesheet" href="{{ asset('/home_files/custom-styles.css') }}">
	{{-- <link rel="stylesheet" href="./Home-2_files/style-2.css"> --}}
	{{-- <link rel="stylesheet" href="./Home-2_files/responsive-2.css"> --}}


</head>

<body class="navbar-top sidebar-xs  clickup-chrome-ext_installed pace-done" data-new-gr-c-s-check-loaded="14.1043.0" data-gr-ext-installed="" cz-shortcut-listen="true"><div class="pace  pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div>

	<!-- Main navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-header">
			<div class="animated flipInX">
				<a class="navbar-brand" href="#">HENRY ORJIUDE</a>
			</div>
			<ul class="nav navbar-nav pull-right visible-xs-block">
				{{-- <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li> --}}
				<li><a class="resume-button2" href="{{ URL('storage/Henry_Orjiude_CV.pdf') }}" target="_blank" rel="noopener noreferrer">Resume</a></li>
				<li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobilek">
			<ul class="nav navbar-nav">
				<li>
					<a class="sidebar-control sidebar-main-toggle hidden-xs">
						<i class="icon-paragraph-justify3"></i>
					</a>
				</li>
			</ul>

			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown dropdown-user">
					<a class="resume-button" href="{{ asset('Henry_Orjiude_CV.pdf') }}" target="_blank" rel="noopener noreferrer">Resume</a>
				</li>
                </li>
                
				{{-- <li class="dropdown">
					<div id="toggle">
						<i class="indicator"></i>
					</div>
				</li> --}}

			</ul>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page container -->
	<div class="page-container" style="min-height:586px">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main sidebar -->
			<div class="sidebar sidebar-main">
				<div class="sidebar-content">

					<!-- Main navigation -->
					<div class="sidebar-category sidebar-category-visible">
						<div class="category-content no-padding">
							<ul class="navigation navigation-main navigation-accordion navigation-bordered active">

								<li class="{{ request()->is('/') ? 'active' : '' }}"><a href="/"><i class="icon-home4"></i> <span>Home</span></a></li>
		                        <li class="{{ request()->is('profile') ? 'active' : '' }}"><a href="profile"><i class="icon-user animated flash infinite" style="animation: flash 5s infinite;"></i> <span>About</span></a></li>
		                        <li class="{{ request()->is('projects/*') ? 'active' : '' }}"><a href="#"><i class="icon-price-tags animated"></i> <span>Projects<span class="label bg-blue-400">10+</span></span></a></li>
		                        <li class="{{ request()->is('contact') ? 'active' : '' }}"><a href="#"><i class="icon-bubbles6"></i> <span>Get in touch</span></a></li>
								
							</ul>
							
							<ul class="navigation social-icons navigation-accordion navigation-bordered active">
								
								<li><a href="#"><i class="icon-twitter"></i> <span></span></a></li>
								<li><a href="#"><i class="icon-linkedin"></i> <span></span></a></li>
								<li><a href="#"><i class="icon-instagram"></i> <span></span></a></li>
								<li><a href="#"><i class="icon-github"></i> <span></span></a></li>
							
							</ul>

						</div>
					</div>
					<!-- /main navigation -->

				</div>
			</div>
			<!-- /main sidebar -->

            @yield('content')


            <div id="clickup-floating-chrome-extension-frame-box" class=" mfb-component--br clickup-floating-chrome-extension-frame-box-1642089629107" style="bottom: 204px; right: 10px; display: block; z-index: 2147483636;"></div>
</body>
<grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration>
</html>