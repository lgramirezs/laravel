<x-app-layout>
    <x-slot name="title">
        {{ __('Panel de control') }}
    </x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Panel de control') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <x-tertiary-button :href="route('users.create')">Crear nuevo usuario</x-tertiary-button>
                    <x-tertiary-button :href="route('posts.create')">Crear nuevo post</x-tertiary-button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
