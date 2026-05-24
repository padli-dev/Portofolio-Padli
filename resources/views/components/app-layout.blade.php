@props(['title' => 'Portfolio', 'profile' => []])

<x-layouts.app :title="$title" :profile="$profile">
    {{ $slot }}
</x-layouts.app>