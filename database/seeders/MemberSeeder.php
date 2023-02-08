<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
//
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Int;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("members")->insert([
            "firstname" => fake()->firstName(),
            "lastname" => fake()->lastName(),
            "email" => fake()->unique()->email(),
            "gender" => rand(0, 2),
            "address" => NULL,
        ]);
    }
}
