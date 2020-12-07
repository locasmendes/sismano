<?php

namespace App\Http\Livewire;

use App\Models\Turma;
use Livewire\Component;

class SelectTurma extends Component
{
    private $cursos;

    public function mount(){
        $this->cursos = Turma::all();
    }

    public function render()
    {
        return view('livewire.select-turma', ['cursos' => $this->cursos]);
    }
}
