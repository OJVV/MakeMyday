<?php

namespace App\Livewire;

use App\Models\Arreglo;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditarArreglo extends Component
{
    use WithFileUploads;
    
    public $arreglo_id;
    public $titulo;
    public $imagen;
    public $imagen_nueva;

    protected $rules =[
        'titulo' => 'required|string',
        'imagen_nueva'=>'nullable|required|image'
        
    ];

    public function mount(Arreglo $arreglo)
    {
        $this->arreglo_id = $arreglo->id;
        $this->titulo = $arreglo->titulo;
        $this->imagen = $arreglo->imagen;
    }

    public function editarArreglo()
    {
        $datos = $this->validate();
        
      
        // found Arreglo edit 
        $arreglo = Arreglo::find($this->arreglo_id);

        if($this->imagen_nueva){
            $imagen = $this->imagen_nueva->store('public/arreglo');
            $datos['imagen'] = str_replace('public/arreglo/', '', $imagen);
            Storage::delete('public/arreglo/' . $arreglo->imagen);
        }
        //add value
        $arreglo->titulo = $datos['titulo'];
        $arrelo->imagen = $datos['imagen'] ?? $arreglo->imagen;


     
        //save
        $arreglo->save();
        //redirection
        session()->flash('mensaje', 'El Post se actualizó correctamente');

        return redirect()->route('arreglo.index');
    }
    public function render()
    {
        return view('livewire.editar-arreglo');
    }
}
