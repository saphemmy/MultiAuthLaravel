<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [[
            'id'                 => 1,
            'name'               => 'Admin',
            'email'              => 'admin@admin.com',
            'password'           => '$2y$10$8Y3/KXyW0fzkVlxjcR48e.uTVTJeBzoi9G6wwuV5FjLAUqKIhULHi',
            'remember_token'     => null,
            'created_at'         => '2019-07-31 16:59:20',
            'updated_at'         => '2019-07-31 16:59:20',
            'deleted_at'         => null,
            'approved'           => 1,
            'verified'           => 1,
            'verified_at'        => '2019-07-31 16:59:20',
            'verification_token' => '',
            'username'           => '',
        ]];

        User::insert($users);
    }
}
