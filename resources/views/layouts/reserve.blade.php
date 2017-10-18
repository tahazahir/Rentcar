@extends('master')
@section('content')
<!-- bootstrap-daterangepicker -->
    <script src="{{ url('js/moment/moment.min.js') }}"></script>
    <script src="{{ url('js/datepicker/daterangepicker.js') }}"></script>
    <!-- validator -->
    <script src="{{ url('vendors/validator/validator.js')}}"></script>
    <!-- DateJS -->
    <script src="{{ url('vendors/DateJS/build/date.js')}}"></script>
    <!-- Custom Theme Style -->
    <style type="text/css">
    	/** bootstrap-daterangepicker **/
.daterangepicker.dropdown-menu {
  font-size: 13px;
  padding: 0;
  overflow: hidden; }

.daterangepicker.picker_1 {
  background: #34495E;
  color: #ECF0F1; }

.daterangepicker.picker_1 table.table-condensed thead tr:first-child {
  background: #1ABB9C; }

.daterangepicker table.table-condensed thead tr:first-child th {
  line-height: 28px;
  text-align: center; }

.daterangepicker.picker_1 table.table-condensed thead tr {
  background: #213345; }

.daterangepicker table.table-condensed thead tr {
  line-height: 14px; }

.daterangepicker table.table-condensed tbody tr:first-child td {
  padding-top: 10px; }

.daterangepicker table.table-condensed th:first-child, .daterangepicker table.table-condensed td:first-child {
  padding-left: 12px; }

.daterangepicker table.table-condensed th:last-child, .daterangepicker table.table-condensed td:last-child {
  padding-right: 12px; }

.table-condensed > thead > tr > th, .table-condensed > tbody > tr > th, .table-condensed > tfoot > tr > th, .table-condensed > thead > tr > td, .table-condensed > tbody > tr > td, .table-condensed > tfoot > tr > td {
  padding: 5px 7px;
  text-align: center; }

.daterangepicker table.table-condensed tbody tr:last-child td {
  padding-bottom: 10px; }

.daterangepicker.picker_2 table.table-condensed thead tr:first-child {
  color: inherit; }

.daterangepicker.picker_2 table.table-condensed thead tr {
  color: #1ABB9C; }

.daterangepicker.picker_3 table.table-condensed thead tr:first-child {
  background: #1ABB9C;
  color: #ECF0F1; }

.daterangepicker.picker_4 table.table-condensed tbody td {
  background: #ECF0F1;
  color: #34495E;
  border: 1px solid #fff;
  padding: 4px 7px; }

.daterangepicker.picker_4 table.table-condensed tbody td.active {
  background: #536A7F;
  color: #fff; }

.daterangepicker.picker_4 table.table-condensed thead tr:first-child {
  background: #34495E;
  color: #ECF0F1; }

.xdisplay_input {
  width: 240px;
  overflow: hidden;
  padding: 0; }

.xdisplay {
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #ccc;
  margin-bottom: 20px;
  border: 1px solid rgba(0, 0, 0, 0.15);
  border-radius: 4px;
  width: 230px;
  overflow: hidden;
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175); }

.daterangepicker.opensright .ranges, .daterangepicker.opensright .calendar, .daterangepicker.openscenter .ranges, .daterangepicker.openscenter .calendar {
  float: right; }

.daterangepicker table {
  width: 100%;
  margin: 0; }

.daterangepicker td, .daterangepicker th {
  text-align: center;
  width: 20px;
  height: 20px;
  cursor: pointer;
  white-space: nowrap; }

.daterangepicker td.off {
  color: #999; }

.daterangepicker td.disabled {
  color: #999; }

.daterangepicker td.available:hover, .daterangepicker th.available:hover {
  background: #eee;
  color: #34495E; }

.daterangepicker td.in-range {
  background: #E4E7EA;
  border-radius: 0; }

.daterangepicker td.available + td.start-date {
  border-radius: 4px 0 0 4px; }

.daterangepicker td.in-range + td.end-date {
  border-radius: 0 4px 4px 0; }

.daterangepicker td.start-date.end-date {
  border-radius: 4px !important; }

.daterangepicker td.active, .daterangepicker td.active:hover {
  background-color: #536A7F;
  color: #fff; }

.daterangepicker td.week, .daterangepicker th.week {
  font-size: 80%;
  color: #ccc; }

.daterangepicker select.monthselect, .daterangepicker select.yearselect {
  font-size: 12px;
  padding: 1px;
  height: auto;
  margin: 0;
  cursor: default;
  height: 30px;
  border: 1px solid #ADB2B5;
  line-height: 30px;
  border-radius: 0px !important; }

.daterangepicker select.monthselect {
  margin-right: 2%;
  width: 56%; }

.daterangepicker select.yearselect {
  width: 40%; }

.daterangepicker select.hourselect, .daterangepicker select.minuteselect, .daterangepicker select.ampmselect {
  width: 50px;
  margin-bottom: 0; }

.daterangepicker_start_input {
  float: left; }

.daterangepicker_end_input {
  float: left;
  padding-left: 11px; }

.daterangepicker th.month {
  width: auto; }

.daterangepicker .daterangepicker_start_input label, .daterangepicker .daterangepicker_end_input label {
  color: #333;
  display: block;
  font-size: 11px;
  font-weight: normal;
  height: 20px;
  line-height: 20px;
  margin-bottom: 2px;
  text-shadow: #fff 1px 1px 0px;
  text-transform: uppercase;
  width: 74px; }

.daterangepicker .ranges input {
  font-size: 11px; }

.daterangepicker .ranges .input-mini {
  background-color: #eee;
  border: 1px solid #ccc;
  border-radius: 4px;
  color: #555;
  display: block;
  font-size: 11px;
  height: 30px;
  line-height: 30px;
  vertical-align: middle;
  margin: 0 0 10px 0;
  padding: 0 6px;
  width: 74px; }

.daterangepicker .ranges .input-mini:hover {
  cursor: pointer; }

.daterangepicker .ranges ul {
  list-style: none;
  margin: 0;
  padding: 0; }

.daterangepicker .ranges li {
  font-size: 13px;
  background: #f5f5f5;
  border: 1px solid #f5f5f5;
  color: #536A7F;
  padding: 3px 12px;
  margin-bottom: 8px;
  border-radius: 5px;
  cursor: pointer; }

.daterangepicker .ranges li.active, .daterangepicker .ranges li:hover {
  background: #536A7F;
  border: 1px solid #536A7F;
  color: #fff; }

.daterangepicker .calendar {
  display: none;
  max-width: 270px; }

.daterangepicker.show-calendar .calendar {
  display: block; }

.daterangepicker .calendar.single .calendar-date {
  border: none; }

.daterangepicker.single .ranges, .daterangepicker.single .calendar {
  float: none; }

.daterangepicker .ranges {
  width: 160px;
  text-align: left;
  margin: 4px; }

.daterangepicker .ranges .range_inputs > div {
  float: left; }

.daterangepicker .ranges .range_inputs > div:nth-child(2) {
  padding-left: 11px; }

.daterangepicker.opensleft .ranges, .daterangepicker.opensleft .calendar {
  float: left;
  margin: 4px; }

.daterangepicker .icon {
  width: 20px;
  height: 20px;
  display: inline-block;
  vertical-align: middle; }

/** bootstrap-daterangepicker **/
    </style>











	<div class="container vehicules">
		<div class="row cent-div">
			<div class="h2">Reserver</div>
		</div>
		<div class="row">
			<div class="col-lg-3 col-md-3 col-sm-12">
			<div class="v-item">
				<div class="row">
					<div class="col-lg-12 v-item-img">
						<img style="width: 218px;height: 124px;" src="{{ $car->picture }}" alt="alpha"/>
					</div>
					<div class="col-lg-12 v-item-description">
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
							<div class="pricee clim col-md-10 col-md-offset-1">
								{{ $car->rent_price }}DH
							</div>
						</div>
					</div>
				</div>
				</div>
			</div>
				<div class="col-lg-9 col-md-9 col-sm-12 res">
                <div class="x_panel">
                  <div class="x_content">
					{!! Form::open(array('class'=>'form-horizontal form-label-left','url'=>url('/parc',['id'=>$car->id]))) !!}
					<input type="hidden" name="car_id" value="{{ $car->id }}">
                      <div class="item form-group">
                        {!! Form::label('lastname','Nom * :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('lastname',null,array('id'=>'lastname','class'=>'form-controle col-md-7 col-xs-12','data-validate-length-range'=>'3','data-validate-words'=>'1','required'=>'required')) !!}
                        </div>
                      </div>
                      <div class="item form-group">
                        {!! Form::label('firstname','Prénom * :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('firstname',null,array('id'=>'firstname','class'=>'form-controle col-md-7 col-xs-12','data-validate-length-range'=>'3','data-validate-words'=>'1','required'=>'required')) !!}
                        </div>
                      </div>
                      <div class="item form-group">
                        {!! Form::label('cin','N° CIN * :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('cin',null,array('id'=>'cin','class'=>'form-controle col-md-7 col-xs-12','data-validate-length-range'=>'3','data-validate-words'=>'1','required'=>'required')) !!}
                        </div>
                      </div>
                      <div class="item form-group">
                        {!! Form::label('permis','N° permis * :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('permis',null,array('id'=>'permis','class'=>'form-controle col-md-7 col-xs-12','data-validate-length-range'=>'3','data-validate-words'=>'1','required'=>'required')) !!}
                        </div>
                      </div>
                      <div class="item form-group">
                        {!! Form::label('passport','N° Passport * :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('passport',null,array('id'=>'passport','class'=>'form-controle col-md-7 col-xs-12','data-validate-length-range'=>'3','data-validate-words'=>'1','required'=>'required')) !!}
                        </div>
                      </div>
                      <div class="item form-group">
                        {!! Form::label('email','Email * :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::email('email',null,array('id'=>'email','class'=>'form-controle col-md-7 col-xs-12','required'=>'required')) !!}
                        </div>
                      </div>
                      <div class="form-group">
                        {!! Form::label('birth_date','Date de Naissance * :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('birth_date',null,array('id'=>'birthday','class'=>'date-picker form-controle col-md-7 col-xs-12','required'=>'required')) !!}
                        </div>
                      </div>
                      <div class="item form-group">
                        {!! Form::label('tel','Telephone * :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('tel',null,array('id'=>'telephone','class'=>'form-controle col-md-7 col-xs-12','data-validate-length-range'=>'3','data-validate-words'=>'1','required'=>'required')) !!}
                        </div>
                      </div>
                      <div class="item form-group">
                        {!! Form::label('adresse','Adresse * :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::textarea('adresse',null,array('id'=>'adresse','class'=>'form-controle col-md-7 col-xs-12')) !!}
                        </div>
                      </div>
                      <div class="item form-group">
                        {!! Form::label('city','Ville * :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('city',null,array('id'=>'ville','class'=>'form-controle col-md-7 col-xs-12','data-validate-length-range'=>'3','data-validate-words'=>'1','required'=>'required')) !!}
                        </div>
                      </div>
                      <div class="item form-group">
						{!! Form::label('birth_city','Ville de Naissance * :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('birth_city',null,array('id'=>'villen','class'=>'form-controle col-md-7 col-xs-12','data-validate-length-range'=>'3','data-validate-words'=>'1','required'=>'required')) !!}
                        </div>
                      </div>
                      <div class="item form-group">
                        {!! Form::label('depart_place','Lieu de départ * :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('depart_place',null,array('id'=>'depart_place','class'=>'form-controle col-md-7 col-xs-12')) !!}
                        </div>
                      </div>
                      <div class="item form-group">
                        {!! Form::label('return_place','Lieu de retour * :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('return_place',null,array('id'=>'return_place','class'=>'form-controle col-md-7 col-xs-12')) !!}
                        </div>
                      </div>
                      <div class="form-group">
                        {!! Form::label('depart_date','Date de départ * :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('depart_date',null,array('id'=>'date1','class'=>'date-picker form-controle col-md-7 col-xs-12','required'=>'required')) !!}
                        </div>
                      </div>
                      <div class="item form-group">
                        {!! Form::label('depart_hour','Heure de départ * :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('depart_hour',null,array('id'=>'depart_hour','class'=>'form-controle col-md-7 col-xs-12','placeholder'=>'exemple: 12:00')) !!}
                        </div>
                      </div>
                      <div class="item form-group">
                        {!! Form::label('return_date','Date de retour * :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('return_date',null,array('id'=>'date2','class'=>'date-picker form-controle col-md-7 col-xs-12')) !!}
                        </div>
                      </div>
                      <div class="item form-group">
                        {!! Form::label('return_hour','Heure de retour * :',array('class'=>'control-label col-md-3 col-sm-3 col-xs-12')) !!}
                        <div class="col-md-6 col-sm-6 col-xs-12">
                        {!! Form::text('return_hour',null,array('id'=>'return_hour','class'=>'form-controle col-md-7 col-xs-12','placeholder'=>'exemple: 12:00')) !!}
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
      });
    </script>
@stop