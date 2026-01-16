<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Anime;
use Illuminate\Http\Request;
use App\Http\Resources\AnimeResource;
use App\Http\Resources\AnimeCollection;

class AnimeApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return new AnimeCollection(Anime::get());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Anime $anime)
    {
        return new AnimeResource($anime);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Anime $anime)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Anime $anime)
    {
        //
    }
}
