
               <!--La page suit le modèle de page "modele_pages.blade.php"-->

@extends('layout.modele_pages_gest')

<!-- Commence ici le corps de la page -->
 
@section('content')
<header class="section background-primary">
    <div class="line">
      <h1 class="text-white margin-top-bottom-40 text-size-60 text-line-height-1">Les salles de la M2L</h1>
      <p class="margin-bottom-0 text-size-16"> Tous les bâtiments.</p>
    </div>
  </header>
      <h1> La Salle {{$maSalle->nom}} batiment {{$maSalle->batiment}}</h1>
          <h2>{{$maSalle->capacite}} place disponible</h2>

<table>
  <tr> <td>La salle présente les equipements suivant: {{$maSalle->equipements}}</td> </tr> 
  <tr> <td>La salle propose les service suivant: {{$maSalle->services}}</td> </tr>
  <tr> <td> <img src="{{asset($maSalle->image)}}"/> </td> </tr>
</table>
<!-- termine le corps de la page -->

@endsection
