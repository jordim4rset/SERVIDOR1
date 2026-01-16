<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RickMortyController extends Controller
{
    function getCharacters(){
        $endpoint = 'https://rickandmortyapi.com/api/character';
        $characters = collect();

        //do{
        $response = Http::get($endpoint);
        $newCharacters = collect($response->json('results'))
                        ->map(fn ($item) => (object) $item);
        $characters = $characters->concat($newCharacters);
        $endpoint = $response->json('info')['next'];

        //}while(!is_null($endpoint));
        return view('rickmorty.characterAll', compact('characters'));
    }


    function getCharacterById(String $id){
        $endpoint = 'https://rickandmortyapi.com/api/character/'.$id;

        $response = Http::get($endpoint);
        $character = $response->json();

        return view('rickmorty.characterId', compact('character'));
    }


    function searchCharacter(Request $request){

        $endpoint = 'https://rickandmortyapi.com/api/character/?name='.$request;
        $characters = collect();



        return view('rickmorty.searchCharacter');
    }
}
