<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('email','fauzan08fauzan@gmail.com')->first();

        if (!$user){
            User::create([
                'name' => 'Fauzan',
                'email' => 'fauzan08fauzan@gmail.com',
                'role' => 'admin',
                'password' => Hash::make('kosakionodera')
            ]);
        }
    }
}
