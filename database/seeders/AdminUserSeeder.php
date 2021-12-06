<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user=User::create([
            'name'=>'Admin Perpus',
            'email'=>'admin@perpus.test',
            'password'=>bcrypt('123456789'),
            'email_verify_at' => now(),
        ]);
        $user->assignRole('admin');
    }
}
