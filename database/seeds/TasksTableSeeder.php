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
            'status' => 'test # ' . 1,
            'content' => 'test content ' . 1
        ]);
    }
}
