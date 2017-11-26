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
        $role_employee = Role::where('name', 'employee')->first();
        $role_admin  = Role::where('name', 'admin')->first();

        $employee = new User();
        $employee->user_name = 'majko';
        $employee->email = 'employe@example.com';
        $employee->password = bcrypt('poklop');
        $employee->full_name = 'Majko Mrkvicka';
        $employee->birth_date = '21.5.1996';
        $employee->phone = '0908123456';
        $employee->is_activated = true;
        $employee->save();


        $admin = new User();
        $admin->user_name = 'manazer123';
        $admin->email = 'manager@example.com';
        $admin->password = bcrypt('poklop');
        $admin->full_name = 'John Doe';
        $admin->birth_date = '27.4.1987';
        $admin->phone = '0908123458';
        $admin->is_activated = true;
        $admin->save();

        $admin2 = new User();
        $admin2->user_name = 'manazer999';
        $admin2->email = 'manager99@example.com';
        $admin2->password = bcrypt('poklop');
        $admin2->full_name = 'Axel Black';
        $admin2->birth_date = '11.2.1991';
        $admin2->phone = '0908123456';
        $admin2->is_activated = true;
        $admin2->save();

        $employee->roles()->attach($role_employee);
        $admin->roles()->attach($role_admin);
        $admin2->roles()->attach($role_admin);
  }
}
