<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>United Buyers</title>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:700,300,400' rel='stylesheet' type='text/css'>
<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
<script src="js/app.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/countdown/jquery.countdown.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="/countdown/jquery.plugin.js"></script>
<script src="/countdown/jquery.countdown.js"></script>
  <script src="/js/d3.js"></script>
  <script src="/js/d3.min.js"></script>
</head>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="min-height:60px;">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" style="padding:5px 5px;" href="/">
        <img alt="Brand"  src="{{ asset('/images/logo-07.png') }}">
      </a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-left">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Om UNBU<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="/Hvad-Er-Unbu">Folkene bag UNBU</a></li>
                <li><a href="/Hvad-Er-Unbu">Hvad er UNBU</a></li>
                <li><a href="/Sådan-Virker-Unbu">Sådan virker UNBU</a></li>
                <li><a href="/Fordele">Fordele ved UNBU</a></li>
                <li><a href="/Fordele">Fortroligheds Politik</a></li>
              </ul>
            </li>
             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Produkter<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="/Kontakt">Stem på produkter</a></li>
                <li><a href="/Kontakt">Foreslå produkter</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Del UNBU<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="/Kontakt">Email</a></li>
                <li><a href="/Kontakt">Facebook</a></li>
                <li><a href="/Kontakt">Twitter</a></li>
              </ul>
            </li>        
             <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Kontakt<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="/Kontakt">Ris og Ros</a></li>
                <li><a href="/Kontakt">Jeg er Kunde</a></li>
                <li><a href="/Kontakt">Jeg er Forhandler</a></li>
              </ul>
            </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><button type="button" class="btn btn-default navbar-btn">Log ind</button></li>
        </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container -->
</nav>

	<body>
		<div class="container">
			@yield('content')
		<div>
	</body>
</html>

<script>
$(function () {
  var austDay = new Date();
  austDay = new Date(austDay.getFullYear() + 1, 1 - 1, 26);
  $('#defaultCountdown').countdown({until: austDay});
  $('#defaultCountdown-1').countdown({until: austDay});
  $('#defaultCountdown-2').countdown({until: austDay});
  $('#defaultCountdown-3').countdown({until: austDay});
  $('#defaultCountdown-4').countdown({until: austDay});
  $('#year').text(austDay.getFullYear());
});
</script>

<script src="/js/script.js"></script>
