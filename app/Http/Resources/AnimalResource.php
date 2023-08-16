<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
// use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Http\Resources\Json\JsonResource;

// class AnimalResource extends ResourceCollection
class AnimalResource extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);

        // ini bisa dipakai untuk JsonResource
        return [
            'id' => $this->id,
            'name' => $this->name,
            'total' => $this->total,
            'kontol' => 'ternyata salahnya disitu asu'
        ];

        // ini bisa dipakai untuk ResourceCollection
        // return [
        //     'data' => $this->collection->transform(function ($animal) {
        //         return [
        //             'id' => $animal->id,
        //             'name' => $animal->name,
        //             'total' => $animal->total,
        //         ];
        //     }),
        // ];
    }

    public function getidanimal(){
        return [
            'id' => $this->id,
            'name' => $this->name,
            'total' => $this->total,
            'kandang' => $this->kandang,
        ];
    }
}
