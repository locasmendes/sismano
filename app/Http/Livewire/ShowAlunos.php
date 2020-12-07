<?php

namespace App\Http\Livewire;

use App\Models\Aluno;
use App\Models\Nota;
use Livewire\Component;

class ShowAlunos extends Component
{
    private $alunos;
    public $disciplina;
    protected $notas;
    public $temp_indice;
    public $temp_nota;

    public function mount(){
        $this->alunos = Aluno::where('turmaId', $this->disciplina->id)
        ->orderBy('id')
        ->get();
        $this->notas = Nota::where('disciplina_id', $this->disciplina->id)
        ->orderBy('aluno_id')
        ->get();
        $a=0;
        foreach($this->notas as $key => $aluno_notas){
            $nota = explode(';', $aluno_notas->notas);
            foreach($nota as $key => $valor){
                $nota[$key] = (float)$valor;
            }
            if(count($nota)<$this->disciplina->avaliacoes){
                for($i=count($nota)+1;$i<=$this->disciplina->avaliacoes;$i++){
                    $nota[$i] = 0;
                }
            }
            //dd($this->disciplina->avaliacoes);
            //dd((float)array_sum($nota));
            //dd(((float)array_sum($nota))/$this->disciplina->avaliacoes);
            $aluno_notas->notas = $nota;
            $this->notas[$a]->notas = $nota;
            $a++;
        }
    }

    public function render()
    {
        //dd($this->notas[0]->notas);
        return view('livewire.show-alunos', ['alunos' => $this->alunos, 'disciplina'=> $this->disciplina, 'notas' => $this->notas]);
    }

}
