@extends('layouts.app')

@section('title', 'About')

@section('content')
    <section class="rounded-2xl bg-white p-8 shadow">
        <h1 class="text-2xl font-bold">Tentang Saya</h1>

        <dl class="mt-4 grid grid-cols-1 gap-3 sm:grid-cols-2">
            @foreach ($profil as $label => $nilai)
                <div class="rounded-lg bg-slate-50 p-3">
                    <dt class="text-xs uppercase text-slate-500">{{ $label }}</dt>
                    <dd class="font-medium">{{ $nilai }}</dd>
                </div>
            @endforeach
        </dl>

        <h2 class="mt-6 text-lg font-semibold">Minat</h2>
        <ul class="mt-2 list-disc pl-6">
            @foreach ($minat as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    </section>
@endsection
