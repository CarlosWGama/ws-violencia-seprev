<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComplaintsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('complaints', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_violation_types')->unsigned();
            $table->bigInteger('id_author_reports')->unsigned();

            $table->string('classificacao');
            $table->string('identificacao');
            $table->string('grau_relacao')->nullable();
            $table->string('local_violacao');
            $table->string('estabelecimento')->nullable();
            $table->string('data_violacao');
            $table->string('descricao_violacao');
            $table->string('midia_anexada');
            $table->integer('tipo_midia');
            $table->string('vinculo_institucional');
            $table->string('tipo_instituicao')->nullable();
            $table->string('instituicao')->nullable();

            $table->foreign('id_violation_types')->references('id')->on('violation_types')->onDelete('cascade');
            $table->foreign('id_author_reports')->references('id')->on('author_reports')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('complaints');
    }
}
