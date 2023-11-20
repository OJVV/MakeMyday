<?php

namespace App\Livewire\Frontend;

use App\Models\Work;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        $works = Work::all();
        return view('livewire.frontend.home-component', ['works' => $works,])->layout("layouts.base");
    }
}
