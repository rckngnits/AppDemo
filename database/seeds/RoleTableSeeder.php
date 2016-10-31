<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('roles')->delete();

	        \DB::table('roles')->insert(array (
	        0 =>
	        array (
	            'id' => 1,
	            'name' => 'adminstrator',
	            'label' => 'Site Administrator',
	            'created_at' => '2016-06-04 13:51:10',
	            'updated_at' => '2016-06-04 13:51:10',
	        ),

	        1 =>
	        array (
	            'id' => 2,
	            'name' => 'manager',
	            'label' => 'Site Manager',
	            'created_at' => '2016-06-04 13:51:10',
	            'updated_at' => '2016-06-04 13:51:10',
	        ),

	        2 =>
	        array (
	            'id' => 3,
	            'name' => 'customer_support',
	            'label' => 'Customer Support',
	            'created_at' => '2016-06-04 13:51:10',
	            'updated_at' => '2016-06-04 13:51:10',
	        ),
	    ));
    }
}
