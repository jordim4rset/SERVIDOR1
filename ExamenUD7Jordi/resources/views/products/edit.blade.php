@extends('layout.layout')

@section('title', 'EDITAR PRODUCTO')

@section('content')

    <form action="{{route('product.update', $product)}}" method="POST">
        @csrf
        @method('put')
        <label for="name">NOMBRE: </label>
        <input type="text" name="name" id="name" value="{{$product->name}}">
        <br>
        <label for="brand">MARCA: </label>
        <input type="text" name="brand" id="brand" value="{{$product->brand}}">
        <br>
        <label for="description">DESCRIPCIÓN: </label>
        <input type="text" name="description" id="description" value="{{$product->description}}">
        <br>
        <label for="price">PRECIO: </label>
        <input type="text" name="price" id="price" value="{{$product->price}}">
        <br>
        <label for="stock">STOCK: </label>
        <input type="text" name="stock" id="stock" value="{{$product->stock}}">
        <br>
        <label for="disponibility">DISPONIBILIDAD: </label>
        <input type="text" name="disponibility" id="disponibility" value="{{$product->disponibility}}">
        <br>
        <label for="img">IMÁGEN: </label>
        <input type="text" name="img" id="img" value="{{$product->img}}">
        <br>
        <button type="submit">CREAR</button>
    </form>

@endsection
