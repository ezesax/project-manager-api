<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Project;
use App\Models\User;

class ProjectSeeder extends Seeder
{
    public function run()
    {
        $users = User::all();
        $faker = Faker::create();

        foreach ($users as $user) {
            Project::factory()->count(rand(10, 15))->create(['name' => $faker->sentence(5), 'description' => $descripcion = $faker->text(200), 'user_id' => $user->id]);
        }
    }
}