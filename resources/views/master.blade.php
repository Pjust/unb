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
<style type="text/css">
#defaultCountdown { width: 240px; height: 45px; }
</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="/countdown/jquery.plugin.js"></script>
<script src="/countdown/jquery.countdown.js"></script>

</head>

<nav class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">UNBU</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-left">
          <li><a href="#">Om Os</a></li>
          <li><a href="#">Sådan Virker Det</a></li>
          <li><a href="#">Kontakt</a></li>
          <li><a href="#">Betingelser</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#">Login</a></li>
          <li><a href="#">Opret Bruger</a></li>
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