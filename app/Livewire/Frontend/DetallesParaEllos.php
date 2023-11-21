<?php

namespace App\Livewire\Frontend;

use App\Models\Ella;
use App\Models\Work;
use Livewire\Component;

class DetallesParaEllos extends Component
{
    public function render()
    {
        $works = Work::all();
        return view('livewire.frontend.detalles-para-ellos', ['works'=>$works])->layout("layouts.base");
    }
}
