<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Tag;
use App\Models\Task;

class TagSeeder extends Seeder
{
    public function run()
    {
        $tasks = Task::all();
        $faker = Faker::create();

        foreach ($tasks as $task) {
            $task->tags()->attach(Tag::create(['name' => $faker->word])->id);
        }
    }
}