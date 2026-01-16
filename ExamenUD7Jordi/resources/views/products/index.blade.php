@extends('layout.layout')

@section('title', 'VER PRODUCTOS')

@section('content')

    @forelse ($products as $product)
        <div>
            <a href="{{route('product.show', ['product' => $product->id])}}"><h2>{{$product->name}}</h2></a>
            <p>{{$product->price}}</p>
            <a href="{{route('product.edit', ['product' => $product->id])}}"><button>Editar Producto</button></a>
        </div>
    @empty
        <h5>NO HAY PRODUCTOS DISPONIBLES</h5>
    @endforelse

@endsection
