@extends('layouts.app')

@section('content')
<div class="container text-center">

    <h1>Benvenuto</h1>

    {{-- Creo una lista senza link visibile a tutti --}}
    <ol class="list-unstyled">
        @foreach ($projects as $project)
            <li>{{$project -> project_name}}</li>
            
        @endforeach
    </ol>


</div>