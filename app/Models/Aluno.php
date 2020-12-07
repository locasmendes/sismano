<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;

    protected $table = 'alunos';
    public $timestamps = true;

    protected $casts = [
        'avaliacoes' => 'float'
    ];
    protected $hidden = ['pivot'];
    protected $fillable = [
        'firstName',
        'lastName',
        'turmaId'
    ];

    public function turmas()
    {
        return $this->belongsTo(Turma::class, 'turmas', 'id', 'turmaId');
    }
}
