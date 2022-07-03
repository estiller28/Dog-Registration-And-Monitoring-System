<?php

namespace Database\Seeders;
use App\Models\Barangay;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Spatie\Permission\Models\Permission;

class roleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = [
            'Admin',
            'CoAdmin'
        ];

        foreach ($role as $roles ){
            Role::create(['name' => $roles]);
        }

        $defaultAdmin =  User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
        ]);

        $defaultAdmin->assignRole('Admin');

       /* $barangay = Barangay::create([
            'barangay_name' => 'ManageUserController'
        ]);

        $test = User::create([
            'barangay_id' => $barangay->id,
            'name' => 'test',
            'email' => 'test@gmail.com',
            'password' => bcrypt('password'),
        ]);*/

//        $test->assignRole('CoAdmin');
    }
}
