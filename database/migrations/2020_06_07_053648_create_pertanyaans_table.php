<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePertanyaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pertanyaan', function (Blueprint $table) {
            $table->increments('id'); 
            $table->string('pertanyaan'); 
            $table->string('jwb_1');
            $table->string('jwb_2');
            $table->string('jwb_3');
            $table->string('jwb_4');
            $table->string('jwb_5');
            $table->string('jwb_6');
            $table->string('jwb_7');
            $table->string('jwb_8');
            $table->string('jwb_9');
            $table->string('jwb_10');
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
        Schema::dropIfExists('pertanyaans');
    }
}
