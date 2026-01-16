@extends('layout.layout')



@section('title', 'Index RICKMORTY')

@section('content')
    <h1>INDEX RICKMORTY</h1>

    <img src="{{$character['image']}}" alt="Imagen {{$character['name']}}">
    <h3>Name: {{$character['name']}}</h3>
@endsection

