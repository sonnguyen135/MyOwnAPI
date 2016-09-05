<?php

use Illuminate\Database\Seeder;
use App\Vehicle;

class VehiclesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 0;$i < 30;$i++){
	    	Vehicle::create([
	    		
	    		'color' => $faker->safeColorName(),
	    		'power' => $faker->randomNumber(),
	    		'capacity' => $faker->randomNumber(3),
	    		'speed' => $faker->randomNumber(3),
	    		'maker_id' => $faker->numberBetween(1,5)

	    	]);
    	}
    }
}
