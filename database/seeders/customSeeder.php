<?php

namespace Database\Seeders;
use App\Models\phoneData;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class customSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i=1; $i < 101 ; $i++) { 
            $phoneData = new phoneData;
            
            $phoneData->name = $faker->name;
            $phoneData->phone = $faker->phone;
            $phoneData->save();
        }  
    }
}
