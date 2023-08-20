<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'admin',
            'email' => 'admin@dstays.com',
            'password' => Hash::make('password'),
            'email_verified_at'=>'2023-01-02 17:04:58',
            'avatar' => 'avatar-1.jpg',
            'created_at' => now(),
        ]);

        $user->assignRole('admin');
    }
        
}
