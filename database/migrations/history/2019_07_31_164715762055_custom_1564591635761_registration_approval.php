<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Custom1564591635761RegistrationApproval extends Migration
{
    public function up()
    {
        App\User::all()->each(function (App\User $user) {
            $user->update([
                'approved' => true,
            ]);
        });
    }

    public function down()
    {
    }
}
