@extends('layout.layout')

@section('title', 'Ver Evento')

@section('content')
    @if ($event->visible == true){
        <div>
            <h2>NOMBRE: {{ $event->name }}</h2>
            <p>DESCRIPCIÓN: {{ $event->description }}</p>
            <p>SITIO: {{ $event->location }}</p>
            <p>MAPA: {{ $event->map }}</p>
            <p>FECHA: {{ $event->date }}</p>
            <p>HORA: {{ $event->hour }}</p>
            <p>TIPO: {{ $event->type }}</p>
            <p>ETIQUETAS: {{ $event->tags }}</p>
            <p>VISIBILIDAD: {{ $event->visibility }}</p>

            <form action="{{ route('events.destroy', ['event' => $event->id]) }}" method="POST">
                @csrf
                @method('delete')
                <button type="submit">ELIMINAR</button>
            </form>
        </div>
    }

    @endif
@endsection
