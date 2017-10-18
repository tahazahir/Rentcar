@extends('master')
@section('content')
	<script type="text/javascript">
		$('.nav > li').removeClass('active');
		$('.nav > li:nth-child(5)').addClass('active');
	</script>
	@include('layouts.map')
@stop