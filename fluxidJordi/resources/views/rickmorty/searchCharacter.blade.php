@extends('layout.layout')



@section('title', 'Buscar Personaje')

@section('content')
    <form action="{{route('rickmorty.resultCharacter')}}" method="POST">
        @csrf
        @method('POST')
        <label for="searchCharacter">Busca personaje:</label>
        <input type="text" name="searchCharacter" id="searchCharacter">
        <br>
        <input type="submit" value="Buscar">
    </form>
@endsection

