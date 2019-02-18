@extends('layouts.tbmnav')

@section('content')

<link href="{{ asset('css/patient1.css') }}" rel="stylesheet">
<script src="{{ asset('js/indexPatient.js') }}" defer></script>

<div class="container">
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<div class="mail-box">
	<aside class="lg-side">
		<div class="inbox-head">
			<h3> LES PATIENTS DU JOUR DE LA SECTION IMMUNO-SEROLOGIE</h3>
			<form method="POST" action="{{ route('patients.index') }}" class="pull-right position">
				<div class="input-append">
					<input type="text" class="sr-input" placeholder="CM0101011" id="search_box" >
					<button class="btn sr-btn" type="button"><i class="fa fa-search"></i></button>
				</div>
			</form>
		</div>



  <form method="POST" action="{{route('addResultat',$patients->id)}}">
  @csrf
  <li><button class="btn btn-default pull-right" style="margin-top:20px;" >
    <i class="glyphicon glyphicon-plus"></i>
    <input type="submit" name="" value="Ajouter Les resultats du Patient ">
  </button></li>

  <?php
  $timezone = "Europe/London";
  date_default_timezone_set($timezone);
  $today = date("Y-m-d");


$annees = substr($today,2,2);

$mois = substr($today,5,2);
$jour = substr($today,8,2);
?>
<div class="container">
    <div class="row">


        <div class="col-md-12">

        <div class="table-responsive">

              <table id="mytable" class="table table-bordred table-striped">

                   <thead>

                   <th><input type="checkbox" id="checkall" /></th>
                   <!-- <th>IDENTIFIANT </th> -->
                   <th>CODE</th>
                   <th>NOM </th>
                   <th>PRENOM </th>
                 <th>SEXE</th>
                   <th>CONTACT </th>
                   <th>ADRESSE</th>
                    <th>DATE DE NAISSANCE</th>
                   <th>EXAMEN</th>
                    


                   </thead>
    <tbody>

    <tr>
    <td><input type="checkbox" class="checkthis" name="identifiant{{$patients->id}}" value="{{$patients->id}}"/> </td>
     <td> <?php echo 'CM'.$annees.$mois.$jour.'9'; ?></td>
    <td> {{ $patients->nom_per }}</td>
    <td> {{ $patients->prenom_per }}</td>
    <td> {{ $patients->sexe_per }}</td>
    <td> {{ $patients->contact_per }}</td>
    <td> {{ $patients->adresse_per }}</td>
    <td> {{ $patients->date_naissance }}</td>
    <td> {{ $examens[0]->nom_examen }}</td>
   
    </tr>
    <tr>
    <td><input type="checkbox" class="checkthis" name="identifiant{{$patients->id}}" value="{{$patients->id}}"/> </td>
    <td> <?php echo 'CM'.$annees.$mois.$jour.'6'; ?></td>
    <td> {{ $patient[5]->nom_per }}</td>
    <td> {{ $patient[5]->prenom_per }}</td>
    <td> {{ $patient[5]->sexe_per }}</td>
    <td> {{ $patient[5]->contact_per }}</td>
    <td> {{ $patient[5]->adresse_per }}</td>
    <td> {{ $patient[5]->date_naissance }}</td>
    <td> {{ $examens[1]->nom_examen }}</td>
     
    </tr>
  

 





    </tbody>

</table>


            </div>

        </div>
	</div>
</div>
</form>
    @endsection
