<?php

namespace App\Livewire\Frontend;

use App\Models\Work;
use Livewire\Component;

class WorkComponent extends Component
{
    public function render()
    {
        $works = Work::all();
        return view('livewire.frontend.work-component', ['works' => $works,])->layout("layouts.base");
    }
}
