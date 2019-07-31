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
            'password'           => '$2y$10$.Ki2HxXFdzSZUqrp6irF9OMiPnTZey.U3wyiVqHndcyv1pTA7ctzC',
            'remember_token'     => null,
            'created_at'         => '2019-07-31 16:47:15',
            'updated_at'         => '2019-07-31 16:47:15',
            'deleted_at'         => null,
            'approved'           => 1,
            'verified'           => 1,
            'verified_at'        => '2019-07-31 16:47:15',
            'verification_token' => '',
        ]];

        User::insert($users);
    }
}
