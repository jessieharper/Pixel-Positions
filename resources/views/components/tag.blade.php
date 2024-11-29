@props(['tag', 'size' => 'base'])

@php
    $classes = "bg-white/10 hover:bg-white/25 py-1 rounded-xl font-bold transition-colors ease-in-out";
if ($size === 'base') {
$classes .= ' px-5 text-sm';

}

if ($size === 'small') {
$classes .= ' px-3 text-2xs';
}

@endphp

<a href="/tags/{{ strtolower($tag->name) }}"
   class="{{ $classes }}">{{$tag->name}}</a>
