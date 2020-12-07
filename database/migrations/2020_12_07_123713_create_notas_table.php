<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('disciplina_id');
            $table->foreign('disciplina_id')->references('id')->on('turmas');
            $table->unsignedBigInteger('aluno_id');
            $table->foreign('aluno_id')->references('id')->on('alunos');
            $table->string('notas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notas');
    }
}
