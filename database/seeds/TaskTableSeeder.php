<?php

use Illuminate\Database\Seeder;

class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('tasks')->delete();

        factory(App\Models\Task::class, 80)->create()->each(function($c){
        });
    }
}
