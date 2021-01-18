<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Your team\'s surveys') }} > {{ $survey->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="font-bold text-2xl">{{ $survey->name }}</h1>

                    <div>
                        Submissions: {{ $survey->submissions->count() }}
                    </div>
                    <div>
                        Average: {{ 0 }}
                    </div>
                </div>

                @foreach($survey->submissions as $submission)
                    <div class="p-6 bg-white border-b border-gray-200">
                        {{ $submission->rate }} / 4

                        User from {{ $submission->browser_name }} using {{ $submission->operating_system }}
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
