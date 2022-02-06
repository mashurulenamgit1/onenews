<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" href="{{asset('images.png')}}">
<title>Notun_news</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{ asset('public/news_frontend/assets/css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('public/news_frontend/assets/css/font-awesome.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('public/news_frontend/assets/css/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('public/news_frontend/assets/css/font.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('public/news_frontend/assets/css/li-scroller.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('public/news_frontend/assets/css/slick.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('public/news_frontend/assets/css/jquery.fancybox.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('public/news_frontend/assets/css/theme.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('public/news_frontend/assets/css/style.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('public/news_frontend/style.css')}}">

<!--
<script src="assets/js/html5shiv.min.js"></script>
<script src="assets/js/respond.min.js"></script>
<![endif]-->
</head>
<body>


@include('pages.header')


@yield('content')


@include('pages.footer')

<script src="{{ asset('public/news_frontend/sign_form.js')}}"></script> 
<script src="{{ asset('public/news_frontend/assets/js/jquery.min.js')}}"></script> 
<script src="{{ asset('public/news_frontend/assets/js/wow.min.js')}}"></script> 
<script src="{{ asset('public/news_frontend/assets/js/bootstrap.min.js')}}"></script> 
<script src="{{ asset('public/news_frontend/assets/js/slick.min.js')}}"></script> 
<script src="{{ asset('public/news_frontend/assets/js/jquery.li-scroller.1.0.js')}}"></script> 
<script src="{{ asset('public/news_frontend/assets/js/jquery.newsTicker.min.js')}}"></script> 
<script src="{{ asset('public/news_frontend/assets/js/jquery.fancybox.pack.js')}}"></script> 
<script src="{{ asset('public/news_frontend/assets/js/custom.js')}}"></script>
 
</body>
</html>