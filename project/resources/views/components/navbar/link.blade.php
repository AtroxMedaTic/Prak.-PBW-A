<a {{ $attributes }} class="{{ request()->fullUrlIs(url($href)) ? 'bg-green-700 text-white' : 'text-dark-300 hover:bg-green-700 hover:text-white' }} rounded-md px-3 py-2 text-sm">
    {{ $slot }}
</a>