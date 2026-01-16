@extends('layout.layout')



@section('title', 'Index RICKMORTY')

@section('content')
    <h1>INDEX RICKMORTY</h1>

    <form action="{{route('characterSearch')}}" method="POST">
        @csrf
        <label for="searchCharacter">Busca personaje:</label>
        <input type="text" name="searchCharacter" id="searchCharacter">
        <br>
        <input type="submit" value="Buscar">
    </form>

    @forelse ($characters as $character)
        <a href="{{route('characterId', ['id' => $character->id])}}"><h3>Name: {{$character->name}}</h3></a>
        <br>
        <img src="{{$character->image}}" alt="Imagen {{$character->name}}">
        <hr>

    @empty
        <p>No hay personajes</p>
    @endforelse

@endsection

