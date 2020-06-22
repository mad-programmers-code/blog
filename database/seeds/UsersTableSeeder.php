<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$9r4DkFq3Q/cpN95Nmf1uzuIQ3Rv9JWgrakXO.E..Q.JjOelKKJmvO',
                'remember_token' => null,
            ],
        ];

        User::insert($users);
    }
}
