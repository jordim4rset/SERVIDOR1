@extends('layout.layout')

@section('title', 'VER PRODUCTO')

@section('content')

    @if ($product->disponibility == 1)
        <h2>NOMBRE:{{$product->name}}</h2>
        <p>MARCA:{{$product->brand}}</p>
        <p>DESCRIPCIÓN:{{$product->description}}</p>
        <p>PRECIO:{{$product->price}}</p>
        <p>STOCK:{{$product->stock}}</p>
        <p>DISPONIBILIDAD:{{$product->disponibility}}</p>
        <p>IMÁGEN{{$product->img}}</p>
    @else
        <h3>PRODUCTO NO DISPONIBLE</h3>


    @endif

@endsection
