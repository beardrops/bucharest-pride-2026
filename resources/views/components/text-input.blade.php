@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'border-gray-300 focus:border-pride-blue focus:ring-pride-blue rounded-md shadow-sm']) }}>