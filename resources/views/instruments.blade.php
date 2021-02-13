<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('add-instrument') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Nome')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Model -->
            <div>
                <x-label for="model" :value="__('Modelo')" />

                <x-input id="model" class="block mt-1 w-full" type="text" name="model" :value="old('model')" required autofocus />
            </div>

            <!-- Year -->
            <div>
                <x-label for="year" :value="__('Ano')" />

                <x-input id="year" class="block mt-1 w-full" type="number" name="year" :value="old('year')" required autofocus />
            </div>

            <!-- Type -->
            <div>
                <x-label for="type" :value="__('Tipo')" />

                <x-input id="type" class="block mt-1 w-full" type="text" name="type" :value="old('type')" required autofocus />
            </div>

            <!-- Price -->
            <div class="mt-4">
                <x-label for="price" :value="__('Valor')" />

                <x-input id="price" class="block mt-1 w-full" type="text" name="price" :value="old('price')" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('employee') }}">
                    {{ __('Home') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Registrar') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>