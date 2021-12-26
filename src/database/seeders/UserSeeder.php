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
        $users = [
            [
                'id' => 1,
                'name' => 'Quang Bảo',
                'email' => 'quangbaorp@gmail.com',
                'password' => Hash::make('baooibao1'),
                'avatar' => null,
                'role_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'name' => 'quang bảo',
                'email' => 'quangbao@gmail.com',
                'password' => Hash::make('baooibao1'),
                'avatar' => null,
                'role_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
