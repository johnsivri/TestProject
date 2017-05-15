<?php

use Illuminate\Database\Seeder;

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
        'user_id'     => 1,
        'task_name'   => str_random(10),
        'task_desc'   => str_random(10),
        'due_date'    => '2010-12-15',
      ]);
    }
}
