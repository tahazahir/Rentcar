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
  #confirm1 {
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
  .sh{
    overflow: hidden;
  }
  .sh .item{

  }
</style>
<div class="right_col" role="main">
	<div class="">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
              {!! Form::open(array('class'=>'form-horizontal form-label-left','url'=>url('/dashboard/contrats'))) !!}
                <div class="x_panel">
                  <div class="x_content">
				            <span class="section">Informations sur le clients</span>
                      <div class="item form-group">
                        {!! Form::label('search','Nom * :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="hidden" name="client_id" id="client_id" value="{{ $contrat->client->id }}">
                        {!! Form::text('search',$contrat->client->lastname.' '.$contrat->client->firstname.','.$contrat->client->cin,array('id'=>'search','class'=>'form-control col-md-7 col-xs-12')) !!}
                        </div>
                      </div>
                  </div>
                </div>
                <div class="x_panel">
                  <div class="x_content">
                    <span class="section">Caution</span>
                      <div class="item form-group">
                        {!! Form::label('type_caution','Type de caution :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('type_caution',$contrat->type_caution,array('id'=>'type_caution','class'=>'form-control col-md-7 col-xs-12')) !!}
                        </div>
                      </div>
                      <div class="item form-group">
                        {!! Form::label('num_caution','Numero de caution :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('num_caution',$contrat->num_caution,array('id'=>'num_caution','class'=>'form-control col-md-7 col-xs-12')) !!}
                        </div>
                      </div>
                  </div>
                </div>
                <div class="x_panel sh">
                  <div class="x_content">
                      <span style="border-bottom:none;" class="section">Information sur le 2ème Conducteur : </span>
                      <input type="hidden" id="condenable" name="condenable" value="0">
                      <input type="hidden" id="conductor_id" name="conductor_id" value="{{ $contrat->conductor_id }}">
                      <div class="item form-group">
                        {!! Form::label('lastname','Nom * :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('lastname',$contrat->conductor->lastname,array('id'=>'lastname','class'=>'form-control col-md-7 col-xs-12')) !!}
                        </div>
                      </div>
                      <div class="item form-group">
                        {!! Form::label('firstname','Prénom * :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('firstname',$contrat->conductor->firstname,array('id'=>'firstname','class'=>'form-control col-md-7 col-xs-12')) !!}
                        </div>
                      </div>
                      <div class="item form-group">
                        {!! Form::label('cin','N° CIN * :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('cin',$contrat->conductor->cin,array('id'=>'cin','class'=>'form-control col-md-7 col-xs-12')) !!}
                        </div>
                      </div>
                      <div class="item form-group">
                        {!! Form::label('permis','N° permis * :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('permis',$contrat->conductor->permis,array('id'=>'permis','class'=>'form-control col-md-7 col-xs-12')) !!}
                        </div>
                      </div>
                      <div class="item form-group">
                        {!! Form::label('passport','N° Passport * :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('passport',$contrat->conductor->passport,array('id'=>'passport','class'=>'form-control col-md-7 col-xs-12')) !!}
                        </div>
                      </div>
                      <div class="item form-group">
                        {!! Form::label('email','Email * :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::email('email',$contrat->conductor->email,array('id'=>'email','class'=>'form-control col-md-7 col-xs-12')) !!}
                        </div>
                      </div>
                      <div class="form-group item">
                        {!! Form::label('birth_date','Date de Naissance * :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('birth_date',$contrat->conductor->birth_date,array('id'=>'birthday','class'=>'date-picker form-control col-md-7 col-xs-12')) !!}
                        </div>
                      </div>
                      <div class="item form-group">
                        {!! Form::label('tel','Telephone * :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('tel',$contrat->conductor->tel,array('id'=>'telephone','class'=>'form-control col-md-7 col-xs-12')) !!}
                        </div>
                      </div>
                      <div class="item form-group">
                        {!! Form::label('adresse','Adresse * :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::textarea('adresse',$contrat->conductor->adresse,array('id'=>'adresse','class'=>'form-control col-md-7 col-xs-12')) !!}
                        </div>
                      </div>
                      <div class="item form-group">
                        {!! Form::label('city','Ville * :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('city',$contrat->conductor->city,array('id'=>'ville','class'=>'form-control col-md-7 col-xs-12')) !!}
                        </div>
                      </div>
                      <div class="item form-group">
            {!! Form::label('birth_city','Ville de Naissance * :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('birth_city',$contrat->conductor->birth_city,array('id'=>'villen','class'=>'form-control col-md-7 col-xs-12')) !!}
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
                        <input type="hidden" name="car_id" id="car_id" value="{{ $contrat->car->id }}">
                        {!! Form::text('car',$contrat->car->marque.' '.$contrat->car->model.','.$contrat->car->immatricule,array('id'=>'car','class'=>'form-control col-md-7 col-xs-12')) !!}
                        </div>
                      </div>
                      <div class="item form-group">
                        {!! Form::label('depart_place','Lieu de départ * :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('depart_place',$contrat->depart_place,array('id'=>'depart_place','class'=>'form-control col-md-7 col-xs-12')) !!}
                        </div>
                      </div>
                      <div class="item form-group">
                        {!! Form::label('return_place','Lieu de retour * :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('return_place',$contrat->return_place,array('id'=>'return_place','class'=>'form-control col-md-7 col-xs-12')) !!}
                        </div>
                      </div>
                      <div class="form-group">
                        {!! Form::label('depart_date','Date de départ * :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('depart_date',$contrat->depart_date,array('id'=>'date1','class'=>'date-picker form-control col-md-7 col-xs-12','required'=>'required')) !!}
                        </div>
                      </div>
                      <div class="item form-group">
                        {!! Form::label('depart_hour','Heure de départ * :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('depart_hour',$contrat->depart_hour,array('id'=>'depart_hour','class'=>'form-control col-md-7 col-xs-12','placeholder'=>'exemple: 12:00')) !!}
                        </div>
                      </div>
                      <div class="item form-group">
                        {!! Form::label('return_date','Date de retour * :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('return_date',$contrat->return_date,array('id'=>'date2','class'=>'date-picker form-control col-md-7 col-xs-12')) !!}
                        </div>
                      </div>
                      <div class="item form-group">
                        {!! Form::label('return_hour','Heure de retour * :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('return_hour',$contrat->return_hour,array('id'=>'return_hour','class'=>'form-control col-md-7 col-xs-12','placeholder'=>'exemple: 12:00')) !!}
                        </div>
                      </div>
                      <div class="item form-group">
                        {!! Form::label('nbdayrent','Nombre de jour * :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('nbdayrent',$contrat->nbdayrent,array('id'=>'nbdayrent','class'=>'form-control col-md-7 col-xs-12','onkeyup'=>'Calcul()')) !!}
                        </div>
                      </div>
                      <div class="item form-group">
                        {!! Form::label('pricefor1day','Prix de location * :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('pricefor1day',$contrat->price/$contrat->nbdayrent,array('id'=>'pricefor1day','class'=>'form-control col-md-7 col-xs-12','onkeyup'=>'Calcul()')) !!}
                        </div>
                      </div>
                      <div class="item form-group">
                        {!! Form::label('price','Total à Payer * :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('price',$contrat->price,array('id'=>'price','class'=>'form-control col-md-7 col-xs-12')) !!}
                        </div>
                      </div>
                  </div>
                </div>
                <div class="x_panel">
                  <div class="x_content">
                    <span class="section">Etat de voiture</span>
                      <div class="item form-group">
                        {!! Form::label('depart_km','Kilometrage au départ :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('depart_km',$contrat->depart_km,array('id'=>'depart_km','class'=>'form-control col-md-7 col-xs-12')) !!}
                        </div>
                      </div>
                      <div class="item form-group">
                        {!! Form::label('return_km','Kilometrage au retour :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('return_km',$contrat->return_km,array('id'=>'return_km','class'=>'form-control col-md-7 col-xs-12')) !!}
                        </div>
                      </div>
                      <div class="item form-group showing">
                        {!! Form::label('depart_etat_comm','Commentaires sur les degat (depart) :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        @if($contrat->depart_etat_comm == null)
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::textarea('depart_etat_comm','Voiture en parfaite etat',array('id'=>'depart_etat_comm','class'=>'form-control col-md-7 col-xs-12')) !!}
                        </div>
                        @else
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::textarea('depart_etat_comm',$contrat->depart_etat_comm,array('id'=>'depart_etat_comm','class'=>'form-control col-md-7 col-xs-12')) !!}
                        </div>
                        @endif
                        
                      </div>
                      <div class="item form-group showing1">
                        {!! Form::label('return_etat_comm','Commentaires sur les degat (retour) :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        @if($contrat->return_etat_comm == null)
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::textarea('return_etat_comm','Voiture en parfaite etat',array('id'=>'return_etat_comm','class'=>'form-control col-md-7 col-xs-12')) !!}
                        </div>
                        @else
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::textarea('return_etat_comm',$contrat->return_etat_comm,array('id'=>'return_etat_comm','class'=>'form-control col-md-7 col-xs-12')) !!}
                        </div>
                        @endif
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          {!! Form::submit('Modifier',array('class'=>'btn btn-success','id'=>'confirm1','onclick'=>'send(event)')) !!}
                          <a href="{{ url('/dashboard/contrats') }}">{!! Form::button('Annuler',array('class'=>'btn btn-default')) !!}</a>
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

      $('#comm_dep').change(function(){
          if($(this).prop("checked") == true) {
              $('.showing').css("display","block");
          } else {
              $('.showing').css("display","none");
          }
        });

      $('#comm_ret').change(function(){
          if($(this).prop("checked") == true) {
              $('.showing1').css("display","block");
          } else {
              $('.showing1').css("display","none");
          }
        });

      function send(event){
        event.preventDefault();
        $.ajax({
          type: "PUT",
          url: "{{ url('/dashboard/contrats',['id'=>$contrat->id]) }}",
          success: function(){
            alert('Contrat modifiée');
            window.location = "{{ url('/dashboard/contrats') }}";
          },
          data: {
          client_id: $('#client_id').val(),
          car_id: $('#car_id').val(),
          depart_place: $('#depart_place').val(),
          return_place: $('#return_place').val(),
          depart_date: $('#date1').val(),
          depart_hour: $('#depart_hour').val(),
          return_date: $('#date2').val(),
          return_hour: $('#return_hour').val(),
          nbdayrent: $('#nbdayrent').val(),
          conductor_id: $('#conductor_id').val(),
          num_caution: $('#num_caution').val(),
          type_caution: $('#type_caution').val(),
          lastname: $('#lastname').val(),
          firstname: $('#firstname').val(),
          cin: $('#cin').val(),
          permis: $('#permis').val(),
          passport: $('#passport').val(),
          adresse: $('#adresse').val(),
          email: $('#email').val(),
          birth_date: $('#birthday').val(),
          tel: $('#telephone').val(),
          city: $('#ville').val(),
          birth_city: $('#villen').val(),
          price: $('#price').val(),
          depart_km: $('#depart_km').val(),
          return_km: $('#return_km').val(),
          depart_etat_comm: $('#depart_etat_comm').val(),
          return_etat_comm: $('#return_etat_comm').val(),
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
        $('#ok3').change(function(){
          if($(this).prop("checked") == true) {
            $('#condenable').val(1);
            $('.sh').css("height","auto");
            $('.sh .item').css("display","block");
          } else {
            $('#condenable').val(0);
            $('.sh').css("height","55px");
            $('.sh .item').css("display","none");
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