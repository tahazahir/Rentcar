@extends('dash-master')
@section('content')
	<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Liste des contrats</h3>
                <a href="{{ url('/dashboard/contrats/create') }}"><input type="button" class="btn" id="confirm" value="Ajouter"/></a>
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
                          <th>Voiture</th>	
                          <th>Date de départ</th>
                          <th>Date de retour</th>
                          <th>Client</th>
                          <th>N° C.I.N</th>
                          <th>Téléphone</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($contrats as $contrat)
                        <tr>
                          <td>
                            <a href="{{ url('dashboard/contrats/preview',['id'=>$contrat->id]) }}"><i class="fa fa-print"></i></a>
                            <a href="{{ url('dashboard/contrats',['id'=>$contrat->id]) }}"><i class="fa fa-pencil-square"></i></a>
                            <a href="{{ url('/dashboard/contrats/delete',['id'=>$contrat->id]) }}"><i class="fa fa-trash"></i></a>
                          </td>
                          <td>{{ $contrat->car->marque.' '.$contrat->car->model.','.$contrat->car->immatricule }}</td>
                          <td>{{ $contrat->depart_date.' '.$contrat->depart_hour }}</td>
                          <td>{{ $contrat->return_date.' '.$contrat->return_hour }}</td>
                          <td>{{ $contrat->client->lastname.' '.$contrat->client->firstname }}</td>
                          <td>{{ $contrat->client->cin }}</td>
                          <td>{{ $contrat->client->tel }}</td>
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