@php
    $classes = "p-4 bg-white/5 rounded-xl border border-transparent hover:border-blue-600 group transition-colors ease-in-out";
@endphp

<div
    {{ $attributes(['class' => $classes]) }}>

    {{$slot}}
</div>
