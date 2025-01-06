<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $parentLocation  = Location::create([
            'name' =>'UNW',
            'parent_id' => null,
        ]);

        foreach(['D6', 'D5', 'D4', 'D3', 'D2', 'D1', 'A1', 'A2', 'A3', 'A4', 'A5', 'A6', 'A7', 'A8', 'A9'] as $obj){
            Location::create([
                'name' => $obj,
                'parent_id' => $parentLocation->id,
            ]);
        }
    }
}
