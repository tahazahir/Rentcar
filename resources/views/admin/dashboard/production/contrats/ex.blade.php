<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		*{
			margin: 0px;
			padding: 0px;
		}
		body{
			width: 595px;
			height: 842px;
			//border: 1px solid #000;
			font-family: "Helvetica Neue", Roboto, Arial, "Droid Sans", sans-serif;
    		font-size: 13px;
		}
		.container{
			padding: 0px 10px;
		}
		#num_contrat{
			float: right;
			margin-bottom: 5px;
		}
		table{
			width: 100%
		}
		.gris{
			color: #333333;
			padding: 5px 3px;
			text-align: center;
		}
		.center{
			text-align: center;
		}
		.simple{
			padding: 3px 2px;
		}
		.separateur{
			width: 100%;
			height: 20px;
			background-color: #333333;
		}
	</style>
	<script src="{{ url('vendors/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{ url('js/jquery-ui.min.js') }}"></script>
</head>
<body>
	<img class="entete" src="{{ url('/images/entete.jpg') }}" alt="entete"/>
	<div class="container">
	<div id="num_contrat">
		<p>Contrat N° : <span id="num">{{ $contrat->id }}</span></p>
	</div>
	<table border="0">
		<tr>
			<td colspan="4" class="gris">
				<img src="{{ url('/images/1.png') }}" />
			</td>
		</tr>
		<tr>
			<td colspan="1" class="simple">Nom et prénom :</td>
			<td colspan="3" class="simple"><b>{{ $contrat->client->lastname.' '.$contrat->client->firstname }}</b></td>
		</tr>
		<tr>
			<td class="simple">Date de naissance :</td>
			<td class="simple"><b>{{ $contrat->client->birth_date }}</b></td>
			<td class="simple">Lieu de naissance :</td>
			<td class="simple"><b>{{ $contrat->client->birth_city }}</b></td>
		</tr>
		<tr>
			<td class="simple">N° C.I.N : </td>
			<td class="simple"><b>{{ $contrat->client->cin }}</b></td>
			<td class="simple">N° Permis : </td>
			<td class="simple"><b>{{ $contrat->client->permis }}</b></td>
		</tr>
		<tr>
			<td class="simple">N° Passport : </td>
			<td class="simple"><b>{{ $contrat->client->passport }}</b></td>
			<td class="simple">N° Tel : </td>
			<td class="simple"><b>{{ $contrat->client->tel }}</b></td>
		</tr>
		<tr>
			<td class="simple">Adresse : </td>
			<td class="simple"><b>{{ $contrat->client->adresse }}</b></td>
			<td class="simple">Ville : </td>
			<td class="simple"><b>{{ $contrat->client->city }}</b></td>
		</tr>
		<tr>
			<td colspan="4" class="gris">
				<img src="{{ url('/images/2.png') }}" />
			</td>
		</tr>
		<tr>
			<td colspan="1" class="simple">Nom et prénom :</td>
			<td colspan="3" class="simple"><b>{{ $contrat->conductor->lastname.' '.$contrat->conductor->firstname  }}</b></td>
		</tr>
		<tr>
			<td class="simple">Date de naissance :</td>
			<td class="simple"><b>{{ $contrat->conductor->birth_date }}</b></td>
			<td class="simple">Lieu de naissance :</td>
			<td class="simple"><b>{{ $contrat->conductor->birth_city }}</b></td>
		</tr>
		<tr>
			<td class="simple">N° C.I.N : </td>
			<td class="simple"><b>{{ $contrat->conductor->cin }}</b></td>
			<td class="simple">N° Permis : </td>
			<td class="simple"><b>{{ $contrat->conductor->permis }}</b></td>
		</tr>
		<tr>
			<td class="simple">N° Passport : </td>
			<td class="simple"><b>{{ $contrat->conductor->passport }}</b></td>
			<td class="simple">N° Tel : </td>
			<td class="simple"><b>{{ $contrat->conductor->tel }}</b></td>
		</tr>
		<tr>
			<td class="simple">Adresse : </td>
			<td class="simple"><b>{{ $contrat->conductor->adresse }}</b></td>
			<td class="simple">Ville : </td>
			<td class="simple"><b>{{ $contrat->conductor->city }}</b></td>
		</tr>
		<tr>
			<td colspan="4" class="gris">
				<img src="{{ url('/images/3.png') }}" />
			</td>
		</tr>
		<tr>
			<td colspan="1" class="simple">Marque :</td>
			<td colspan="3" class="simple"><b>{{ $contrat->car->marque.' '.$contrat->car->model  }}</b></td>
			
		</tr>
		<tr>
			<td class="simple">Imatricule :</td>
			<td class="simple"><b>{{ $contrat->car->immatricule }}</b></td>
			<td class="simple">Carburant :</td>
			@if($contrat->car->carburant == 'e')
			<td class="simple"><b>essence</b></td>
			@else
			<td class="simple"><b>diesel</b></td>
			@endif
		</tr>
		<tr>
			<td class="simple">J/H de départ : </td>
			<td class="simple"><b>{{ $contrat->depart_date.' '.$contrat->depart_hour }}</b></td>
			<td class="simple">J/H de retour : </td>
			<td class="simple"><b>{{ $contrat->return_date.' '.$contrat->return_hour }}</b></td>
		</tr>
		<tr>
			<td class="simple">Lieu de départ :</td>
			<td class="simple"><b>{{ $contrat->depart_place }}</b></td>
			<td class="simple">Lieu de retour :</td>
			<td class="simple"><b>{{ $contrat->return_place }}</b></td>
		</tr>
	</table>
	<table border="0">
		<tr>
			<td class="gris"><img src="{{ url('/images/4.png') }}" /></td>
			<td class="gris"><img src="{{ url('/images/5.png') }}" /></td>
			<td class="gris"><img src="{{ url('/images/6.png') }}" /></td>
		</tr>
		<tr>
			<td class="simple center"><b>{{ $contrat->nbdayrent }}</b></td>
			<td class="simple center"><b>{{ $contrat->price / $contrat->nbdayrent }} DH</b></td>
			<td class="simple center"><b>{{ $contrat->price }} Dh</b></td>
		</tr>
	</table>
	<table border="0">
		<tr>
			<td colspan="2" class="gris">
				<img src="{{ url('/images/7.png') }}" />
			</td>
		</tr>
		<tr>
			<td class="simple">
				<table>
					<tr>
						<td colspan="2" class="gris"><img src="{{ url('/images/9.png') }}" /></td>
					</tr>
					<tr>
						<td>Véhicule en parfaite etat : </td>
						@if($contrat->depart_etat_comm == null)
						<td><b>OUI</b></td>
						@else
						<td><b>NON</b></td>
						@endif
					</tr>
					<tr>
						<td>Commentaire : </td>
						<td><b>{{ $contrat->depart_etat_comm }}</b></td>
					</tr>
				</table>
			</td>
			<td class="simple">
				<table>
					<tr>
						<td colspan="2" class="gris"><img src="{{ url('/images/10.png') }}" /></td>
					</tr>
					<tr>
						<td>Véhicule en parfaite etat : </td>
						@if($contrat->return_etat_comm == null)
						<td><b>OUI</b></td>
						@else
						<td><b>NON</b></td>
						@endif
					</tr>
					<tr>
						<td>Commentaire : </td>
						<td><b>{{ $contrat->return_etat_comm }}</b></td>
					</tr>
				</table>
			</td>
			</td>
		</tr>
	</table>
	<img src="{{ url('/images/8.png') }}" />
	<table>
		<tr>
			<td class="simple">
				<table>
					<tr>
						<td colspan="2" class="gris">Signature Agent</td>
					</tr>
				</table>
			</td>
			<td class="simple">
				<table>
					<tr>
						<td colspan="2" class="gris">Signature de locataire</td>
					</tr>
				</table>
			</td>
			</td>
		</tr>
	</table>
	</div>
</body>
<script type="text/javascript">
	$(document).ready(function(){
		window.print();
	});
</script>
</html>