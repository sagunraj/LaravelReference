<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // for($i=1;$i<11;$i++){
        //     DB::table('post')->insert(
        //         ['title' => 'Title'.$i,
        //         'post' => 'Post'.$i,
        //         'slug' => 'Slug'.$i]
        //     );
        // }
        $faker = Faker\Factory::create();
        
        for($i=1;$i<20;$i++){
            $dname = $faker->name;
            DB::table('post')->insert(
                ['title' => $dname,
                'post' => $faker->text($maxNbChars = 200),
                'slug' => str_slug($dname)]
            );
        }
    }
}
