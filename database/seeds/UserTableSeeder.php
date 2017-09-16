<?php

use Illuminate\Database\Seeder;

use GisCore\User;
use GisCore\Role;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_employee = Role::where('name', 'demouser')->first();
	    $role_manager  = Role::where('name', 'superuser')->first();
	    $role_web  = Role::where('name', 'webuser')->first();
	    
	    $manager = new User();
	    $manager->name = 'Super User';
	    $manager->email = 'admin@palmira.gov.co';
	    $manager->password = bcrypt('123456');
	    $manager->save();
	    $manager->roles()->attach($role_manager);

	    $employee = new User();
	    $employee->name = 'Demo User';
	    $employee->email = 'demo@palmira.gov.co';
	    $employee->password = bcrypt('123456');
	    $employee->save();
	    $employee->roles()->attach($role_employee);

	    $webu = new User();
	    $webu->name = 'Web User';
	    $webu->email = 'web@palmira.gov.co';
	    $webu->password = bcrypt('123456');
	    $webu->save();
	    $webu->roles()->attach($role_web);
 
    }
}
