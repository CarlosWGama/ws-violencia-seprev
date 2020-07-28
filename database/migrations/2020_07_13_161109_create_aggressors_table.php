<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAggressorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aggressors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('relationship');
            $table->char('genre');
            $table->text('description');
            $table->softDeletes();

            $table->unsignedBigInteger('complaint_id');
            $table->foreign('complaint_id')->on('complaints')->references('id')->onDelete('cascade');
            
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
        Schema::dropIfExists('aggressors');
    }
}
