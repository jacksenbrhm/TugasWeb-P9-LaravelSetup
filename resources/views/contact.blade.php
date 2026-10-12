@extends('layouts.app')

@section('title', 'Contact')

@section('content')
    <section class="rounded-2xl bg-white p-8 shadow">
        <h1 class="text-2xl font-bold">Kontak</h1>
        <p class="mt-1 text-slate-600">Hubungi saya lewat salah satu kanal berikut.</p>

        <ul class="mt-4 divide-y divide-slate-200">
            @foreach ($kontak as $item)
                <li class="flex justify-between py-3">
                    <span class="text-slate-500">{{ $item['label'] }}</span>
                    <span class="font-medium">{{ $item['nilai'] }}</span>
                </li>
            @endforeach
        </ul>
    </section>
@endsection
