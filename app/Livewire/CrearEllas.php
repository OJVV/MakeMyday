<?php

namespace App\Livewire;

use App\Models\Ella;
use Livewire\Component;
use Livewire\WithFileUploads;

class CrearEllas extends Component
{
    use WithFileUploads;
    
    public $titulo;
    public $imagen;

    protected $rules =[
        'titulo' => 'required|string',
        'imagen'=>'required|image'

    ];

    public function crearElla(){
        $datos = $this->validate();

        $imagen = $this->imagen->store('public/ella');
        $datos['imagen'] = str_replace('public/ella/', '', $imagen);


        Ella::create([
            'titulo' => $datos['titulo'],
            'imagen' => $datos['imagen'],
        ]);

        session()->flash('mensaje', 'El post se publicó correctamente');


        return redirect()->route('ellas.index');

    }
    public function render()
    {
        return view('livewire.crear-ellas');
    }
}
