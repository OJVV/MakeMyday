<?php

namespace App\Livewire;

use App\Models\Arreglo;
use Livewire\Component;
use Livewire\WithPagination;

class MostrarArreglo extends Component
{
    use WithPagination;
    public $perPage = 10;

   protected $listeners = ['eliminarArreglo'];
   #[On('eliminarArreglo')]    
    public function eliminarArreglo(Arreglo $arreglo) {
        $arreglo->delete();
    }
    public function render()
    {
        $arreglos = Arreglo::query()->paginate($this->perPage);
        return view('livewire.mostrar-arreglo', [
            'arreglos' => $arreglos
        ]);
    }
}
