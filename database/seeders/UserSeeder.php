<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::factory(31)->create();
        // Create user role entries
        $adminRole = Role::where('role_name', 'Admin')->first();
        $user = User::first(); // Fetch the first user from the database
        if ($adminRole && $user) {
            $user->roles()->attach($adminRole->id);
        }
        $teacherRole = Role::where('role_name', 'Teacher')->first();
        $studentRole = Role::where('role_name', 'Student')->first();
        $nonAdminUsers = User::whereDoesntHave('roles', function ($query) {
            $query->where('role_name', 'Admin');
        })->get();
        $teacherCount = 0;

        foreach ($nonAdminUsers as $nonAdminUser) {
            if ($teacherCount < 3 && $teacherRole) {
                $nonAdminUser->roles()->attach($teacherRole->id);
                $teacherCount++;
            } elseif ($studentRole) {
                $nonAdminUser->roles()->attach($studentRole->id);
            }
        }
    }
}
