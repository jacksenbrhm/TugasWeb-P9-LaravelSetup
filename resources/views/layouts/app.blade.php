<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | {{ config('app.name') }}</title>
    {{-- BONUS: Tailwind via CDN --}}
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="min-h-screen bg-slate-100 text-slate-800">

    <header class="bg-indigo-600 text-white shadow">
        <nav class="mx-auto flex max-w-4xl flex-wrap items-center justify-between gap-2 px-4 py-3">
            <a href="{{ route('home') }}" class="text-lg font-bold">{{ config('app.name') }}</a>
            <ul class="flex flex-wrap gap-4 text-sm">
                <li><a href="{{ route('home') }}" class="hover:underline {{ request()->routeIs('home') ? 'font-bold underline' : '' }}">Home</a></li>
                <li><a href="{{ route('about') }}" class="hover:underline {{ request()->routeIs('about') ? 'font-bold underline' : '' }}">About</a></li>
                <li><a href="{{ route('contact') }}" class="hover:underline {{ request()->routeIs('contact') ? 'font-bold underline' : '' }}">Contact</a></li>
                <li><a href="{{ route('produk.index') }}" class="hover:underline {{ request()->routeIs('produk.*') ? 'font-bold underline' : '' }}">Produk</a></li>
                <li><a href="{{ route('hello', ['nama' => 'Samuel']) }}" class="hover:underline">Hello</a></li>
            </ul>
        </nav>
    </header>

    <main class="mx-auto max-w-4xl px-4 py-8">
        @yield('content')
    </main>

    <footer class="py-6 text-center text-sm text-slate-500">
        &copy; {{ date('Y') }} Tugas Rutin 9 - Setup Laravel | Pemrograman Web, UNIMED
    </footer>

</body>
</html>
