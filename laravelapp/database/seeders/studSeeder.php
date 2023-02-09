<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\student;
use App\Database\Factories\studentFactory;


class studSeeder extends Seeder{
    /**
     * 
     * @return  void
      */
      public function run()
      {//$this->call(ychSeeder::class);
       student::factory()->count(90)->create();


      }
}