<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('surveys.store') }}">
                        @csrf

                        <x-label for="survey" value="Survey name"></x-label>

                        <x-input id="survey" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus></x-input>

                        <div class="flex flex-end">
                            <x-button class="ml-3">
                                {{ __('Create new') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
