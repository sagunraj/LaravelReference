<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        // for($i=0;$i<6;$i++){
        // DB::table('category')->insert(
        //     ['title' => 'Title'.$i]
        // );

        $faker = Faker\Factory::create();
        for($i=0;$i<11;$i++){
            DB::table('category')->insert(
                ['title' => $faker->name]
            );
        }
    }
}
