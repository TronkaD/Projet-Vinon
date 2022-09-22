<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="en">
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>Vinon </title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Health Care Medical Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Novena HTML Template v1.0">

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="{{ url('/images/favicon.png') }}" />

  <!-- 
  Essential stylesheets
  =====================================-->
  <link rel="stylesheet" href="{{ url('plugins/bootstrap/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ url('plugins/icofont/icofont.min.css') }}">
  <link rel="stylesheet" href="{{ url('plugins/slick-carousel/slick/slick.css') }}">
  <link rel="stylesheet" href="{{ url('plugins/slick-carousel/slick/slick-theme.css') }}">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="{{ url('css/style.css') }}">

</head>

<body id="top">

<header>
	<div class="header-top-bar">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<ul class="top-bar-info list-inline-item pl-0 mb-0">
						<li class="list-inline-item"><a href="{{ url('mailto:support@gmail.com') }}"><i class="icofont-support-faq mr-2"></i>vinon@gmail.com</a></li>
						<li class="list-inline-item"><i class="icofont-location-pin mr-2"></i>Address Lomé-adidogomé</li>
					</ul>
				</div>
				<div class="col-lg-6">
					<div class="text-lg-right top-right-bar mt-2 mt-lg-0">
						<a href="{{ url('tel:+23-345-67890') }}">
							<span>Nous Contactez: </span>
							<span class="h4">+228 90180083</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-expand-lg navigation" id="navbar">
		<div class="container">
			<a class="navbar-brand" href="{{ url('/') }}">
				<img src="{{ url('images/logo.png') }}" alt="" class="img-fluid logo">
				<img src="{{ url('images/text-logo.png') }}" alt="" class="img-fluid text-logo">
			</a>

			<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain"
				aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
				<span class="icofont-navigation-menu"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarmain">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active"><a class="nav-link" href="{{ url('/') }}">Accueil</a></li>
					<li class="nav-item"><a class="nav-link" href="{{ url('/about') }}">Propos</a></li>
					<li class="nav-item"><a class="nav-link" href="{{ url('/service') }}">Services</a></li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="{{ url('/doctor') }}" id="dropdown03" data-toggle="dropdown"
							aria-haspopup="true" aria-expanded="false">Doctors <i class="icofont-thin-down"></i></a>
						<ul class="dropdown-menu" aria-labelledby="dropdown03">
							<li><a class="dropdown-item" href="{{ url('/doctor') }}">Doctors</a></li>
							<li><a class="dropdown-item" href="{{ url('/doctorSingle') }}">Doctor Single</a></li>
				      		</ul>
					</li>
					<li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Contact</a></li>
				</ul>
			</div>
			<button type="submit" class="btn btn-main-2 btn-round-full space" ><a href="{{ route('login')}}">Connexion</a></button>
		</div>
	</nav>
</header>