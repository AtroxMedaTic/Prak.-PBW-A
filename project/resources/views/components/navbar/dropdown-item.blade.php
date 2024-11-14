<a {{ $attributes }}
    class="{{ request()->fullUrlIs(url($href)) ? "bg-green-700 text-white" : "text-white-300 hover:bg-white-800 hover:text-white" }} block rounded-md px-3 py-2 text-sm font-medium">
    {{ $slot }}
</a>