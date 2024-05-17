<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Comment;
use App\Models\User;
use App\Models\Task;

class CommentSeeder extends Seeder
{
    public function run()
    {
        $users = User::all();
        $tasks = Task::all();
        $faker = Faker::create();

        foreach ($users as $user) {
            foreach ($tasks->random(rand(5, 10)) as $task) {
                Comment::factory()->create([
                    'user_id' => $user->id,
                    'task_id' => $task->id,
                    'body' => $faker->text(200),
                ]);
            }
        }
    }
}