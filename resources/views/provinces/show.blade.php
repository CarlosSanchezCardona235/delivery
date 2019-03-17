@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    	<h1>Este es show</h1>
    </div>
    <p class="lead"># {{$province->id}}</p>
    <p class="lead">Nombre: {{$province->name}}</p>
    <p class="lead">Code: {{$province->code}}</p>
</div>
@endsection