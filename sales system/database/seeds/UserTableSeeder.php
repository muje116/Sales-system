<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $role_employee = Role::where('name', 'james')->first();
        $role_manager  = Role::where('name', 'admin')->first();

        $employee = new User();
            $employee->name = 'james';
        $employee->email = 'james@james.com';
        $employee->password = bcrypt('james123');
        $employee->roles()->attach($role_employee);
        $employee->save();


        $manager = new User();
        $manager->name = 'admin';
        $manager->email = 'admin@admin.com';
        $manager->password = bcrypt('admin123');
        $manager->roles()->attach($role_manager);
        $manager->save();

    }
}
