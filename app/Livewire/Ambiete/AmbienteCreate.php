<?php

namespace App\Livewire\Ambiete;

use App\Models\Ambiente;
use Livewire\Component;

class AmbienteCreate extends Component
{

    public $nome;
    public $descricao;
    public $status;

    public function store()
    {
        $this->validate([
            'nome' => 'required|string',
            'descricao' => 'nullable|string'
        ]);

        Ambiente::create([
            'nome' => $this->nome,
            'descricao' => $this->descricao,
            'status' => $this->status ? true: false,

        ]);

        session()->flash('success', 'Ambiente cadastrado com sucesso!');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.ambiete.ambiente-create');
    }
}
