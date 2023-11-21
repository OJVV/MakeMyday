<div>
    <form method="POST" wire:submit.prevent='crearDulce'  novalidate>
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
           wire:model='imagen'
           accept="image/*"
            />

            <div class="my-5 w-80">
                @if ($imagen)
                    Imagen: 
                    <img src="{{$imagen->temporaryUrl()}}" alt="" class="">
                @endif
            </div>
            @error('imagen')
            <livewire:mostrar-alerta :message="$message"/>
          @enderror

        
        </div>

        <x-button class="mt-2 bg-green-800">
            {{ __('Subir') }}
        </x-button>


    </form>
</div>
