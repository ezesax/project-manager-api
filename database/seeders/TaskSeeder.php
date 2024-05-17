<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Task;
use App\Models\Project;

class TaskSeeder extends Seeder
{
    public function run()
    {
        $projects = Project::all();
        $faker = Faker::create();

        foreach ($projects as $project) {
            Task::factory()->count(rand(10, 15))->create(['description' => $faker->text(200), 'name' => $faker->sentence(5),'project_id' => $project->id, 'assigned_to' => rand(4, 7)]);
        }
    }
}