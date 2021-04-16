
@inject('d', 'App\Utilities\Date')

@extends('layout.master', ['body'=>'un div','title'=>'laravel'])

@section('content')
<?php

        echo "Bonjour ". $name .' ' .$prename;
        $jour= date('d/m/Y');
        echo "<h5>Nous sommes le jour ". $jour.'<h5>';

        
    ?>
    <p>{{ time() }}</p>
    {{ config('app.name', $default = 'je') }}
<?php
    $raw = '22. 11. 1968';
$start = DateTime::createFromFormat('d. m. Y', $raw);

echo 'Start date: ' . $start->format('Y-m-d') . "              </br>";
?>
    @if ($d->iseWeekend()) 
        {{"<p>nous sommes le weekend</p>"}}
        @else
        {{'aller travailler au bureau'}}
    @endif

    <p>le site web</p>
{!! "<p>je vous kife</p>" !!}


@endsection

