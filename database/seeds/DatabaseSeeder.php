<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Auth\Doctor::class , 10)->create();
        factory(\App\Models\Auth\Patient::class , 10)->create();
        factory(\App\Models\Department\Department::class , 10)->create();
    }
}
