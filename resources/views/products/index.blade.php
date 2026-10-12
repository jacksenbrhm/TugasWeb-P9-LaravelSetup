@extends('layouts.app')

@section('title', 'Produk')

@section('content')
    <section class="rounded-2xl bg-white p-8 shadow">
        <h1 class="text-2xl font-bold">Daftar Produk</h1>
        <p class="mt-1 text-slate-600">Data dibaca dari database lewat model <code>Product</code>.</p>

        <div class="mt-4 overflow-x-auto">
            <table class="w-full min-w-[420px] text-left text-sm">
                <thead class="bg-slate-50 text-xs uppercase text-slate-500">
                    <tr>
                        <th class="p-3">No</th>
                        <th class="p-3">Nama</th>
                        <th class="p-3">Harga</th>
                        <th class="p-3">Stok</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-200">
                    @forelse ($products as $product)
                        <tr>
                            <td class="p-3">{{ $loop->iteration }}</td>
                            <td class="p-3">{{ $product->name }}</td>
                            <td class="p-3">Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                            <td class="p-3">{{ $product->stock }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="p-6 text-center text-slate-500">
                                Belum ada data. Isi lewat <code>php artisan tinker</code> (lihat README).
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </section>
@endsection
