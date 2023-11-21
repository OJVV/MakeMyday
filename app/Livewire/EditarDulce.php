<?php

namespace App\Livewire;

use App\Models\Dulce;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class EditarDulce extends Component
{
    use WithFileUploads;
    
    public $dulce_id;
    public $titulo;
    public $imagen;
    public $imagen_nueva;

    protected $rules =[
        'titulo' => 'required|string',
        'imagen_nueva'=>'nullable|required|image'
        
    ];

    public function mount(Dulce $dulce)
    {
        $this->dulce_id = $dulce->id;
        $this->titulo = $dulce->titulo;
        $this->imagen = $dulce->imagen;
    }

    public function editarDulce()
    {
        $datos = $this->validate();
        
      
        // found dulce edit 
        $dulce = Dulce::find($this->dulce_id);

        if($this->imagen_nueva){
            $imagen = $this->imagen_nueva->store('public/dulce');
            $datos['imagen'] = str_replace('public/dulce/', '', $imagen);
            Storage::delete('public/dulce/' . $dulce->imagen);
        }
        //add value
        $dulce->titulo = $datos['titulo'];
        $dulce->imagen = $datos['imagen'] ?? $dulce->imagen;


     
        //save
        $dulce->save();
        //redirection
        session()->flash('mensaje', 'El Post se actualizó correctamente');

        return redirect()->route('dulce.index');
    }
    public function render()
    {
        return view('livewire.editar-dulce');
    }
}
