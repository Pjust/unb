@extends('master')

@section('content')

{{-- Top Sale --}}
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

{{-- Top Sale Attachements --}}

 <div class="row no-gutter">

        <div class="col-sm-3 inviborder">
          <h2 style="font-weight: 200">Start Pris</h2>
            <div class="smallbox shadow">

            </div>
        </div>

        <div class="col-sm-3 inviborder">
          <h2 style="font-weight: 200">Pris Nu</h2>
            <div class="smallbox shadow">
              
            </div>
        </div>
        <div class="col-sm-3 inviborder">
          <h2 style="font-weight: 200">Resterende Tid</h2>
            <div class="smallbox shadow">
              <div style="width: 100%; height: 100%; padding-top:25px;" id="defaultCountdown"></div>
            </div>
        </div>
         <div class="col-sm-3 inviborder">
          <h2 style="font-weight: 200">Antal Køb</h2>
            <div class="smallbox shadow">

            </div>
        </div>
  </div>

{{-- Other Sales --}}

<div class="row">
  <p class="highlight">HER ER DE ANDRE <span class="highlight-1">VARER</span> PA TILBUD</p>
</div>

 <div class="row no-gutter">

        <div class="col-sm-3 inviborder">
          <h2 style="font-weight: 200">Weber Grill</h2>
            <div class=" medbox shadow">
              <img src="{{ asset('/images/weber.jpg') }}" class="img-responsive" >
            </div>
             <div class="smallbox shadow" style="margin-top:10px;">
                <div style="width: 100%; height: 100%; padding-top:25px;" id="defaultCountdown-1"></div>
            </div>
        </div>

        <div class="col-sm-3 inviborder">
          <h2 style="font-weight: 200">Sonos Højtaler</h2>
            <div class="medbox shadow">
              <img src="{{ asset('/images/sonos.jpg') }}" class="img-responsive" style="padding-top:50px" >
            </div>
            <div class="smallbox shadow" style="margin-top:10px;">
                <div style="width: 100%; height: 100%; padding-top:25px;" id="defaultCountdown-2"></div>
            </div>
        </div>

        <div class="col-sm-3 inviborder">
          <h2 style="font-weight: 200">RayBan Solbriller</h2>
            <div class="medbox shadow">
               <img src="{{ asset('/images/rayban.jpg') }}" class="img-responsive" style="padding-top:50px"  >
            </div>
             <div class="smallbox shadow" style="margin-top:10px;">
                <div style="width: 100%; height: 100%; padding-top:25px;" id="defaultCountdown-3"></div>
            </div>
        </div>

         <div class="col-sm-3 inviborder">
          <h2 style="font-weight: 200">Id Mudvax</h2>
            <div class="medbox shadow">
              <img src="{{ asset('/images/ID.jpg') }}" class="img-responsive"  >
            </div>
             <div class="smallbox shadow" style="margin-top:10px;">
                <div style="width: 100%; height: 100%; padding-top:25px;" id="defaultCountdown-4"></div>
            </div>
        </div>
  </div>

  <div class="row no-gutter">

        <div class="col-sm-3 inviborder">
          <h2 style="font-weight: 200">Weber Grill</h2>
            <div class=" medbox shadow">
              <img src="{{ asset('/images/weber.jpg') }}" class="img-responsive" >
            </div>
        </div>

        <div class="col-sm-3 inviborder">
          <h2 style="font-weight: 200">Sonos Højtaler</h2>
            <div class="medbox shadow">
              <img src="{{ asset('/images/sonos.jpg') }}" class="img-responsive" style="padding-top:50px" >
            </div>
        </div>

        <div class="col-sm-3 inviborder">
          <h2 style="font-weight: 200">RayBan Solbriller</h2>
            <div class="medbox shadow">
               <img src="{{ asset('/images/rayban.jpg') }}" class="img-responsive" style="padding-top:50px"  >
            </div>
        </div>

         <div class="col-sm-3 inviborder">
          <h2 style="font-weight: 200">Id Mudvax</h2>
            <div class="medbox shadow">
              <img src="{{ asset('/images/ID.jpg') }}" class="img-responsive"  >
            </div>
        </div>
  </div>
@stop