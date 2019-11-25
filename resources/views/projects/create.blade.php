@extends('layout')
@section('title', 'Crear proyecto')

@section('content')
<h1>Crear nuevo</h1>
@include('partials.validation-errors')
<form method="POST" action="{{route('projects.store')}}">
    @csrf
    @include('projects._form',['btnText'=>'Guardar'])
</form>
@endsection