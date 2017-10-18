@extends('dash-master')
@section('content')
	<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Liste des clients</h3>
                <a href="{{ url('/dashboard/clients/create') }}"><input type="button" class="btn" id="confirm" value="Ajouter"/></a>
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
                          <th>N° CIN</th>
                          <th>N° Permis</th>
                          <th>Nom et Prénom</th>
                          <th>Téléphone</th>
                          <th>Ville</th>
                          <th>Email</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($clients as $client)
                        <tr>
                          <td>
                          	<a href="{{ url('/dashboard/clients',['id'=>$client->id]) }}"><i class="fa fa-pencil-square"></i></a>
                          	<a href="{{ url('/dashboard/clients/delete',['id'=>$client->id]) }}"><i class="fa fa-trash"></i></a>
                          </td>	
                          <td>{{ $client->cin }}</td>
                          <td>{{ $client->permis }}</td>
                          <td>{{ $client->lastname }} {{ $client->firstname }}</td>
                          <td>{{ $client->tel }}</td>
                          <td>{{ $client->city }}</td>
                          <td>{{ $client->email }}</td>  
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
    <script src="{{ url('vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{ url('vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{ url('vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{ url('vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
    <script src="{{ url('vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
    <script src="{{ url('vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{ url('vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{ url('vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
    <script src="{{ url('vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
    <script src="{{ url('vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{ url('vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
    <script src="{{ url('vendors/datatables.net-scroller/js/datatables.scroller.min.js')}}"></script>
    <script src="{{ url('vendors/jszip/dist/jszip.min.js')}}"></script>
    <script src="{{ url('vendors/pdfmake/build/pdfmake.min.js')}}"></script>
    <script src="{{ url('vendors/pdfmake/build/vfs_fonts.js')}}"></script>

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