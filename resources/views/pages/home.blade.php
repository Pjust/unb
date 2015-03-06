@extends('master')

@section('content')

<div class="row" style=" box-shadow: 0px 0px 5px #888888; background:#FFF;">

  <div class="col-md-6">
  	<img src="{{ asset('/images/converse.jpg') }}" width="100%">
  	<p style="width:100%; text-align:justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </div>

  <div class="col-md-6">
  	<p>Prisudvikling</p>
	<img src="{{ asset('/images/graph.jpg') }}" width="100%">
  </div>

</div>

<div class="row" style="padding:10px 0 0 0; ">
  <div class="col-md-4 smallbox">Start Pris:</div>
  <div class="col-md-4 smallbox">Pris Nu:</div>
  <div class="col-md-4 smallbox">Salg Slutter Om:</div>
</div>

@stop