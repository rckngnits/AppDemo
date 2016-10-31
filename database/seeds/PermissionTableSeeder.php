<?php

use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('permissions')->delete();

	        \DB::table('permissions')->insert(array (
	        0 =>
	        array (
	            'id' => 1,
	            'name' => 'create_client',
	            'label' => 'Create client',
	        ),

	        1 =>
	        array (
	            'id' => 2,
	            'name' => 'view_client',
	            'label' => 'View client',
	        ),

	        2 =>
	        array (
	            'id' => 3,
	            'name' => 'edit_client',
	            'label' => 'Edit client',
	        ),

	        3 =>
	        array (
	            'id' => 4,
	            'name' => 'delete_client',
	            'label' => 'Delete client',
	        ),

	        4 =>
	        array (
	            'id' => 5,
	            'name' => 'block_client',
	            'label' => 'Block client',
	        ),

	        5 =>
	        array (
	            'id' => 6,
	            'name' => 'disable_client',
	            'label' => 'Disable client',
	        ),

	        6 =>
	        array (
	            'id' => 7,
	            'name' => 'create_user',
	            'label' => 'Create user',
	        ),

	        7 =>
	        array (
	            'id' => 8,
	            'name' => 'view_user',
	            'label' => 'View user',
	        ),

	        8 =>
	        array (
	            'id' => 9,
	            'name' => 'edit_user',
	            'label' => 'Edit user',
	        ),

	        9 =>
	        array (
	            'id' => 10,
	            'name' => 'delete_user',
	            'label' => 'Delete user',
	        ),

	        10 =>
	        array (
	            'id' =>11,
	            'name' => 'block_user',
	            'label' => 'Block user',
	        ),

	        11 =>
	        array (
	            'id' => 12,
	            'name' => 'disable_user',
	            'label' => 'Disable user',
	        ),

	        12 =>
	        array (
	            'id' => 13,
	            'name' => 'create_task',
	            'label' => 'Create task',
	        ),

	        13 =>
	        array (
	            'id' => 14,
	            'name' => 'view_task',
	            'label' => 'View task',
	        ),

	        14 =>
	        array (
	            'id' => 15,
	            'name' => 'edit_task',
	            'label' => 'Edit task',
	        ),

	        15 =>
	        array (
	            'id' => 16,
	            'name' => 'delete_task',
	            'label' => 'Delete task',
	        ),

	        16 =>
	        array (
	            'id' => 17,
	            'name' => 'create_comment',
	            'label' => 'Create comment',
	        ),

	        17 =>
	        array (
	            'id' => 18,
	            'name' => 'view_comment',
	            'label' => 'View comment',
	        ),

	        18 =>
	        array (
	            'id' => 19,
	            'name' => 'edit_comment',
	            'label' => 'Edit comment',
	        ),

	        19 =>
	        array (
	            'id' => 20,
	            'name' => 'delete_comment',
	            'label' => 'Delete comment',
	        ),

	        20 =>
	        array (
	            'id' => 21,
	            'name' => 'create_department',
	            'label' => 'Create department',
	        ),

	        21 =>
	        array (
	            'id' => 22,
	            'name' => 'view_department',
	            'label' => 'View department',
	        ),

	        22 =>
	        array (
	            'id' => 23,
	            'name' => 'edit_department',
	            'label' => 'Edit department',
	        ),

	        23 =>
	        array (
	            'id' => 24,
	            'name' => 'delete_department',
	            'label' => 'Delete department',
	        ),

	        24 =>
	        array (
	            'id' =>25,
	            'name' => 'block_department',
	            'label' => 'Block department',
	        ),

	        25 =>
	        array (
	            'id' => 26,
	            'name' => 'disable_department',
	            'label' => 'Disable department',
	        ),

	        25 =>
	        array (
	            'id' => 26,
	            'name' => 'view_settings',
	            'label' => 'View settings',
	        ),
	        
	    ));
    }
}
