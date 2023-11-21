<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('New Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <h1 class="text-2xl font-bold text-center mb-10">Para Ella</h1>

                <div class="md:flex md:justify-center p-5">
                   <livewire:crear-ellas />
                </div>
         
            </div>
        </div>
    </div>
</x-app-layout>
