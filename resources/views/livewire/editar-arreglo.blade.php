<div>
    <form method="POST" wire:submit.prevent='editarArreglo'  novalidate>
        @csrf

        <div>
            <x-label for="titulo" value="{{ __('Titulo') }}" />
            <x-input 
            id="titulo" 
            class="block mt-1 w-full" 
            type="text" 
            wire:model="titulo" 
            :value="old('titulo')" 
            placeholder="Titulo"
            />
            @error('titulo')
              <livewire:mostrar-alerta :message="$message"/>
            @enderror
        </div>

        <div>
            <x-label for="imagen" value="{{ __('Imagen') }}" />
            <x-input 
            id="imagen" 
            class="block mt-1 w-full" 
            type="file" 
           wire:model='imagen_nueva'
           accept="image/*"
            />

            <div class="my-5 w-80">
                <x-label value="{{ __('Imagen-Actual') }}" />

                <img src="{{asset('storage/arreglo/' . $imagen)}}" alt="{{ 'Imagen arreglo ' . $titulo }}">
            </div>

         <div class="my-5 w-80">
                @if ($imagen_nueva)
                    Imagen nueva: 
                    <img src="{{$imagen_nueva->temporaryUrl()}}" alt="" class="">
                @endif
            </div> 
            @error('imagen_nueva')
            <livewire:mostrar-alerta :message="$message"/>
          @enderror

        
        </div>

        <x-button class="mt-2 bg-green-800">
            {{ __('Guardar Cambios') }}
        </x-button>


    </form>
</div>
