<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$user = new User;
        $user->name = "Admin";
        $user->email = "admin@gmail.com";
        $user->password = bcrypt("admin");
        $user->remember_token = Str::random(60);
        $user->save();
    }
}
