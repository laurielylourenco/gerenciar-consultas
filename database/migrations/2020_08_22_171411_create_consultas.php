<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('dentista_id');
            
            $table->char('name',100);
            $table->char('dentist',100);
            $table->char('process',100);
            $table->date('day');
            $table->time('hours');
            $table->decimal('money', 8, 2);
            $table->timestamps();



            $table->foreign('dentista_id')->references('id')->on('dentistas');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consultas');
    }
}
