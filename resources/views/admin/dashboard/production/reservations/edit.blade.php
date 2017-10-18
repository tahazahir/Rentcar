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
                <div class="x_panel">
                  <div class="x_content">
				            <span class="section">Choisir un client existant</span>
                      <div class="item form-group">
                        {!! Form::label('search','Nom * :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="hidden" name="client_id" id="client_id" value='{{ $reservation->client_id }}'>
                        {!! Form::text('search',$reservation->client->lastname.' '.$reservation->client->firstname.','.$reservation->client->cin,array('id'=>'search','class'=>'form-control col-md-7 col-xs-12')) !!}
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
                        <input type="hidden" name="car_id" id="car_id" value='{{ $reservation->car_id }}'>
                        {!! Form::text('car',$reservation->car->marque.' '.$reservation->car->model.','.$reservation->car->immatricule,array('id'=>'car','class'=>'form-control col-md-7 col-xs-12')) !!}
                        </div>
                      </div>
                      <div class="item form-group">
                        {!! Form::label('depart_place','Lieu de départ * :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('depart_place',$reservation->depart_place,array('id'=>'depart_place','class'=>'form-control col-md-7 col-xs-12')) !!}
                        </div>
                      </div>
                      <div class="item form-group">
                        {!! Form::label('return_place','Lieu de retour * :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('return_place',$reservation->return_place,array('id'=>'return_place','class'=>'form-control col-md-7 col-xs-12')) !!}
                        </div>
                      </div>
                      <div class="form-group">
                        {!! Form::label('depart_date','Date de départ * :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('depart_date',$reservation->depart_date,array('id'=>'date1','class'=>'date-picker form-control col-md-7 col-xs-12','required'=>'required')) !!}
                        </div>
                      </div>
                      <div class="item form-group">
                        {!! Form::label('depart_hour','Heure de départ * :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('depart_hour',$reservation->depart_hour,array('id'=>'depart_hour','class'=>'form-control col-md-7 col-xs-12','placeholder'=>'exemple: 12:00')) !!}
                        </div>
                      </div>
                      <div class="item form-group">
                        {!! Form::label('return_date','Date de retour * :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('return_date',$reservation->return_date,array('id'=>'date2','class'=>'date-picker form-control col-md-7 col-xs-12')) !!}
                        </div>
                      </div>
                      <div class="item form-group">
                        {!! Form::label('return_hour','Heure de retour * :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('return_hour',$reservation->return_hour,array('id'=>'return_hour','class'=>'form-control col-md-7 col-xs-12','placeholder'=>'exemple: 12:00')) !!}
                        </div>
                      </div>
                      <div class="item form-group">
                        {!! Form::label('nbdayrent','Nombre de jour * :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('nbdayrent',$reservation->nbdayrent,array('id'=>'nbdayrent','class'=>'form-control col-md-7 col-xs-12','onkeyup'=>'Calcul()')) !!}
                        </div>
                      </div>
                      <div class="item form-group">
                        {!! Form::label('pricefor1day','Prix de location * :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        @if($reservation->nbdayrent == 0)
                        {!! Form::text('pricefor1day',null,array('id'=>'pricefor1day','class'=>'form-control col-md-7 col-xs-12','onkeyup'=>'Calcul()')) !!}
                        @else
                        {!! Form::text('pricefor1day',$reservation->price/$reservation->nbdayrent,array('id'=>'pricefor1day','class'=>'form-control col-md-7 col-xs-12','onkeyup'=>'Calcul()')) !!}
                        
                        @endif
                        </div>
                      </div>
                      <div class="item form-group">
                        {!! Form::label('price','Total à Payer * :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('price',$reservation->price,array('id'=>'price','class'=>'form-control col-md-7 col-xs-12')) !!}
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
          type: "PUT",
          url: "{{ url('/dashboard/reservations',['id'=>$reservation->id]) }}",
          success: function(){
            alert('Reservation modifiée');
            window.location = "{{ url('/dashboard/reservations') }}";
          },
          data: {
          client_id: $('#client_id').val(),
          car_id: $('#car_id').val(),
          depart_place: $('#depart_place').val(),
          return_place: $('#return_place').val(),
          depart_date: $('#depart_date').val(),
          depart_hour: $('#depart_hour').val(),
          return_date: $('#return_date').val(),
          return_hour: $('#return_hour').val(),
          nbdayrent: $('#nbdayrent').val(),
          price : $('#price').val(),
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