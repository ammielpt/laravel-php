@extends('layout')
@section('title', 'Editar proyecto')

@section('content')
<h1>Crear nuevo</h1>
@include('partials.validation-errors')
<form method="POST" action="{{route('projects.update',$project)}}">
    @csrf @method('PUT')
    @include('projects._form',['btnText'=>'Actualizar'])
</form>
@endsection