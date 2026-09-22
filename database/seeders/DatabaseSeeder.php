<?php

namespace Database\Seeders;

use App\Models\{User, Task};
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $task_data_sets = [
            [
                'name' => 'Maglinig',
                'description' => 'Clean the CR'
            ],
            [
                'name' => 'Maligo',
                'description' => '5 mins'
            ],
            [
                'name' => 'Magaral',
                'description' => '10 mins'
            ]
        ];

        foreach($task_data_sets as $task) {
             Task::create($task);
        }
    }
}
