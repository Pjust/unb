
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<title>jQuery Countdown</title>
<link rel="stylesheet" href="countdown/jquery.countdown.css">
<style type="text/css">
#defaultCountdown { width: 240px; height: 45px; }
</style>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="countdown/jquery.countdown.js"></script>
<script type="text/javascript" src="countdown/jquery.plugin.js">
$(function () {
  var austDay = new Date();
  austDay = new Date(austDay.getFullYear() + 1, 1 - 1, 26);
  $('#defaultCountdown').countdown({until: austDay});
  $('#year').text(austDay.getFullYear());
});
</script>
</head>
<body>
<h1>jQuery Countdown Basics</h1>
<p>This page demonstrates the very basics of the
  <a href="http://keith-wood.name/countdown.html">jQuery Countdown plugin</a>.
  It contains the minimum requirements for using the plugin and
  can be used as the basis for your own experimentation.</p>
<p>For more detail see the <a href="http://keith-wood.name/countdownRef.html">documentation reference</a> page.</p>
<p>Counting down to 26 January <span id="year">2010</span>.</p>
<div id="defaultCountdown"></div>
</body>
</html>
