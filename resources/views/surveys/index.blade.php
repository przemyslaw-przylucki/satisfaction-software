<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Your team\'s surveys') }}
            </h2>
            <a href="{{ route('surveys.store') }}" class="inline-flex items-center px-3 py-2 border border-gray-300 shadow-sm text-sm leading-4 font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Create new
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @foreach ($surveys as $survey)
                        <a class="text-blue-500 flex items-center justify-between" href="{{ route('surveys.details', $survey) }}">
                            <span class="font-bold">
                                {{ $survey->name }}
                            </span>
                            <span>
                                avg: {{ 0 }}, submissions: {{ $survey->submissions_count }}
                            </span>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
