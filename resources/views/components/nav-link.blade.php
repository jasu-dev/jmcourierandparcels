@props([
    'route' => '#',
    'label' => '',
])
<a href="{{ route($route) }}"
    class="rounded-md px-3 py-2 text-sm font-semibold  transition hover:bg-accent hover:text-navy {{ request()->routeIs($route) ? 'text-brand bg-accent' : 'text-foreground/80' }}">{{ $label }}</a>
