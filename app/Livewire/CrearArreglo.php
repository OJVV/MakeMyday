<?php

namespace App\Livewire;

use App\Models\Arreglo;
use Livewire\Component;
use Livewire\WithFileUploads;

class CrearArreglo extends Component
{
    use WithFileUploads;
    
    public $titulo;
    public $imagen;

    protected $rules =[
        'titulo' => 'required|string',
        'imagen'=>'required|image'

    ];

    public function crearArreglo(){
        $datos = $this->validate();

        $imagen = $this->imagen->store('public/arreglo');
        $datos['imagen'] = str_replace('public/arreglo/', '', $imagen);


        Arreglo::create([
            'titulo' => $datos['titulo'],
            'imagen' => $datos['imagen'],
        ]);

        session()->flash('mensaje', 'El post se publicó correctamente');


        return redirect()->route('arreglo.index');

    }
    public function render()
    {
        return view('livewire.crear-arreglo');
    }
}
