<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            "name"=> "seud abdulsemed",
            "email"=> "seudsahm2@gmail.com",
            "username"=>"sahm",
            "password"=> bcrypt("0966143454Sahm"),
            "role"=> "admin",
        ]);
    }
}
