@inject('date', 'App\Utilities\Date')

@extends('layout.master')

@section('foot')

<h2>page du bas</h2>

@if ($date->iseWeekend()) 
        {{"<p>nous sommes le weekend</p>"}}
        @else
        {{'aller travailler au bureau'}}
    @endif

@endsection