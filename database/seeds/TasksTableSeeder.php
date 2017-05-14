<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('tasks')->insert([
        'task_name'   => str_random(10),
        'task_desc'   => str_random(10),
        'due_date'    => Carbon::now(),
      ]);
    }
}
