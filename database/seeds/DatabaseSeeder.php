<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        DB::table('category')->truncate();
        DB::table('post')->truncate();
        $this->call(CategorySeeder::class);
        $this->call(PostSeeder::class);
    }
}
