<?php

use Illuminate\Database\Seeder;
use App\Todo;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TodosSeeder::class);
    }
}
