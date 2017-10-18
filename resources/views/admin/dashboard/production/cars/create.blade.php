@extends('dash-master')
@section('content')

<style type="text/css">
  #file1{
    margin-top: 6px;
  }
</style>

<div class="right_col" role="main">
  <div class="">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
          {!! Form::open(array('class'=>'form-horizontal form-label-left','url'=>url('/dashboard/cars'),'files'=>'true')) !!}
                      <span class="section">Informations sur la voiture</span>

                      <div class="item form-group">
                        {!! Form::label('marque','Marque * :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('marque',null,array('id'=>'marque','class'=>'form-control col-md-7 col-xs-12','data-validate-length-range'=>'3','data-validate-words'=>'1','required'=>'required')) !!}
                        </div>
                      </div>
                      <div class="item form-group">
                        {!! Form::label('model','Model * :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('model',null,array('id'=>'model','class'=>'form-control col-md-7 col-xs-12','data-validate-length-range'=>'3','data-validate-words'=>'1','required'=>'required')) !!}
                        </div>
                      </div>
                      <div class="item form-group">
                        {!! Form::label('immatricule','N° immatricule * :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('immatricule',null,array('id'=>'immatricule','class'=>'form-control col-md-7 col-xs-12','data-validate-length-range'=>'3','data-validate-words'=>'1','required'=>'required')) !!}
                        </div>
                      </div>
                      <div class="item form-group">
                        {!! Form::label('carburant','Carburant * :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::select('carburant', array('d' => 'Diesel', 'e' => 'Essence'), null,array('class'=>'form-control col-md-7 col-xs-12')); !!}
                        </div>
                      </div>
                      <div class="item form-group">
                        {!! Form::label('transformation','Transformation * :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::select('transformation', array('a' => 'Automatique', 'm' => 'Manuelle'), null,array('class'=>'form-control col-md-7 col-xs-12')); !!}
                        </div>
                      </div>
                      <div class="item form-group">
                        {!! Form::label('color','Couleur * :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('color',null,array('id'=>'color','class'=>'form-control col-md-7 col-xs-12','data-validate-length-range'=>'3','data-validate-words'=>'1','required'=>'required')) !!}
                        </div>
                      </div>
                      <div class="form-group">
                        {!! Form::label('circulation_date','Date de Circulation * :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('circulation_date',null,array('id'=>'birthday','class'=>'date-picker form-control col-md-7 col-xs-12','required'=>'required')) !!}
                        </div>
                      </div>
                      <div class="item form-group">
                        {!! Form::label('price','Prix d\'achat * :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('price',null,array('id'=>'price','class'=>'form-control col-md-7 col-xs-12','data-validate-length-range'=>'3','data-validate-words'=>'1','required'=>'required')) !!}
                        </div>
                      </div>
                      <div class="item form-group">
                        {!! Form::label('km','Km vidange * :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('km',null,array('id'=>'km','class'=>'form-control col-md-7 col-xs-12','data-validate-length-range'=>'3','data-validate-words'=>'1','required'=>'required')) !!}
                        </div>
                      </div>
                      <div class="item form-group">
            {!! Form::label('rent_price','Prix de location * :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('rent_price',null,array('id'=>'rent_price','class'=>'form-control col-md-7 col-xs-12','data-validate-length-range'=>'3','data-validate-words'=>'1','required'=>'required')) !!}
                        </div>
                      </div>
                      <div class="item form-group">
                        {!! Form::label('gps','Gps * :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          {!! Form::checkbox('gps','1',false,array('class'=>'js-switch large form-control col-md-7 col-xs-12')) !!}
                        </div>
                      </div>
                      <div class="item form-group">
                        {!! Form::label('clim','Clim * :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-9 col-sm-9 col-xs-12">
                           {!! Form::checkbox('clim','1',false,array('class'=>'js-switch large form-control col-md-7 col-xs-12')) !!}
                        </div>
                      </div>
                      <div class="item form-group">
                        {!! Form::label('visible','Visible * :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-9 col-sm-9 col-xs-12">
                           {!! Form::checkbox('visible','1',false,array('class'=>'js-switch large form-control col-md-7 col-xs-12')) !!}
                        </div>
                      </div>
                      <div class="item form-group">
                        {!! Form::label('promotion','Promotion * :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-9 col-sm-9 col-xs-12">
                           {!! Form::checkbox('promotion','1',false,array('class'=>'js-switch large form-control col-md-7 col-xs-12')) !!}
                        </div>
                      </div>
                      <div class="item form-group">
                        {!! Form::label('file1','Choisir une photo :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          {!! Form::file('file1',array('id'=>'file1','class'=>'form-control col-md-7 col-xs-12')) !!}
                        </div>
                      </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          {!! Form::submit('Valider',array('class'=>'btn btn-success','id'=>'confirm')) !!}
                          <a href="{{ url('/dashboard/cars') }}">{!! Form::button('Annuler',array('class'=>'btn btn-default')) !!}</a>
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