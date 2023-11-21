<?php

namespace App\Livewire;

use App\Models\Ella;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class EditarEllas extends Component
{
    use WithFileUploads;
    
    public $ella_id;
    public $titulo;
    public $imagen;
    public $imagen_nueva;

    protected $rules =[
        'titulo' => 'required|string',
        'imagen_nueva'=>'nullable|required|image'
        
    ];

    public function mount(Ella $ella)
    {
        $this->ella_id = $ella->id;
        $this->titulo = $ella->titulo;
        $this->imagen = $ella->imagen;
    }

    public function editarElla()
    {
        $datos = $this->validate();
        
      
        // found Ella edit 
        $ella = Ella::find($this->ella_id);

        if($this->imagen_nueva){
            $imagen = $this->imagen_nueva->store('public/ella');
            $datos['imagen'] = str_replace('public/ella/', '', $imagen);
            Storage::delete('public/ella/' . $ella->imagen);
        }
        //add value
        $ella->titulo = $datos['titulo'];
        $ella->imagen = $datos['imagen'] ?? $ella->imagen;


     
        //save
        $ella->save();
        //redirection
        session()->flash('mensaje', 'El Post se actualizó correctamente');

        return redirect()->route('ellas.index');
    }
    public function render()
    {
        return view('livewire.editar-ellas');
    }
}
