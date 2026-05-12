<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-pride-black dark:text-white/90">
            {{ __('Create Event') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-3xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg dark:bg-pride-black">
                <div class="p-6 text-pride-black dark:text-white">
                    <form method="POST" action="{{ route('admin.events.store') }}" enctype="multipart/form-data" class="space-y-6">
                        @csrf

                        <div>
                            <x-input-label for="title" :value="__('Title')" />
                            <x-text-input id="title" class="mt-1 block w-full" type="text" name="title" :value="old('title')" required autofocus />
                            <x-input-error :messages="$errors->get('title')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="slug" :value="__('Slug (optional)')" />
                            <x-text-input id="slug" class="mt-1 block w-full" type="text" name="slug" :value="old('slug')" />
                            <p class="mt-1 text-xs text-gray-500 dark:text-white/60">Leave empty to auto-generate from title.</p>
                            <x-input-error :messages="$errors->get('slug')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="description" :value="__('Description')" />
                            <textarea id="description" name="description" rows="6" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-pride-blue focus:ring-pride-blue dark:border-pride-black dark:bg-pride-black dark:text-white/70 dark:focus:border-pride-blue dark:focus:ring-pride-blue">{{ old('description') }}</textarea>
                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="location" :value="__('Location')" />
                            <x-text-input id="location" class="mt-1 block w-full" type="text" name="location" :value="old('location')" required />
                            <x-input-error :messages="$errors->get('location')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="maps_url" :value="__('Google Maps Embed URL')" />
                            <x-text-input id="maps_url" class="mt-1 block w-full" type="url" name="maps_url" :value="old('maps_url')" placeholder="https://www.google.com/maps/embed?pb=..." />
                            <p class="mt-1 text-xs text-gray-500 dark:text-white/60">Paste the embed URL from Google Maps (Share → Embed a map → Copy HTML &amp; extract the src).</p>
                            <x-input-error :messages="$errors->get('maps_url')" class="mt-2" />
                        </div>

                        <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                            <div>
                                <x-input-label for="start_date" :value="__('Start Date')" />
                                <x-text-input id="start_date" class="datepicker mt-1 block w-full" type="text" name="start_date" :value="old('start_date')" required />
                                <x-input-error :messages="$errors->get('start_date')" class="mt-2" />
                            </div>
                            <div>
                                <x-input-label for="end_date" :value="__('End Date')" />
                                <x-text-input id="end_date" class="datepicker mt-1 block w-full" type="text" name="end_date" :value="old('end_date')" required />
                                <x-input-error :messages="$errors->get('end_date')" class="mt-2" />
                            </div>
                        </div>

                        <div>
                            <x-input-label for="image" :value="__('Image')" />
                            <input id="image" type="file" name="image" accept="image/jpg,image/jpeg,image/png,image/webp" class="mt-1 block w-full text-sm text-gray-500 file:mr-4 file:rounded-md file:border-0 file:bg-pride-pink-light file:px-4 file:py-2 file:text-sm file:font-semibold file:text-pride-blue hover:file:bg-pride-pink-light dark:file:bg-pride-navy/50 dark:file:text-pride-pink" />
                            <x-input-error :messages="$errors->get('image')" class="mt-2" />
                        </div>

                        <div class="flex items-center gap-2">
                            <input id="is_published" type="checkbox" name="is_published" value="1" {{ old('is_published') ? 'checked' : '' }} class="rounded border-gray-300 text-pride-blue shadow-sm focus:ring-pride-blue dark:border-pride-black dark:bg-pride-black dark:focus:ring-pride-blue">
                            <x-input-label for="is_published" :value="__('Publish immediately')" />
                        </div>

                        <div class="flex items-center gap-4">
                            <x-primary-button>{{ __('Create Event') }}</x-primary-button>
                            <a href="{{ route('admin.events.index') }}" class="text-sm text-gray-600 hover:underline dark:text-white/60">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>