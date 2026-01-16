@extends('layout.layout')

@section('title', 'CREAR PRODUCTOS')

@section('content')

    <form action="{{route('product.store')}}" method="POST">
        @csrf
        <label for="name">NOMBRE: </label>
        <input type="text" name="name" id="name">
        <br>
        <label for="brand">MARCA: </label>
        <input type="text" name="brand" id="brand">
        <br>
        <label for="description">DESCRIPCIÓN: </label>
        <input type="text" name="description" id="description">
        <br>
        <label for="price">PRECIO: </label>
        <input type="text" name="price" id="price">
        <br>
        <label for="stock">STOCK: </label>
        <input type="text" name="stock" id="stock">
        <br>
        <label for="disponibility">DISPONIBILIDAD: </label>
        <input type="checkbox" name="disponibility" id="disponibility">
        <br>
        <label for="img">IMÁGEN: </label>
        <input type="text" name="img" id="img">
        <br>
        <button type="submit">CREAR</button>
    </form>

@endsection
