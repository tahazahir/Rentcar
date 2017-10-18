@extends('app')

@section('content')
<style>

	.panel{
	    background-color: transparent;
    	border:none;
    	border-radius: 4px;
    	margin-top: 170px;
	    box-shadow: 1px 2px 4px rgba(0,0,0,0.5);
	}

	.panel-default>.panel-heading {
    	background-color: rgba(0,0,0,0.5);
    	border:none;
    	text-align: center;
	}
	
	.panel-body{
		background-color: rgba(0,0,0,0.5);
		color: #fff;
		border-bottom-left-radius: 4px;
		border-bottom-right-radius: 4px;
	}

	#confirm{
		background-color: #FE5A31;
		border-color: #f14d08;
		color: #fff;
		outline: none;
		transition: 0.5s;
	}

</style>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-default">
				<div class="panel-heading">
					<img class="logo" src="{{ url('/images/logo.png') }}" alt="logo"/>
				</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="/auth/login">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">E-Mail Address</label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" value="{{ old('email') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Password</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="remember"> Remember Me
									</label>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button id="confirm" type="submit" class="btn btn-primary" style="margin-right: 15px;">
									Login
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
