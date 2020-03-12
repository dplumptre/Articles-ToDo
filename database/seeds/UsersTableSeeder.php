<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;
use Illuminate\Support\Str;
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



        $role = Role::create([
            'role' => "Admin",
            'slug' => Str::slug("admin"),
        ]);



        $roletwo = Role::where('slug','admin')->first();



        $user1 = new User();
        $user1->name = "Mary";
        $user1->email = "admin@example.com";
        $user1->password = Hash::make('password123');
        $user1->save();
        $user1->roles()->attach($roletwo);
    }
}
