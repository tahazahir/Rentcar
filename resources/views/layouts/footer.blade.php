<div class="container-fluid footer">
		<div class="row footer-up">
			<div class="container">
				<div class="row">
					<div class="h1 col-lg-12 contact_h1"><p>Contact</p></div>
				</div>
				<div class="row">
					<div class="info col-lg-6 col-md-6">
						<div class="h1">06.61.61.35.80</div>
						<p>Address: 4578 Marmora Road,Glasgow D04 89GR</p>
						<p>Hours: 6am-4pm PST M-Th; 6am-3pm PST Fri</p>
						<p>E-mail: <span>info@demolink.org</span></p>
					</div>
					<div class="form-contact col-lg-6 col-md-6">
						{!! Form::open() !!}
							<div class="form-group">
								{!! Form::text('nom',null,['class'=>'form-control','placeholder'=>'Nom']) !!}
							</div>
							<div class="form-group">
								{!! Form::text('email',null,['class'=>'form-control','placeholder'=>'Email']) !!}
							</div>
							<div class="form-group">
								{!! Form::text('tel',null,['class'=>'form-control','placeholder'=>'Tel']) !!}
							</div>
							<div class="form-group">
								{!! Form::textarea('message',null,['class'=>'form-control','placeholder'=>'Message']) !!}
							</div>
							<div class="form-group">
								{!! Form::submit('Envoyer',['class'=>'form-control btn btn-primary','id'=>'confirm']) !!}
							</div>
							
						{!! Form::close() !!}
					</div>
				</div>
			</div>		
		</div>
		<div class="row footer-down">
			<div class="container">
			<div class="col-lg-3 col-md-4 col-sm-center droit">
				<p><span>ONERENTCAR</span> - 2016 Tous droits réservés</p>
			</div>
			<div class="col-lg-3 col-lg-push-6 col-md-3 col-md-push-5 soc">
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 soc-item">
						<i class="fa fa-facebook fa-2x" aria-hidden="true"></i>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 soc-item">
						<i class="fa fa-twitter fa-2x" aria-hidden="true"></i>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 soc-item">
						<i class="fa fa-linkedin fa-2x" aria-hidden="true"></i>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 soc-item">
						<i class="fa fa-google-plus fa-2x" aria-hidden="true"></i>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>