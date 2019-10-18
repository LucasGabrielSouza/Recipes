<?php

use Illuminate\Database\Seeder;
use App\Recipes;

class recipesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recipes')-> truncate();

        for ($i=0; $i < 10 ; $i++) { 
            # code...
       
        Recipes::create([
            'title' => 'title',
            'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ab qui aliquam odio enim quasi tempore reprehenderit similique temporibus eos quidem, ad sed. Facilis illum expedita quibusdam fuga maiores magni laudantium?',
            'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt nam itaque eligendi eaque, adipisci maxime. Tempora, et ipsam, itaque ab eos dolor, impedit reprehenderit animi quam dolore consequuntur. Sint, harum.',
            'featured' => '1',
            'id_type' => '1',
            'send_by' => '1'
        ]);
    }
        
    }
}
