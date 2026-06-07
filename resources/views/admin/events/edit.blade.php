<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-pride-black dark:text-white/90">
            {{ __('Edit Event') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-3xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg dark:bg-pride-black">
                <div class="p-6 text-pride-black dark:text-white">
                    <form method="POST" action="{{ route('admin.events.update', $event) }}" enctype="multipart/form-data" class="space-y-6">
                        @csrf
                        @method('PUT')

                        <div>
                            <x-input-label for="title" :value="__('Title')" />
                            <x-text-input id="title" class="mt-1 block w-full" type="text" name="title" :value="old('title', $event->title)" required autofocus />
                            <x-input-error :messages="$errors->get('title')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="slug" :value="__('Slug (optional)')" />
                            <x-text-input id="slug" class="mt-1 block w-full" type="text" name="slug" :value="old('slug', $event->slug)" />
                            <p class="mt-1 text-xs text-gray-500 dark:text-white/60">Leave empty to auto-generate from title.</p>
                            <x-input-error :messages="$errors->get('slug')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="description" :value="__('Description')" />
                            <textarea id="description" name="description" rows="6" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-pride-blue focus:ring-pride-blue dark:border-pride-black dark:bg-pride-black dark:text-white/70 dark:focus:border-pride-blue dark:focus:ring-pride-blue">{{ old('description', $event->description) }}</textarea>
                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="location" :value="__('Location')" />
                            <x-text-input id="location" class="mt-1 block w-full" type="text" name="location" :value="old('location', $event->location)" required />
                            <x-input-error :messages="$errors->get('location')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="maps_url" :value="__('Google Maps Embed URL')" />
                            <x-text-input id="maps_url" class="mt-1 block w-full" type="url" name="maps_url" :value="old('maps_url', $event->maps_url)" placeholder="https://www.google.com/maps/embed?pb=..." />
                            <p class="mt-1 text-xs text-gray-500 dark:text-white/60">Paste the embed URL from Google Maps (Share → Embed a map → Copy HTML &amp; extract the src).</p>
                            <x-input-error :messages="$errors->get('maps_url')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="ticket_url" :value="__('Ticket URL')" />
                            <x-text-input id="ticket_url" class="mt-1 block w-full" type="url" name="ticket_url" :value="old('ticket_url', $event->ticket_url)" placeholder="https://www.eventbrite.com/e/..." />
                            <p class="mt-1 text-xs text-gray-500 dark:text-white/60">Link to ticket seller page. Leave empty if the event doesn't require tickets.</p>
                            <x-input-error :messages="$errors->get('ticket_url')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="ticket_label" :value="__('Ticket Button Label')" />
                            <x-text-input id="ticket_label" class="mt-1 block w-full" type="text" name="ticket_label" :value="old('ticket_label', $event->ticket_label)" placeholder="e.g. Buy Now, Get Tickets, Cumpără Bilete" />
                            <p class="mt-1 text-xs text-gray-500 dark:text-white/60">Custom text for the ticket button. Leave empty to use default "Get Tickets".</p>
                            <x-input-error :messages="$errors->get('ticket_label')" class="mt-2" />
                        </div>

                        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                            <div>
                                <x-input-label for="start_date" :value="__('Start Date')" />
                                <x-text-input id="start_date" class="datepicker mt-1 block w-full" type="text" name="start_date" :value="old('start_date', $event->start_date?->format('Y-m-d H:i:s'))" required />
                                <x-input-error :messages="$errors->get('start_date')" class="mt-2" />
                            </div>
                            <div>
                                <x-input-label for="end_date" :value="__('End Date')" />
                                <x-text-input id="end_date" class="datepicker mt-1 block w-full" type="text" name="end_date" :value="old('end_date', $event->end_date?->format('Y-m-d H:i:s'))" required />
                                <x-input-error :messages="$errors->get('end_date')" class="mt-2" />
                            </div>
                        </div>

                        <div>
                            <x-input-label for="image" :value="__('Image')" />
                            @if($event->image)
                                <div class="mb-2">
                                    <img src="{{ Storage::url($event->image) }}" alt="{{ $event->title }}" class="h-32 w-auto rounded object-cover shadow-sm">
                                </div>
                            @endif
                            <input id="image" type="file" name="image" accept="image/jpg,image/jpeg,image/png,image/webp" class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:rounded-md file:border-0 file:bg-pride-pink-light file:px-4 file:py-2 file:text-sm file:font-semibold file:text-pride-blue hover:file:bg-pride-pink-light dark:file:bg-pride-navy/50 dark:file:text-pride-pink" />
                            <x-input-error :messages="$errors->get('image')" class="mt-2" />
                        </div>

                        <div class="flex items-center gap-2">
                            <input id="is_published" type="checkbox" name="is_published" value="1" {{ old('is_published', $event->is_published) ? 'checked' : '' }} class="rounded border-gray-300 text-pride-blue shadow-sm focus:ring-pride-blue dark:border-pride-black dark:bg-pride-black dark:focus:ring-pride-blue">
                            <x-input-label for="is_published" :value="__('Published')" />
                        </div>

                        <div class="flex items-center gap-4">
                            <x-primary-button>{{ __('Update Event') }}</x-primary-button>
                            <a href="{{ route('admin.events.index') }}" class="text-sm text-gray-600 hover:underline dark:text-white/60">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>