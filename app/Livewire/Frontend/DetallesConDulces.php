<?php

namespace App\Livewire\Frontend;

use App\Models\Dulce;
use Livewire\Component;

class DetallesConDulces extends Component
{
    public function render()
    {
        $dulces = Dulce::all();
        return view('livewire.frontend.detalles-con-dulces', ['dulces' => $dulces])->layout("layouts.base");
    }
}
