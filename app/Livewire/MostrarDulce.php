<?php

namespace App\Livewire;

use App\Models\Dulce;
use Livewire\Component;
use Livewire\WithPagination;

class MostrarDulce extends Component
{
    use WithPagination;
    public $perPage = 10;

   protected $listeners = ['eliminarDulce'];
   #[On('eliminarDulce')]    
    public function eliminarDulce(Dulce $dulce) {
        $dulce->delete();
    }
    public function render()
    {
        $dulces = Dulce::query()->paginate($this->perPage);
        return view('livewire.mostrar-dulce', [
            'dulces' => $dulces
        ]);
    }
}
