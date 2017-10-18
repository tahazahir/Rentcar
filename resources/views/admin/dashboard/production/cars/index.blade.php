@extends('dash-master')
@section('content')
	<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Liste des voitures</h3>
                <a href="{{ url('/dashboard/cars/create') }}"><input type="button" class="btn" id="confirm" value="Ajouter"/></a>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  
                  <div class="x_content">
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>Action</th>
                          <th>Photo</th>
                          <th>Immatriculation</th>	
                          <th>Marque</th>
                          <th>Carburant</th>
                          <th>Transformation</th>
                          <th>Couleur</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($cars as $car)
                        <tr>
                          <td>
                          	<a href="{{ url('dashboard/cars',['id'=>$car->id]) }}"><i class="fa fa-pencil-square"></i></a>
                          	<a href="{{ url('/dashboard/cars/delete',['id'=>$car->id]) }}"><i class="fa fa-trash"></i></a>
                          </td>	
                          <td style="padding: 8px 0px;text-align: center;"><img style="width: 100px;height: 57px;" src="{{ $car->picture }}"/></td>
                          <td>{{ $car->immatricule }}</td>
                          <td>{{ $car->marque }} {{ $car->model }}</td>
                          <td>
                            @if($car->carburant == 'd')
                              Diesel
                            @else
                              Essence
                            @endif
                          </td>
                          <td>
                            @if($car->carburant == 'a')
                              Automatique
                            @else
                              Manuelle
                            @endif
                          </td>
                          <td>{{ $car->color }}</td> 
                        </tr>
                        @endforeach
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
         <!-- jQuery -->
    <!-- Datatables -->
    

    <!-- Datatables -->
    <script>
      $(document).ready(function() {
        var handleDataTableButtons = function() {
          if ($("#datatable-buttons").length) {
            $("#datatable-buttons").DataTable({
              dom: "Bfrtip",
              buttons: [
                {
                  extend: "copy",
                  className: "btn-sm"
                },
                {
                  extend: "csv",
                  className: "btn-sm"
                },
                {
                  extend: "excel",
                  className: "btn-sm"
                },
                {
                  extend: "pdfHtml5",
                  className: "btn-sm"
                },
                {
                  extend: "print",
                  className: "btn-sm"
                },
              ],
              responsive: true
            });
          }
        };

        TableManageButtons = function() {
          "use strict";
          return {
            init: function() {
              handleDataTableButtons();
            }
          };
        }();

        $('#datatable').dataTable();

        $('#datatable-keytable').DataTable({
          keys: true
        });

        $('#datatable-responsive').DataTable({
        "language": {
            "lengthMenu": "Affiche _MENU_ par page",
            "zeroRecords": "Desolé - rien n'a été trouvé",
            "info": "Page _PAGE_ sur _PAGES_",
            "infoEmpty": "Aucun enregistrement disponible",
            "infoFiltered": "(filtré de _MAX_ total enregistrements)"
        }
    });

        $('#datatable-scroller').DataTable({
          ajax: "js/datatables/json/scroller-demo.json",
          deferRender: true,
          scrollY: 380,
          scrollCollapse: true,
          scroller: true
        });

        $('#datatable-fixed-header').DataTable({
          fixedHeader: true
        });

        var $datatable = $('#datatable-checkbox');

        $datatable.dataTable({
          'order': [[ 1, 'asc' ]],
          'columnDefs': [
            { orderable: false, targets: [0] }
          ]
        });
        $datatable.on('draw.dt', function() {
          $('input').iCheck({
            checkboxClass: 'icheckbox_flat-green'
          });
        });

        TableManageButtons.init();
      });
    </script>

    <!-- /Datatables -->
@stop