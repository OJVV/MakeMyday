<?php

namespace App\Livewire;

use App\Models\Ella;
use App\Models\Work;
use Livewire\Component;
use Livewire\WithPagination;

class MostrarEllas extends Component
{
    use WithPagination;
    public $perPage = 10;

   protected $listeners = ['eliminarElla'];
   #[On('eliminarElla')]    
    public function eliminarElla(Ella $ella) {
        $ella->delete();
    }
    
    public function render()
    {
        $ellas = Ella::query()->paginate($this->perPage);
        return view('livewire.mostrar-ellas', [
            'ellas' => $ellas
        ]);
    }
}
