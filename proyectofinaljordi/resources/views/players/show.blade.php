@extends('layout.layout')

@section('title', 'Ver Jugador')

@section('content')
    <main>
        <h3>NOMBRE: {{ $player->name }}</h3>
        <p>DORSAL: {{ $player->number }}</p>
        <p>POSICIÓN: {{ $player->position }}</p>
        <p>EDAD: {{ $player->years }}</p>
        <p>TWITTER: {{ $player->twitter }}</p>
        <p>INSTAGRAM: {{ $player->instagram }}</p>
        <p>TWITCH: {{ $player->twitch }}</p>
        <p>FOTO: {{ $player->photo }}</p>

        <form action="{{ route('players.destroy', ['player' => $player->id]) }}" method="POST">
            @csrf
            @method('delete')
            <button type="submit">ELIMINAR</button>
        </form>
    </main>

@endsection
