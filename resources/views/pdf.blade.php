<h2>Watersport vereniging "De Nieuwlandse Haven"</h2>
<br>
<p>De heer of mevrouw {{ $user->name }}</p>
<p>{{ $user->adress_street }} {{ $user->adress_nr }}</p>
<p>{{ $user->adress_zipcode }} {{ $user->adress_city }}</p>
<br>
<br>
<h4>Factuur</h4>
<p>Factuurnummer: {{$user->id}}</p>
<p>Factuurdatum: {{ date("d/m/y") }}</p>
<br>
<br>

<table class="table table-striped table-hover">
    <thead>
    <th class="col-sm-1">Schepen</th>
    </thead>
</table>

<?php $total=0 ?>

@foreach ($boats as $boat)
    <?php $price = ($boat->length)*3 ?>
    <p> <i>"{{ $boat->name }}"</i></p>
    <p>Lengte in meters: {{ ($boat->length) }}m</p>
    <p>€{{ $price }}</p>
    <?php $total+=$price; ?>
    <br>
@endforeach
<p><strong>Totaal: €{{ $total }},-</strong></p>

