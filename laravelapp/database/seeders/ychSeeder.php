<?php

namespace Database\Seeders;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ych;
use App\Database\Factories\ychFactory;


class ychSeeder extends Seeder{
    /**
     * 
     * @return  void
      */
      public function run()
      {//$this->call(ychSeeder::class);
       ych::factory()->count(10)->create();


      }
}