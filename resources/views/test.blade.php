@extends('dash-master')
@section('content')
<div class="right_col" role="main">
  <div class="">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_content">
					{{ $conductor_id }}
                  </div>
                </div>
              </div>
            </div>
          </div>
</div>
<script type="text/javascript">
	$('#search').autocomplete({
		source: "{{ route('test.autocomplete') }}",
		minlenght: 1,
		autoFocus: true,
		select: function(event,ui){
			$('#search').val(ui.item.value);
		}
	});
	
	function send(event){
		event.preventDefault();
		$.ajax({
			type: "POST",
			url: "{{ url('/test') }}",
			data: {name: $('#name').val(),_token: "{{ Session::token() }}"}
		});
	}
</script>
@stop