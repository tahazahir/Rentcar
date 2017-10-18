<div class="container">
		<div class="row reservation">
			{!! Form::open() !!}
				<div class="col-lg-2 col-md-2">
					<div class="form-group">
						<?php $marque=[]; ?>
						{!! Form::label('marque','Marque : ') !!}
						{!! Form::select('marque[]',$marque,null,['class'=>'form-control']) !!}
					</div>
				</div>
				<div class="col-lg-2 col-md-2">
					<div class="form-group">
						<?php $model=[]; ?>
						{!! Form::label('model','Model : ') !!}
						{!! Form::select('model[]',[],null,['class'=>'form-control']) !!}
					</div>
				</div>
				<div class="col-lg-2 col-md-2">
					<div class="form-group">
						<?php $carburant=[]; ?>
						{!! Form::label('carburant','Carburant : ') !!}
						{!! Form::select('carburant[]',$carburant,null,['class'=>'form-control']) !!}
					</div>
				</div>
				<div class="col-lg-2 col-md-2">
					<div class="form-group">
						<?php $transformation=[]; ?>
						{!! Form::label('transformation','Transformation : ') !!}
						{!! Form::select('transformation[]',$transformation,null,['class'=>'form-control']) !!}
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="form-group">
						{!! Form::label('submit','Trouvez votre voiture:',['style'=>'opacity:1;','id'=>'sub']) !!}
						{{!! Form::button('<span>Trouver</span>&nbsp;&nbsp;&nbsp;<i class="fa fa-search" aria-hidden="true"></i>', array('type' => 'submit', 'class' => 'form-control btn btn-primary','id'=>'confirm')) !!}}
							
					</div>
				</div>
			{!! Form::close() !!}
		</div>
	</div>