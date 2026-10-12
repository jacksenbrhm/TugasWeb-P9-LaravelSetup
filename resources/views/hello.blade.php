@extends('layouts.app')

@section('title', 'Hello')

@section('content')
    <section class="rounded-2xl bg-white p-8 text-center shadow">
        <h1 class="text-3xl font-bold">Hello, {{ $nama }}! 🎉</h1>
        <p class="mt-2 text-slate-600">
            Halaman ini dibuat dari route berparameter <code class="rounded bg-slate-100 px-1">/hello/{nama}</code>.
        </p>
        <p class="mt-4 text-sm text-slate-500">Coba ganti nama di URL, misalnya /hello/Budi</p>
    </section>
@endsection
