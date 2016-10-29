<?php

use Illuminate\Database\Seeder;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         \DB::table('statuses')->delete();

            \DB::table('statuses')->insert(array (
            0 =>
            array (
                'id' => 1,
                'title' => 'open',
                'created_at' => '2016-06-04 13:51:10',
                'updated_at' => '2016-06-04 13:51:10',
            ),
            1 =>
            array (
                'id' => 2,
                'title' => 'closed',
                'created_at' => '2016-06-04 13:56:27',
                'updated_at' => '2016-06-04 13:56:27',
            ),
        ));
   }
}
