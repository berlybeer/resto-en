<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    DB::table('company')->insert([
        	'name'=>Str::random(10),
        	'address'=>Str::random(10),
        ]);
    }
}
