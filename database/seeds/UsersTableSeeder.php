<?php

use Illuminate\Database\Seeder;
use App\User;
use app\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();
        $adminRole=Role::where('name', 'admin')->first();
        $userRole=Role::where('name','user')->first();
        $visitorRole=Role::where('name','visitor')->first();


    $admin =User::create([
        'name' => 'Admin',
        'lastname' =>'User',
        'email' => 'admin@admin.com' ,
        'password' => Hash::make('adminadmin'),
        'name_id' =>'USA',
        'cin' => '32132132',
        ]);

        $admin->roles()->attach($adminRole);
    }
}
