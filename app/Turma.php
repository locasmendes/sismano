<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    protected $fillable = [
        'turma', 'disciplina', 'turno', 'alunos'
    ];

    public function alunos()
    {
        return $this->hasMany('App\Aluno', 'id', 'alunos');
    }
    //todo: função alunos () relacionamento: 1 turma contém vários alunos
    //todo: um aluno só pode pertencer á uma turma
    //OU
    //1 aluno pode fazer parte de 1 ou várias turmas disciplinas
    //a nota pode ser só 1 turma pra 1 aluno
    // nota: turma, nota, id, aluno
}
