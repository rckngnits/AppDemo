<?php

use Illuminate\Database\Seeder;

class DepartmentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            \DB::table('departments')->delete();

            \DB::table('departments')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Administrator',
                'description' => 'Administration',
                'created_at' => '2016-06-04 13:51:10',
                'updated_at' => '2016-06-04 13:51:10',
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'Marketing',
                'description' => 'Handels Marketing Related Jobs',
                'created_at' => '2016-06-04 13:56:27',
                'updated_at' => '2016-06-04 13:56:27',
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'Customer Representatives',
                'description' => 'Deals with Customers',
                'created_at' => '2016-06-04 13:57:07',
                'updated_at' => '2016-06-04 13:57:07',
            ),
        ));
    }
}
