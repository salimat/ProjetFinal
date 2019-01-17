@extends('layouts.contenu_layout')
 @section('contenu')
 <table  border="1">
   <tr> LA LISTE DES FONCTIONS </tr>
   <tr> <th>IDENTIFIANT </th>
   <th>NOM </th></tr>

@foreach ($fonctions as $fonction)
<tr>
    <th> {{ $fonction->id }}</th>

    <th> {{ $fonction->nom_fonction }}</th>
  </tr>
@endforeach
</table>
@endsection
