<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $types =["Sport","Business","Videogames","Motors","Lifestyle","Cooking"];

        foreach($types as $type) { 
            $newType = new Type();
            $newType->name = $type;
           
            $newType->save();
        }
    }
}
