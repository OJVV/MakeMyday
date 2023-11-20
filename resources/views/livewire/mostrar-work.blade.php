
<div>
<div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
    @forelse ($works as $work )
        
        <div class="p-6 bg-white border-b border-gray-200 md:flex md:justify-between md:items-center">
            <div class="leading-10">
                <a href="#" class="text-xl font-bold">
                    {{$work->titulo}}
                </a>

              
            </div>

            <div class="flex flex-col md:flex-row items-stretch gap-3 mt-5 md:mt-0">
                <a href="{{route('work.edit', $work->id)}}" class="bg-blue-800 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center">
                    Editar
                </a>

                <button type="button" wire:click="$dispatch('mostrarAlerta', {{$work->id}})"  class="bg-red-600 py-2 px-4 rounded-lg text-white text-xs font-bold uppercase text-center">
                    Eliminar
                </button>
            </div>
        </div>

    @empty 

    <p class="p-3 text-center text-sm text-gray-600"> No Hay Trabajo Publicado</p>
    @endforelse
   
</div>


<div class="flex justify-center mt-10">
    {{ $works->links() }}
</div>

</div>

@push('scripts')


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<script>
    document.addEventListener('livewire:initialized', () => {
        @this.on('mostrarAlerta', (workId) => {
            Swal.fire({
                title: '¿Eliminar Post?',
                text: "Un Post eliminado no se puede recuperar:(",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, eliminar!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    // ELiminar vacante
                    Livewire.dispatch('eliminarWork', {work: workId});
                    Swal.fire(
                        'Se eliminó el Post',
                        'Eliminado correctamente',
                        'success'
                    )
                }
            })

        });
    });
</script> 

@endpush