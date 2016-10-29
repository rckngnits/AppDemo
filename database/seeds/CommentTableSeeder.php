<?php

use Illuminate\Database\Seeder;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('comments')->delete();

        factory(App\Models\Comment::class, 250)->create()->each(function($c){
        });
    }
}
