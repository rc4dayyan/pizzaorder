<?php

use Illuminate\Database\Seeder;

class PizzaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for($i=0;$i<15;$i++){
            $data[$i] = [
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
                'name' => $faker->name,
                'type' => $i % 2 == 0 ? 'hawaiin' : 'volcano',
                'base' => $i % 3 == 0 ? 'garlic crust' : 'thin & cripsy',
                'toppings' => $i % 3 == 0 ? json_encode(['peppers']) : json_encode(['mushrooms','garlic'])
            ];
        }
        DB::table('pizzas')->insert($data);
    }
}
