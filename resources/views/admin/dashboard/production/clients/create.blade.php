@extends('dash-master')
@section('content')
<style>
	#confirm{
		background-color: #FE5A31;
		border-color: #f14d08;
		color: #fff;
		outline: none;
		transition: 0.5s;
	}
	#confirm:hover{
		background-color: #f14d08;
		border-color: #FE5A31;
	}
</style>
<div class="right_col" role="main">
	<div class="">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
					{!! Form::open(array('class'=>'form-horizontal form-label-left','url'=>url('/dashboard/clients'))) !!}
                      <span class="section">Ajouter un client</span>

                      <div class="item form-group">
                        {!! Form::label('lastname','Nom * :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('lastname',null,array('id'=>'lastname','class'=>'form-control col-md-7 col-xs-12','data-validate-length-range'=>'3','data-validate-words'=>'1','required'=>'required')) !!}
                        </div>
                      </div>
                      <div class="item form-group">
                        {!! Form::label('firstname','Prénom * :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('firstname',null,array('id'=>'firstname','class'=>'form-control col-md-7 col-xs-12','data-validate-length-range'=>'3','data-validate-words'=>'1','required'=>'required')) !!}
                        </div>
                      </div>
                      <div class="item form-group">
                        {!! Form::label('cin','N° CIN * :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('cin',null,array('id'=>'cin','class'=>'form-control col-md-7 col-xs-12','data-validate-length-range'=>'3','data-validate-words'=>'1','required'=>'required')) !!}
                        </div>
                      </div>
                      <div class="item form-group">
                        {!! Form::label('permis','N° permis * :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('permis',null,array('id'=>'permis','class'=>'form-control col-md-7 col-xs-12','data-validate-length-range'=>'3','data-validate-words'=>'1','required'=>'required')) !!}
                        </div>
                      </div>
                      <div class="item form-group">
                        {!! Form::label('passport','N° Passport * :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('passport',null,array('id'=>'passport','class'=>'form-control col-md-7 col-xs-12','data-validate-length-range'=>'3','data-validate-words'=>'1','required'=>'required')) !!}
                        </div>
                      </div>
                      <div class="item form-group">
                        {!! Form::label('email','Email * :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::email('email',null,array('id'=>'email','class'=>'form-control col-md-7 col-xs-12','required'=>'required')) !!}
                        </div>
                      </div>
                      <div class="form-group">
                        {!! Form::label('birth_date','Date de Naissance * :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('birth_date',null,array('id'=>'birthday','class'=>'date-picker form-control col-md-7 col-xs-12','required'=>'required')) !!}
                        </div>
                      </div>
                      <div class="item form-group">
                        {!! Form::label('tel','Telephone * :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('tel',null,array('id'=>'telephone','class'=>'form-control col-md-7 col-xs-12','data-validate-length-range'=>'3','data-validate-words'=>'1','required'=>'required')) !!}
                        </div>
                      </div>
                      <div class="item form-group">
                        {!! Form::label('adresse','Adresse * :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::textarea('adresse',null,array('id'=>'adresse','class'=>'form-control col-md-7 col-xs-12')) !!}
                        </div>
                      </div>
                      <div class="item form-group">
                        {!! Form::label('city','Ville * :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('city',null,array('id'=>'ville','class'=>'form-control col-md-7 col-xs-12','data-validate-length-range'=>'3','data-validate-words'=>'1','required'=>'required')) !!}
                        </div>
                      </div>
                      <div class="item form-group">
						{!! Form::label('birth_city','Ville de Naissance * :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('birth_city',null,array('id'=>'villen','class'=>'form-control col-md-7 col-xs-12','data-validate-length-range'=>'3','data-validate-words'=>'1','required'=>'required')) !!}
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                        	{!! Form::submit('Valider',array('class'=>'btn btn-success','id'=>'confirm')) !!}
                        	<a href="{{ url('/dashboard/clients') }}">{!! Form::button('Annuler',array('class'=>'btn btn-default')) !!}</a>
                        </div>
                      </div>
                    <!--</form>-->
                    {!! Form::close() !!}
                  </div>
                </div>
              </div>
            </div>
          </div>
</div>
     <!-- bootstrap-daterangepicker -->
    <script>
      $(document).ready(function() {
        $('#birthday').daterangepicker({
          singleDatePicker: true,
          calender_style: "picker_4"
        }, function(start) {
          console.log(start.toISOString());
        });
      });
    </script>
    <!-- /bootstrap-daterangepicker -->
    <!-- validator -->
    <script>
      // initialize the validator function
      validator.message.date = 'not a real date';

      // validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
      $('form')
        .on('blur', 'input[required], input.optional, select.required', validator.checkField)
        .on('change', 'select.required', validator.checkField)
        .on('keypress', 'input[required][pattern]', validator.keypress);

      $('.multi.required').on('keyup blur', 'input', function() {
        validator.checkField.apply($(this).siblings().last()[0]);
      });

      $('form').submit(function(e) {
        e.preventDefault();
        var submit = true;

        // evaluate the form using generic validaing
        if (!validator.checkAll($(this))) {
          submit = false;
        }

        if (submit)
          this.submit();

        return false;
      });
    </script>
    <!-- /validator -->
@stop