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
              {!! Form::open(array('class'=>'form-horizontal form-label-left','url'=>url('/dashboard/reservations'))) !!}
                <div class="x_panel showing" style="height:55px;overflow:hidden;">
                  <div class="x_content">
                      <span style="border-bottom:none;" class="section">Création d'un nouveau client : <input class="js-switch large" name="ok" type="checkbox" value="1" id="ok"></span>
                      <br>
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
                          {!! Form::submit('Ajouter',array('class'=>'btn btn-success','id'=>'confirm','onclick'=>'send(event)')) !!}
                          <a href="{{ url('/dashboard/clients') }}">{!! Form::button('Annuler',array('class'=>'btn btn-default')) !!}</a>
                        </div>
                      </div>
                  </div>
                </div>
                {!! Form::close() !!}





















              {!! Form::open(array('class'=>'form-horizontal form-label-left','url'=>url('/dashboard/reservations'))) !!}
                <div class="x_panel">
                  <div class="x_content">
				            <span class="section">Choisir un client existant</span>
                      <div class="item form-group">
                        {!! Form::label('search','Nom * :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="hidden" name="client_id" id="client_id" value=null>
                        {!! Form::text('search',null,array('id'=>'search','class'=>'form-control col-md-7 col-xs-12')) !!}
                        </div>
                      </div>
                  </div>
                </div>
                <div class="x_panel">
                  <div class="x_content">
                    <span class="section">Information sur la voiture</span>
                      <div class="item form-group">
                        {!! Form::label('car','Voiture * :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="hidden" name="car_id" id="car_id" value=null>
                        {!! Form::text('car',null,array('id'=>'car','class'=>'form-control col-md-7 col-xs-12')) !!}
                        </div>
                      </div>
                      <div class="item form-group">
                        {!! Form::label('depart_place','Lieu de départ * :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('depart_place',null,array('id'=>'depart_place','class'=>'form-control col-md-7 col-xs-12')) !!}
                        </div>
                      </div>
                      <div class="item form-group">
                        {!! Form::label('return_place','Lieu de retour * :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('return_place',null,array('id'=>'return_place','class'=>'form-control col-md-7 col-xs-12')) !!}
                        </div>
                      </div>
                      <div class="form-group">
                        {!! Form::label('depart_date','Date de départ * :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('depart_date',null,array('id'=>'date1','class'=>'date-picker form-control col-md-7 col-xs-12','required'=>'required')) !!}
                        </div>
                      </div>
                      <div class="item form-group">
                        {!! Form::label('depart_hour','Heure de départ * :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('depart_hour',null,array('id'=>'depart_hour','class'=>'form-control col-md-7 col-xs-12','placeholder'=>'exemple: 12:00')) !!}
                        </div>
                      </div>
                      <div class="item form-group">
                        {!! Form::label('return_date','Date de retour * :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('return_date',null,array('id'=>'date2','class'=>'date-picker form-control col-md-7 col-xs-12')) !!}
                        </div>
                      </div>
                      <div class="item form-group">
                        {!! Form::label('return_hour','Heure de retour * :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('return_hour',null,array('id'=>'return_hour','class'=>'form-control col-md-7 col-xs-12','placeholder'=>'exemple: 12:00')) !!}
                        </div>
                      </div>
                      <div class="item form-group">
                        {!! Form::label('nbdayrent','Nombre de jour * :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('nbdayrent',"0",array('id'=>'nbdayrent','class'=>'form-control col-md-7 col-xs-12','onkeyup'=>'Calcul()')) !!}
                        </div>
                      </div>
                      <div class="item form-group">
                        {!! Form::label('pricefor1day','Prix de location * :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('pricefor1day',"0",array('id'=>'pricefor1day','class'=>'form-control col-md-7 col-xs-12','onkeyup'=>'Calcul()')) !!}
                        </div>
                      </div>
                      <div class="item form-group">
                        {!! Form::label('price','Total à Payer * :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('price',"0",array('id'=>'price','class'=>'form-control col-md-7 col-xs-12')) !!}
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          {!! Form::submit('Ajouter',array('class'=>'btn btn-success','id'=>'confirm')) !!}
                          <a href="{{ url('/dashboard/clients') }}">{!! Form::button('Annuler',array('class'=>'btn btn-default')) !!}</a>
                        </div>
                      </div>
                  
                  </div>
                </div>
                {!! Form::close() !!}
              </div>
            </div>
          </div>
</div>
    <script type="text/javascript">

      function Calcul(){
        nbdayrent = $('#nbdayrent').val();
        pricefor1day = $('#pricefor1day').val();
        tot = nbdayrent*pricefor1day;
        $('#price').val(tot);
      }

      $('#search').autocomplete({
        source: "{{ route('admin.dashboard.production.clients.autocomplete') }}",
        minlenght: 1,
        autoFocus: true,
        select: function(event,ui){
          $('#search').val(ui.item.value);
          $('#client_id').val(ui.item.id);
        }
      });

      $('#car').autocomplete({
        source: "{{ route('admin.dashboard.production.cars.autocomplete') }}",
        minlenght: 1,
        autoFocus: true,
        select: function(event,ui){
          $('#car').val(ui.item.value);
          $('#car_id').val(ui.item.id);
        }
      });

      function send(event){
        event.preventDefault();
        $.ajax({
          type: "POST",
          url: "{{ url('/dashboard/clients') }}",
          success: function(){
            alert('Client ajouté');
            firstname = $('#firstname').val();
            lastname = $('#lastname').val();
            cin = $('#cin').val();
            $('#search').val(lastname+' '+firstname+','+cin);
            $('.showing').css("height","55px");
            $('#ok').prop("checked") = false;
          },
          data: {
          firstname: $('#firstname').val(),
          lastname: $('#lastname').val(),
          cin: $('#cin').val(),
          permis: $('#permis').val(),
          passport: $('#passport').val(),
          email: $('#email').val(),
          birth_date: $('#birthday').val(),
          tel: $('#telephone').val(),
          adresse: $('#adresse').val(),
          city: $('#ville').val(),
          birth_city: $('#villen').val(),
          _token: "{{ Session::token() }}"
          }
        });
      }
    </script>
     <!-- bootstrap-daterangepicker -->
    <script>
      $(document).ready(function() {
        $('#birthday').daterangepicker({
          singleDatePicker: true,
          calender_style: "picker_4"
        }, function(start) {
          console.log(start.toISOString());
        });
        $('#date1').daterangepicker({
          singleDatePicker: true,
          calender_style: "picker_4"
        }, function(start) {
          console.log(start.toISOString());
        });
        $('#date2').daterangepicker({
          singleDatePicker: true,
          calender_style: "picker_4"
        }, function(start) {
          console.log(start.toISOString());
        });
        $('#ok').change(function(){
          if($(this).prop("checked") == true) {
              $('.showing').css("height","auto");
          } else {
              $('.showing').css("height","55px");
          }
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