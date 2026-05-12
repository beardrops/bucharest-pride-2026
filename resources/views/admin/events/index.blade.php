<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="text-xl font-semibold leading-tight text-pride-black dark:text-white/90">
                {{ __('Events') }}
            </h2>
            <a href="{{ route('admin.events.create') }}" class="inline-flex items-center rounded-md bg-pride-blue px-4 py-2 text-xs font-semibold uppercase tracking-widest text-white shadow-sm transition hover:bg-pride-blue focus:outline-none focus:ring-2 focus:ring-pride-blue focus:ring-offset-2 dark:focus:ring-offset-pride-black">
                {{ __('+ New Event') }}
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            @if (session('status'))
                <div class="mb-6 rounded-lg bg-green-50 px-4 py-3 text-sm text-pride-blue dark:bg-pride-navy/30 dark:text-pride-pink">
                    {{ session('status') }}
                </div>
            @endif

            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg dark:bg-pride-black">
                <div class="p-6 text-pride-black dark:text-white">
                    @if($events->count())
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                <thead class="bg-pride-gray dark:bg-gray-700">
                                    <tr>
                                        <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500 dark:text-white/70">Title</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500 dark:text-white/70">Location</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500 dark:text-white/70">Date</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500 dark:text-white/70">Status</th>
                                        <th class="px-6 py-3 text-left text-xs font-medium uppercase tracking-wider text-gray-500 dark:text-white/70">Author</th>
                                        <th class="px-6 py-3 text-right text-xs font-medium uppercase tracking-wider text-gray-500 dark:text-white/70">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                    @foreach($events as $event)
                                        <tr class="hover:bg-pride-gray dark:hover:bg-gray-700/50">
                                            <td class="whitespace-nowrap px-6 py-4">
                                                <div class="text-sm font-medium">{{ $event->title }}</div>
                                            </td>
                                            <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-500 dark:text-white/60">{{ $event->location }}</td>
                                            <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-500 dark:text-white/60">
                                                {{ $event->start_date->format('M d, Y') }}
                                                @if($event->end_date)
                                                    &ndash; {{ $event->end_date->format('M d, Y') }}
                                                @endif
                                            </td>
                                            <td class="whitespace-nowrap px-6 py-4">
                                                @if($event->is_published)
                                                    <span class="inline-flex rounded-full bg-pride-pink-light px-2 text-xs font-semibold leading-5 text-pride-blue dark:bg-pride-navy/30 dark:text-pride-pink">Published</span>
                                                @else
                                                    <span class="inline-flex rounded-full bg-pride-pink-light px-2 text-xs font-semibold leading-5 text-pride-pink dark:bg-pride-navy/30 dark:text-pride-pink">Draft</span>
                                                @endif
                                            </td>
                                            <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-500 dark:text-white/60">{{ $event->user->name }}</td>
                                            <td class="whitespace-nowrap px-6 py-4 text-right text-sm font-medium">
                                                <a href="{{ route('admin.events.show', $event) }}" class="text-pride-blue hover:text-pride-navy dark:text-pride-blue dark:hover:text-pride-pink-light">View</a>
                                                <a href="{{ route('admin.events.edit', $event) }}" class="ml-3 text-pride-blue hover:text-pride-navy dark:text-pride-blue dark:hover:text-pride-pink-light">Edit</a>
                                                <form action="{{ route('admin.events.destroy', $event) }}" method="POST" class="ml-3 inline" onsubmit="return confirm('Are you sure?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="text-red-600 hover:text-red-900 dark:text-red-400 dark:hover:text-red-300">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="mt-6">
                            {{ $events->links() }}
                        </div>
                    @else
                        <p class="text-center text-gray-500 dark:text-white/60">No events yet. <a href="{{ route('admin.events.create') }}" class="text-pride-blue hover:underline dark:text-pride-blue">Create your first event</a>.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>