<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Turmas extends Component
{
    public $turmas;

    public function mount($turmas)
    {
        $this->turmas = $turmas;
    }

    public function render()
    {
        return view('livewire.turmas');
    }
}
