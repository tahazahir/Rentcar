@extends('master')
@section('content')
	<script type="text/javascript">
		$('.nav > li').removeClass('active');
		$('.nav > li:nth-child(2)').addClass('active');
	</script>
	<div class="container">
		<div class="row reservation">
			{!! Form::open(['url'=>url('/parc'),'id'=>'myForm']) !!}
				<div class="col-lg-2 col-md-2">
					<div class="form-group">
						{!! Form::label('marque','Marque : ') !!}
						<select id="marque" class="form-control" name="marque">
							<option value="">---------</option>
							@foreach($marques1 as $v)
								<option value="{{ $v }}">{{ $v }}</option>
							@endforeach
						</select>
					</div>
				</div>
				<div class="col-lg-2 col-md-2">
					<div class="form-group">
						{!! Form::label('model','Model : ') !!}
						<select id="model" class="form-control" name="model">
							<option value="">---------</option>
						</select>
					</div>
				</div>
				<div class="col-lg-2 col-md-2">
					<div class="form-group">
						{!! Form::label('carburant','Carburant : ') !!}
						<select id="carburant" class="form-control" name="carburant">
							<option value="">---------</option>
							<option value="d">Diesel</option>
							<option value="e">Essence</option>
						</select>
					</div>
				</div>
				<div class="col-lg-2 col-md-2">
					<div class="form-group">
						<?php $transformation=[]; ?>
						{!! Form::label('transformation','Transformation : ') !!}
						<select id="transformation" class="form-control" name="transformation">
							<option value="">---------</option>
							<option value="a">Automatique</option>
							<option value="m">Manuelle</option>
						</select>
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="form-group">
						{!! Form::label('submit','Trouvez votre voiture:',['style'=>'opacity:1;','id'=>'sub']) !!}
						<input value="Trouver" type="submit" name="submit" class="form-control btn btn-primary" onclick="function1(event)" id="confirm">
					</div>
				</div>
			{!! Form::close() !!}
		</div>
	</div>
	<div class="container vehicules">
		<div class="row">
			<div class="h2">Véhicules</div>
		</div>
		<div class="row">
			@foreach($cars as $car)
			<div class="col-lg-3 col-md-3 col-sm-6">
			<div class="v-item">
				<div class="row">
					<div class="col-lg-12 v-item-img">
						<img style="width: 218px;height: 124px;" src="{{ $car->picture }}" alt="alpha"/>
					</div>
					<div class="col-lg-12 v-item-description">
						<input type="hidden" name="car_id" value="{{ $car->id }}">
						<div class="row">
							<div class="col-lg-12">
								<div class="h4">{{ $car->marque.' '.$car->model }}</div>
							</div>
							
						</div>
						<div class="row">
							<div class="clim col-lg-12">
								<span>
									<i class="fa fa-first-order" aria-hidden="true"></i>
								</span>
								@if($car->clim == 1)
								Oui
								@else
								Non
								@endif
							</div>
							<div class="clim col-lg-12">
								<span id="exep">
									<i class="fa fa-list-ol" aria-hidden="true"></i>
								</span>
								@if($car->transformation == 'a')
								Automatique
								@else
								Manuelle
								@endif
							</div>
							<div class="clim col-lg-12">
								<span>
									<i class="fa fa-beer" aria-hidden="true"></i>
								</span>	
								@if($car->carburant == 'd')
								Diesel
								@else
								Essence
								@endif
							</div>
							<div class="price col-lg-6 col-md-6 col-sm-6 col-xs-6">
								<button id="confirm" class="btn btn-primary">{{ $car->rent_price }}DH</button>
							</div>
							<div class="reserver col-lg-6 col-md-6 col-sm-6 col-xs-6">
								<a href="{{ url('/parc',['id'=>$car->id]) }}"><button id="confirm" class="btn btn-primary">Reserver</button></a>
							</div>
						</div>
					</div>
				</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
	<script type="text/javascript">
				$('#marque').change(function(){
					  $.ajax({
			          type: "POST",
			          url: "{{ url('/parc/filtre') }}",
			          success: function(data){
			            res='<option value="">---------</option>';
			            for(i=0;i<data.length;i++){
			            	res+='<option value="'+data[i]+'">'+data[i]+'</option>';
			            }
			            $('#model').html(res);
			          },
			          data: {
			          marque: $('#marque').val(),
			          _token: "{{ Session::token() }}"
			          }
			        });
				});
				function function1(event){
					
					if($('#marque').val() == '' || $('#model').val() == '' || $('#transformation').val() == '' || $('#carburant').val() == ''){
						event.preventDefault();
						alert('vueillez reseignez tous les champs !');
					}
					else
					{
						$("#myForm").submit();
					}
				}
			</script>
@stop