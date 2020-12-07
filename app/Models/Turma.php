<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    use HasFactory;

    protected $table = 'turmas';
    public $timestamps = true;

    protected $casts = [
        'avaliacoes' => 'float'
    ];

    protected $fillable = [
        'turma',
        'turno',
        'avaliacoes'
    ];

    public function alunos()
    {
        return $this->hasMany('App\Aluno', 'turmaId', 'id');
    }
}
