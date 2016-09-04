<?php

use Illuminate\Database\Seeder;
use App\Maker;

class MakersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 0;$i < 6;$i++){
	    	Maker::create([
	    		
	    		'name' => $faker->word(),
	    		'phone' => $faker->randomDigit(5)

	    	]);
    	}
    }
}
