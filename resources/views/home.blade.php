@extends('layouts.app')

@section('title', 'Beranda')

@section('content')
    <section class="rounded-2xl bg-white p-8 shadow">
        <h1 class="text-3xl font-bold">Halo, {{ $nama }}! 👋</h1>
        <p class="mt-2 text-slate-600">{{ $status }}</p>

        <h2 class="mt-6 text-lg font-semibold">Yang sudah saya pelajari</h2>
        <ul class="mt-3 flex flex-wrap gap-2">
            @foreach ($courses as $course)
                <li class="rounded-full bg-indigo-100 px-3 py-1 text-sm text-indigo-700">
                    {{ $loop->iteration }}. {{ $course }}
                </li>
            @endforeach
        </ul>
    </section>
@endsection
