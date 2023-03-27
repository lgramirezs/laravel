@csrf

<div class="w-full h-auto p-6 flex flex-col space-y-9">

    <div>
        <x-input-label for="name" :value="('Nombre')"/>
        <x-text-input id="name" name="name" type="text" class="mt-1 block w-full sm:w-1/2" placeholder="Nombre y apellido" required autocomplete="name" autofocus value="{{old('name', $user->name )}}"/>
        <x-input-error class="mt-2" :messages="$errors->get('name')" />
    </div>
    <div>
        <x-input-label for="email" :value="_('Correo electrónico')" />
        <x-text-input id="email" name="email" type="email" class="mt-1 block w-full sm:w-1/2"  placeholder="Correo electrónico" required autocomplete="name" value="{{old('email', $user->email)}}"/>
        <x-input-error :messages="$errors->get('email')"></x-input-error>
    </div>
    <div>
        <x-input-label for="password" :value="_('Contraseña')" />
        <x-text-input id="password" name="password" type="password" class="mt-1 block w-full sm:w-1/2"  placeholder="contraseña" required autocomplete="contraseña" value="{{old('password', $user->password)}}"/>
        <x-input-error :messages="$errors->get('password')"></x-input-error>
    </div>
    <div class="pt-3 flex space-x-3">
        <x-tertiary-button :href="route('users.index')">Cancelar</x-tertiary-button>
        <x-primary-button>{{ __('Guardar') }}</x-primary-button>
    </div>
</div>
