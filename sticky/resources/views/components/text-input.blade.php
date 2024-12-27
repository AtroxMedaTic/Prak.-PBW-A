@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'w-full border-gray-800 bg-white focus:outline-none rounded-md shadow-sm text-black']) }}>
