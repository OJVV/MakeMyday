<?php

namespace App\Livewire;

use App\Models\Dulce;
use Livewire\Component;
use Livewire\WithFileUploads;

class CrearDulce extends Component
{
    use WithFileUploads;
    
    public $titulo;
    public $imagen;

    protected $rules =[
        'titulo' => 'required|string',
        'imagen'=>'required|image'

    ];

    public function crearDulce(){
        $datos = $this->validate();

        $imagen = $this->imagen->store('public/dulce');
        $datos['imagen'] = str_replace('public/dulce/', '', $imagen);


        Dulce::create([
            'titulo' => $datos['titulo'],
            'imagen' => $datos['imagen'],
        ]);

        session()->flash('mensaje', 'El post se publicó correctamente');


        return redirect()->route('dulce.index');

    }
    public function render()
    {
        return view('livewire.crear-dulce');
    }
}
