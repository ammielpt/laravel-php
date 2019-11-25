@extends('layout')
@section('title', 'Portafolio')

@section('content')
<h1>Portfolio</h1>
@auth
<a href="{{route('projects.create')}}">Crear proyecto</a>
@endauth
<ul>
    @forelse($projects as $project)
    <li><a href="{{route('projects.show',$project)}}">{{$project->title}}</a><br /><small>{{$project->description}}</small><br />{{$project->updated_at->diffForHumans()}}</li>
    @empty
    <li>No hay portafolios para mostrar</li>
    @endforelse
    {{$projects->links()}}
</ul>
@endsection