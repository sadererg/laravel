<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('yches', function (Blueprint $table) {
            $table->id();
            $table->string('name');
           // $table->string('fam');
            $table->Integer('vozrast');
           // $table->string('class');
          //  $table->float('cr_bal');  
           $table->date('data');  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('yches');
    }
};
