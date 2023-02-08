<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        //\App\Models\ych::factory(10)->create();

        //\App\Models\ych::factory()->create
        ych::create([
            'fam' => 'Test User',
            'name' => 'test@example.com',
            'rost' => '160',
            'class' => '7-a',
            'cr_bal' => '4.2',
            'data' => '30.08.2004',
         ]);
    }
}
