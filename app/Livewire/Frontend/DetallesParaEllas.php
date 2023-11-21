<?php

namespace App\Livewire\Frontend;

use App\Models\Ella;
use Livewire\Component;

class DetallesParaEllas extends Component
{
    public function render()
    {
        $ellas = Ella::all();
        return view('livewire.frontend.detalles-para-ellas', ['ellas' => $ellas])->layout("layouts.base");
    }
}
