<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Backoffice Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <h3 class="text-lg font-medium mb-4">{{ __('Manage Your Festival') }}</h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <a href="{{ route('admin.events.index') }}" class="block p-6 bg-indigo-50 dark:bg-indigo-900/30 rounded-lg hover:shadow-md transition">
                            <h4 class="font-semibold text-indigo-700 dark:text-indigo-300">{{ __('Events') }}</h4>
                            <p class="mt-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Create and manage Pride events') }}</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
