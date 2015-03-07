@extends('master')

@section('content')
    <div id="padZeroes"></div>
@stop

@section('footer')
	<script type="text/javascript">
 		$('#padZeroes').countdown({until: liftoffTime, padZeroes: true});
	</script>
@stop