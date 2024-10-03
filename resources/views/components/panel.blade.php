@php
    $classes =
        'p-4 bg-white/5 rounded-xl border border-white/10 hover:border-blue-800 group transition-colors duration-300';
@endphp

<div {{ $attributes(['class' => $classes]) }}>
    {{ $slot }}
</div>
