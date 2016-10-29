<?php

use Illuminate\Database\Seeder;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('clients')->delete();

        factory(App\Models\Client::class, 25)->create()->each(function($c){
        });
    }
}
