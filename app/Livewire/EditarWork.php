<?php

namespace App\Livewire;

use App\Models\Work;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class EditarWork extends Component
{
    use WithFileUploads;
    
    public $work_id;
    public $titulo;
    public $imagen;
    public $imagen_nueva;

    protected $rules =[
        'titulo' => 'required|string',
        'imagen_nueva'=>'nullable|required|image'
        
    ];

    public function mount(Work $work)
    {
        $this->work_id = $work->id;
        $this->titulo = $work->titulo;
        $this->imagen = $work->imagen;
    }

    public function editarPost()
    {
        $datos = $this->validate();
        
      
        // found work edit 
        $work = Work::find($this->work_id);

        if($this->imagen_nueva){
            $imagen = $this->imagen_nueva->store('public/work');
            $datos['imagen'] = str_replace('public/work/', '', $imagen);
            Storage::delete('public/work/' . $work->imagen);
        }
        //add value
        $work->titulo = $datos['titulo'];
        $work->imagen = $datos['imagen'] ?? $work->imagen;


     
        //save
        $work->save();
        //redirection
        session()->flash('mensaje', 'El Post se actualizó correctamente');

        return redirect()->route('work.index');
    }
    public function render()
    {
        return view('livewire.editar-work');
    }
}
