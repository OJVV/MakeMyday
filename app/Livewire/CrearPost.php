<?php

namespace App\Livewire;

use App\Models\Work;
use Livewire\Component;
use Livewire\WithFileUploads;

class CrearPost extends Component
{

    use WithFileUploads;
    
    public $titulo;
    public $imagen;

    protected $rules =[
        'titulo' => 'required|string',
        'imagen'=>'required|image'

    ];

    public function crearPost(){
        $datos = $this->validate();

        $imagen = $this->imagen->store('public/work');
        $datos['imagen'] = str_replace('public/work/', '', $imagen);


        Work::create([
            'titulo' => $datos['titulo'],
            'imagen' => $datos['imagen'],
        ]);

        session()->flash('mensaje', 'El post se publicó correctamente');


        return redirect()->route('work.index');

    }

    public function render()
    {
        return view('livewire.crear-post');
    }
}
