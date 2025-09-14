<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    @include('partials.head')
</head>
<body class="min-h-screen flex flex-col bg-neutral-100 antialiased dark:bg-linear-to-b dark:from-neutral-950 dark:to-neutral-900">

    {{-- Navbar siempre arriba --}}
    <x-app-menu-bar />

    {{-- Contenido principal, crece para ocupar espacio entre header y footer --}}
    <main class="flex-1 w-full max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        {{ $slot }}
    </main>

    {{-- Footer siempre al final --}}
    <x-app-footer />

    @fluxScripts
</body>
</html>

