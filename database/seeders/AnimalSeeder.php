<?php

namespace Database\Seeders;

use App\Models\Animal;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Animal::create([
            'name' => 'horse',
            'total'=> 5,
        ]);

        Animal::create([
            'name' => 'chicken',
            'total' => 4,
        ]);

        Animal::create([
            'name' => 'cow',
            'total' => 3,
        ]);

        Animal::create([
            'name' => 'sheep',
        ]);
    }
}
