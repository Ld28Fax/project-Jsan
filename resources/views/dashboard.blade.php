<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <x-input-label for="numéro" :value="__('Numéro')" />
                <x-text-input id="numéro" class="block mt-1 w-full" type="text" name="numéro" :value="old('numéro')" required autofocus autocomplete="numéro" />
                <x-input-error :messages="$errors->get('numéro')" class="mt-2" />
                
                <x-input-label for="nom" :value="__('Nom')" />
                <x-text-input id="nom" class="block mt-1 w-full" type="text" name="nom" :value="old('nom')" required autofocus autocomplete="nom" />
                <x-input-error :messages="$errors->get('nom')" class="mt-2" />

                <x-input-label for="prénom" :value="__('Prénom')" />
                <x-text-input id="prénom" class="block mt-1 w-full" type="text" name="prénom" :value="old('prénom')" required autofocus autocomplete="prénom" />
                <x-input-error :messages="$errors->get('prénom')" class="mt-2" />
       
                <x-input-label for="datenaissance" :value="__('Date de Naissance')" />
                <x-text-input id="datenaissance" class="block mt-1 w-full" type="date" name="datenaissance" :value="old('datenaissance')" required autofocus autocomplete="datenaissance" />
                <x-input-error :messages="$errors->get('datenaissance')" class="mt-2" />
       
                <x-input-label for="lieunaissance" :value="__('Lieu de Naissance')" />
                <x-text-input id="lieunaissance" class="block mt-1 w-full" type="text" name="lieunaissance" :value="old('lieunaissance')" required autofocus autocomplete="lieunaissance" />
                <x-input-error :messages="$errors->get('lieunaissance')" class="mt-2" />
       
                <x-input-label for="adresse" :value="__('Adresse')" />
                <x-text-input id="adresse" class="block mt-1 w-full" type="text" name="adresse" :value="old('adresse')" required autofocus autocomplete="adresse" />
                <x-input-error :messages="$errors->get('adresse')" class="mt-2" />
       
                <x-input-label for="motif" :value="__('Motif')" />
                <x-text-input id="motif" class="block mt-1 w-full" type="text" name="motif" :value="old('motif')" required autofocus autocomplete="motif" />
                <x-input-error :messages="$errors->get('motif')" class="mt-2" />

                <x-primary-button class="mt-4">
                {{ __('Enregistrer') }}
            </x-primary-button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
