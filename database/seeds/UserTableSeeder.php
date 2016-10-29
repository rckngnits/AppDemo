<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    	\DB::table('users')->delete();

	        \DB::table('users')->insert(array (
	        0 =>
	        array (
	            'id' => 1,
	            'name' => 'Nitish Kumar',
	            'email' => 'nitish@codeground.ml',
	            'primary_number' => '8844993388',
	            'added_by' => '1',
	            'fk_department_id' => '1',
	            'password' => bcrypt('nitish'),
	            'created_at' => '2016-06-04 13:51:10',
	            'updated_at' => '2016-06-04 13:51:10',
	        ),
	        1 =>
	        array (
	            'id' => 2,
	            'name' => 'vaibhav',
	            'email' => 'vaibhav@codeground.ml',
	            'primary_number' => '8899889988',
	            'added_by' => '1',
	            'fk_department_id' => '1',
	            'password' => bcrypt('vaibhav'),
	            'created_at' => '2016-06-04 13:51:10',
	            'updated_at' => '2016-06-04 13:51:10',
	        ),
	         2 =>
	        array (
	            'id' => 3,
	            'name' => 'kishan',
	            'email' => 'kishan@codeground.ml',
	            'primary_number' => '8899889988',
	            'added_by' => '2',
	            'fk_department_id' => '3',
	            'password' => bcrypt('kishan'),
	            'created_at' => '2016-06-04 13:51:10',
	            'updated_at' => '2016-06-04 13:51:10',
	        ),
	         3 =>
	        array (
	            'id' => 4,
	            'name' => 'Shekhar',
	            'email' => 'Shekhar@codeground.ml',
	            'primary_number' => '8899889988',
	            'added_by' => '2',
	            'fk_department_id' => '3',
	            'password' => bcrypt('Shekhar'),
	            'created_at' => '2016-06-04 13:51:10',
	            'updated_at' => '2016-06-04 13:51:10',
	        ),
	        4 =>
	        array (
	            'id' => 5,
	            'name' => 'soumya',
	            'email' => 'soumya@codeground.ml',
	            'primary_number' => '8844993388',
	            'added_by' => '1',
	            'fk_department_id' => '1',
	            'password' => bcrypt('soumya'),
	            'created_at' => '2016-06-04 13:51:10',
	            'updated_at' => '2016-06-04 13:51:10',
	        ),
	    ));
    }
}
