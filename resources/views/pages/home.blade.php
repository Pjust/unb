@extends('master')

@section('content')

<div class="row" style=" box-shadow: 0px 0px 5px #888888; background:#FFF;">

  <div class="col-md-6">
  	<img src="{{ asset('/images/converse.jpg') }}" class="img-responsive">
  	<p style="width:100%; text-align:justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </div>

  <div class="col-md-6">
	   <img src="{{ asset('/images/graph.jpg') }}" class="img-responsive" style="height:425px;">
     <button class="btn btn-success btn-block" style="">Køb Nu</button>
  </div>

</div>

 <div class="row no-gutter">

        <div class="col-sm-3">
          <h2 style="font-weight: 200">Start Pris</h2>
            <div class="smallbox shadow">

            </div>
        </div>

        <div class="col-sm-3">
          <h2 style="font-weight: 200">Pris Nu</h2>
            <div class="smallbox shadow">
              
            </div>
        </div>
        <div class="col-sm-3">
          <h2 style="font-weight: 200">Resterende Tid</h2>
            <div class="smallbox shadow">

            </div>
        </div>
         <div class="col-sm-3">
          <h2 style="font-weight: 200">Antal Køb</h2>
            <div class="smallbox shadow">

            </div>
        </div>
    </div>

@stop