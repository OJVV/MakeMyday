<?php

namespace App\Livewire;

use App\Models\Work;
use Livewire\Component;
use Livewire\WithPagination;

class MostrarWork extends Component
{
    use WithPagination;
    public $perPage = 10;

   protected $listeners = ['eliminarWork'];
   #[On('eliminarWork')]    
    public function eliminarWork(Work $work) {
        $work->delete();
    }
    

    

    public function render()
    {
        $works = Work::query()->paginate($this->perPage);
        return view('livewire.mostrar-work', [
            'works' => $works
        ]);
    }
}