<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class Admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new App\User;
        $user->name = "Muflikhan";
        $user->email = "muf@dev.com";
        $user->password = Hash::make("1234");
        $user->save();
    }
}
