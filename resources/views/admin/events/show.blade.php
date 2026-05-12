<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="text-xl font-semibold leading-tight text-pride-black dark:text-white/90">
                {{ $event->title }}
            </h2>
            <div class="flex items-center gap-3">
                <a href="{{ route('admin.events.edit', $event) }}" class="inline-flex items-center rounded-md bg-pride-blue px-4 py-2 text-xs font-semibold uppercase tracking-widest text-white shadow-sm transition hover:bg-pride-blue focus:outline-none focus:ring-2 focus:ring-pride-blue focus:ring-offset-2 dark:focus:ring-offset-pride-black">
                    {{ __('Edit') }}
                </a>
                <a href="{{ route('admin.events.index') }}" class="text-sm text-gray-600 hover:underline dark:text-white/60">Back to list</a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-3xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg dark:bg-pride-black">
                <div class="p-6 text-pride-black dark:text-white">
                    @if($event->image)
                        <div class="mb-6">
                            <img src="{{ Storage::url($event->image) }}" alt="{{ $event->title }}" class="w-full rounded-lg object-cover shadow-md">
                        </div>
                    @endif

                    <dl class="space-y-4">
                        <div>
                            <dt class="text-sm font-medium text-gray-500 dark:text-white/60">Title</dt>
                            <dd class="mt-1 text-lg">{{ $event->title }}</dd>
                        </div>
                        <div>
                            <dt class="text-sm font-medium text-gray-500 dark:text-white/60">Slug</dt>
                            <dd class="mt-1 text-gray-700 dark:text-white/70">{{ $event->slug }}</dd>
                        </div>
                        <div>
                            <dt class="text-sm font-medium text-gray-500 dark:text-white/60">Description</dt>
                            <dd class="mt-1 whitespace-pre-wrap text-gray-700 dark:text-white/70">{{ $event->description }}</dd>
                        </div>
                        <div>
                            <dt class="text-sm font-medium text-gray-500 dark:text-white/60">Location</dt>
                            <dd class="mt-1 text-gray-700 dark:text-white/70">{{ $event->location }}</dd>
                            @if($event->maps_url)
                                <dd class="mt-3">
                                    <iframe src="{{ $event->maps_url }}" width="100%" height="300" style="border:0; border-radius: 0.5rem;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </dd>
                            @endif
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <dt class="text-sm font-medium text-gray-500 dark:text-white/60">Start Date</dt>
                                <dd class="mt-1 text-gray-700 dark:text-white/70">{{ $event->start_date->format('F j, Y g:i A') }}</dd>
                            </div>
                            <div>
                                <dt class="text-sm font-medium text-gray-500 dark:text-white/60">End Date</dt>
                                <dd class="mt-1 text-gray-700 dark:text-white/70">{{ $event->end_date->format('F j, Y g:i A') }}</dd>
                            </div>
                        </div>
                        <div>
                            <dt class="text-sm font-medium text-gray-500 dark:text-white/60">Status</dt>
                            <dd class="mt-1">
                                @if($event->is_published)
                                    <span class="inline-flex rounded-full bg-pride-pink-light px-2 text-xs font-semibold leading-5 text-pride-blue dark:bg-pride-navy/30 dark:text-pride-pink">Published</span>
                                @else
                                    <span class="inline-flex rounded-full bg-pride-pink-light px-2 text-xs font-semibold leading-5 text-pride-pink dark:bg-pride-navy/30 dark:text-pride-pink">Draft</span>
                                @endif
                            </dd>
                        </div>
                        <div>
                            <dt class="text-sm font-medium text-gray-500 dark:text-white/60">Created by</dt>
                            <dd class="mt-1 text-gray-700 dark:text-white/70">{{ $event->user->name }}</dd>
                        </div>
                        <div>
                            <dt class="text-sm font-medium text-gray-500 dark:text-white/60">Created at</dt>
                            <dd class="mt-1 text-gray-700 dark:text-white/70">{{ $event->created_at->format('F j, Y g:i A') }}</dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>