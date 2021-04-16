@extends('layout.master')
	@section('evenement')
	 <h3>utilisatation des evenements en laravel</h3>
	 <?php //dump ($events) ;?>
	 <ol>
	 <?php foreach ($events as $e ) {
	 	?>
	 	<li><a href="#"><?php echo $e->nom ;     ?></a></li>
	 	<?php
	 }
	 ?>
	</ol>
>
	<h1>les evenemens au nombre de {{$events->count()}}</h1>
 
    @foreach($events as $e)

    <article class="{{$loop->index % 2==0 ? 'blink' : 'blink1'}}">
        <h2>{{$e->nom}}</h2>
        <p>{{$e->body}}</p>
        <p>Prix d'entrée:{!! formatPrice($e)!!}</p>
        <p>date de debut:{{formatDate($e->date_debut)}} </p>
        <p>Lieu de l'evenement:{{$e->lieu}}</p>
    </article>
    @if(!$loop->last)
    <hr>
    @endif
    @endforeach
    <hr>
   
	@endsection

