<?php

namespace App\Http\Livewire;

use App\Models\Aluno;
use App\Models\Nota;
use App\Models\Turma;
use Livewire\Component;

class ManipulaNotas extends Component
{
    public $aluno;
    public $alunoid;
    public $notas;
    public $notasid;
    public $disciplina;
    public $disciplinaid;

    public function mount(){
        $this->aluno = Aluno::where('id', $this->alunoid)->first();
        $stravaliacoes = Nota::where('aluno_id', $this->alunoid)->first();
        $this->notasid = $stravaliacoes->id;
        $avaliacoes = explode(';', $stravaliacoes->notas);
        $this->disciplina = Turma::where('id', $this->disciplinaid)->first();
        $numavs= count($avaliacoes);
        if($numavs < $this->disciplina->avaliacoes){
            for($i=count($avaliacoes)+1;$i<=$this->disciplina->avaliacoes;$i++){
                $avaliacoes[$i] = 0;
            }
        }
        $this->notas = $avaliacoes;
    }
    public function render()
    {
        return view('livewire.manipula-notas');
    }
    public function salvar(){
        dd($this->notas);
    }
}
