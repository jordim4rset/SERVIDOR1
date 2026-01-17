@extends('layout.layout')

@section('title','Crear Mensaje')

@section('content')
    <main>
        <h1 id="titulo">CREAR MENSAJE</h1>

        <div id="contenedor-form">
            <form action="{{route('messages.store')}}" method="post">
                @csrf

                <label for="name">Nombre:</label>
                <input type="text" name="name" id="INPname">
                <br>
                <label for="correo">Correo:</label>
                <input type="text" name="email" id="INPemail">
                <br>
                <label for="content">Argumento:</label>
                <br>
                <textarea name="content" id="content" cols="30" rows="10"></textarea>
                <br>
                <button type="submit">Enviar</button>
            </form>
        </div>


    </main>
@endsection
