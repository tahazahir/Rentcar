@extends('master')
@section('content')
<script type="text/javascript">
		$('.nav > li').removeClass('active');
		$('.nav > li:nth-child(3)').addClass('active');
	</script>
	@include('layouts.conditions')
	@include('layouts.services')
@stop