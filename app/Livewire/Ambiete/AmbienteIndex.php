<?php

namespace App\Livewire\Ambiete;

use App\Models\Ambiente;
use Livewire\Component;

class AmbienteIndex extends Component
{

    public $search = '';

    public function delete($id)
    {
        // {
        //     Ambiente::findOrFail($id)->delete();

        //     session()->flash('success', 'Ambiente excluído com sucesso!');
        // }


        // {
        //     return view('livewire.ambiete.ambiente-index');
        // }


    }

    public function render()
    {
        $ambientes = Ambiente::all();
        return view('livewire.ambiete.ambiente-index',compact('ambientes'));
    }
}
