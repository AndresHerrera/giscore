<?php

use Illuminate\Database\Seeder;

use GisCore\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
  	{
	    $role_employee = new Role();
	    $role_employee->name = 'demouser';
	    $role_employee->description = 'A Demo User';
	    $role_employee->save();

	    $role_employee = new Role();
	    $role_employee->name = 'webuser';
	    $role_employee->description = 'A Web User';
	    $role_employee->save();

	    $role_employee = new Role();
	    $role_employee->name = 'internaluser';
	    $role_employee->description = 'A Internal User';
	    $role_employee->save();

	    $role_manager = new Role();
	    $role_manager->name = 'superuser';
	    $role_manager->description = 'A Super User';
	    $role_manager->save();
 	}
}
