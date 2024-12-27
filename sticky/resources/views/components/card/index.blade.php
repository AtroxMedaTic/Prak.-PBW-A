<div {{ $attributes->merge([
    'class' => 'bg-white shadow-sm border border-white text-card-foreground rounded-lg p-6'
]) }}>
    {{ $slot }}
</div>