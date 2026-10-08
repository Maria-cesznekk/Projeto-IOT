<?php

namespace App\Livewire\Ambiete;

use App\Models\Ambiente;
use Livewire\Component;

class AmbienteEdit extends Component
{
    public $nome_id;
    public $descricao;
    public $status;

    public function mount($id)
    {
        $nome = Ambiente::findOrFail($id);

        $this->nome_id = $nome->id;
        $this->descricao = $nome->descricao;
        $this->status = $nome->status;
    }

    public function update()
    {
        $this->validate([

            'descricao' => 'nullable|string',
            'status' => 'required|string',

        ]);
        $nome = Ambiente::findOrFail($this->nome_id);

        $nome->update([

            'descricao' => $this->descricao,
            'status' => $this->status,

        ]);
        session()->flash('success', 'Ambiente atualizado com sucesso!');
    }
    public function render()
    {
        return view('livewire.ambiete.ambiente-edit');
    }
}
