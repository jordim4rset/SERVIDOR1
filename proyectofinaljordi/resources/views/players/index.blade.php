@extends('layout.layout')

@section('title','Plantilla')

@section('content')
    <main>
        <h1 id="titulo">JUGADORES</h1>

        @isadmin
            hola
        @endisadmin

        <div class="contenedor-jugadores">
            @forelse ($players as $player)
                <div class="contenedor-jugador">
                    <a href="{{ route('players.show', ['player' => $player]) }}"><h2>{{ $player->name }}</h2></a>
                    <p>{{ $player->number }}</p>
                    <p>{{ $player->years }}</p>
                    <p>{{ $player->twitter }}</p>
                    <p>{{ $player->instagram }}</p>
                    <p>{{ $player->twitch }}</p>
                    <p>{{ $player->photo }}</p>
                    <p>{{ $player->visible }}</p>
                    <div>
                        <a href="{{ route('players.edit', ['player' => $player->id]) }}"><button>EDITAR</button></a>
                    </div>
                </div>
            @empty
                <h2>NO HAY JUGADORES</h2>
            @endforelse
        </div>
    </main>
@endsection
