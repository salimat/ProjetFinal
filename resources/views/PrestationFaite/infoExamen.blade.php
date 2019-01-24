
@extends('layouts.secretariatnav')

@section('content')


<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="{{ asset('css/patientinfo.css') }}" rel="stylesheet">
<!------ Include the above in your HEAD tag ---------->




    <!-- Website CSS style -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Website Font style -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

    <title>KENEYALAB</title>

    <div class="container">
      <div class="row main">
        <div class="main-login main-center">

			<h3 class="texte"> Information sur les Examens du Patient {{$patients->nom_per. ' ' .$patients->prenom_per}} </h3>


<form class="" action="{{ route('infoExamen.store') }}" method="post">
	@csrf



            <div class="form-group">
              <label for="adresse_per" class="cols-sm-2 control-label">Date</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  
                  <input type="date" class="form-control" name="adresse_per" id="adresse_per"  placeholder="" required />
                </div>
              </div>
            </div>
        

            <div class="form-group">
              <label for="email_per" class="cols-sm-2 control-label">Prescripteur</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  
                  <input type="text" class="form-control" name="email_per" id="email_per"  placeholder=""  />
                </div>
              </div>
            </div>
         
            <div class="form-group">
              <label for="adresse_per" class="cols-sm-2 control-label">Hopital</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <input type="text" class="form-control" name="adresse_per" id="adresse_per"  placeholder=""  />
                </div>
              </div>
            </div>
       

            <div class="form-group">
              <label for="email_per" class="cols-sm-2 control-label">Motif</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <input type="text" class="form-control" name="email_per" id="email_per"  placeholder=""  />
                </div>
              </div>
            </div>
        
            <div class="form-group">
              <label for="adresse_per" class="cols-sm-2 control-label">Categorie Patient</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <input type="text" class="form-control" name="adresse_per" id="adresse_per"  placeholder=""/>
                </div>
              </div>
            </div>
       

            <div class="form-group">
              <label for="email_per" class="cols-sm-2 control-label">Etat Patient</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <input type="text" class="form-control" name="email_per" id="email_per"  placeholder=""  />
                </div>
              </div>
            </div>

            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                  <br>
                  <br>
                    <button type="submit" class="btn btn-primary">
                        {{ __('Enregistrer') }}
                    </button>
                </div>
            </div>
        
        
            </div>
           
         
</form>
@endsection
