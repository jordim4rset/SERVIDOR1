<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        /**
         * @param products colección de productos disponibles
         * FILTRAMOS LOS PRODUCTOS QUE ESTEN DISPONIBLES
         */
        $products = Product::where('disponibility', true)->get();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        /**
         * @param product Nuevo producto rellenado con datos del request
         * CREAMOS UN PRODUCTO, LO RELLENAMOS CON LOS DATOS DEL REQUEST Y GUARDAMOS BD
         */
        $product = new Product();
        $product->name = $request->input('name');
        $product->brand = $request->input('brand');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->stock = $request->input('stock');

        if($request->input('disponibility') == 'on'){
            $product->disponibility = 1;
        }elseif ($request->input('disponibility') == 'off'){
            $product->disponibility = 0;
        }
        $product->img = $request->input('img');
        $product->save();

        return redirect()->route('product.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        /**
         *@param product producto
         *
         * fILTRAMOS PARA VER SI TIENE DISPONIBILIDAD EL PRODUCTO
         */
        if($product->disponibility == false) {
            return redirect()->route('product.index');
        }else{
            return view('products.show', compact('product'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        /**
         * @param product producto rellenado con datos del request de edit
         * actualizamos el producto con los datos del request
         */
        $product->name = $request->input('name');
        $product->brand = $request->input('brand');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->stock = $request->input('stock');

        if($request->input('disponibility') == 'on'){
            $product->disponibility = 1;
        }elseif ($request->input('disponibility') == 'off'){
            $product->disponibility = 0;
        }
        $product->img = $request->input('img');
        $product->save();

        return redirect()->route('product.show', compact('product'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        return redirect()->route('product.index');
    }
}
