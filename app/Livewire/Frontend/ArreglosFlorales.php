<?php

namespace App\Livewire\Frontend;

use App\Models\Arreglo;
use Livewire\Component;

class ArreglosFlorales extends Component
{
    public function render()
    {
        $arreglos = Arreglo::all();
        return view('livewire.frontend.arreglos-florales', ['arreglos' => $arreglos])->layout("layouts.base");
    }
}
