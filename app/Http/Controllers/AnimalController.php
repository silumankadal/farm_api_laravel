<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Http\Controllers\Controller;
use App\Http\Resources\AnimalResource;
use App\Http\Requests\StoreAnimalRequest;
use App\Http\Requests\UpdateAnimalRequest;
use App\Http\Resources\GetAnimal;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $animals = Animal::all();
        // return response()->json([
        //     "status" => 200,
        //     "data" => $animals,
        // ]);
        // return new AnimalResource($animals);
        return AnimalResource::collection($animals);
    }

    public function getanimalbyid($id){
        $animal = Animal::with('kandang:id,name')->findOrFail($id);
        // return new GetAnimal($animal); //ini juga bisa

        // return response(new GetAnimal($animal), 200)
        // ->header('Content-Type', 'application/json')
        // ->header('Custom-Header', 'Value');

        // yang ini untuk nyoba pake 2 fungsi dalam 1 file 'AnimalResource'
        $getanimal = new AnimalResource($animal);
        $hasil = $getanimal->getidanimal();
        return $hasil;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAnimalRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */

     
    public function show(Animal $animal){

    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Animal $animal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAnimalRequest $request, Animal $animal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Animal $animal)
    {
        //
    }
}
