<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
    	
        $limit = 10;
        for($i = 0; $i < $limit; $i++){
            DB::table('rooms')->insert([
            'name'=>$faker->name,
            'image'=>'public/image/image1.jpg',
            'typeroom'=>$faker->randomLetter,
            'number'=>$faker->numberBetween($min = 1, $max = 4),
            'area'=>$faker->numberBetween($min = 50, $max = 100),
            'price'=>$faker->randomFloat(4, 17000, 500000)
            ]);
        }
    }
    }

   