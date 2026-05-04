@extends('app')

@section('content')
{{-- Membungkus konten dalam container agar berada di tengah --}}
<div class="container mx-auto px-4 py-10">

    <h1 class="text-3xl font-bold mb-6">Daftar Campaign</h1>

    <div class="mb-6">
        <a href="/campaign/create" class="bg-green-500 hover:bg-green-600 text-white px-6 py-2.5 rounded-lg shadow-sm transition duration-200">
            Tambah Campaign
        </a>
    </div>

    <div class="bg-white shadow-md rounded-xl overflow-hidden">
        <table class="table-auto w-full text-left">
            <thead class="bg-gray-100 border-b">
                <tr>
                    <th class="p-4 font-semibold text-gray-700">Judul</th>
                    <th class="p-4 font-semibold text-gray-700 text-center">Target</th>
                    <th class="p-4 font-semibold text-gray-700 text-center">Terkumpul</th>
                    <th class="p-4 font-semibold text-gray-700 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach($campaigns as $c)
                <tr class="hover:bg-gray-50 transition duration-150">
                    <td class="p-4 text-gray-800 font-medium">{{ $c->title }}</td>
                    <td class="p-4 text-gray-600 text-center">Rp{{ number_format($c->target_donation, 0, ',', '.') }}</td>
                    <td class="p-4 text-gray-600 text-center">Rp{{ number_format($c->collected_donation, 0, ',', '.') }}</td>
                    <td class="p-4 text-center">
                        <div class="flex justify-center space-x-3">
                            <a href="/campaign/{{ $c->id }}/edit" class="text-blue-600 hover:text-blue-800 font-medium">Edit</a>

                            <form action="/campaign/{{ $c->id }}" method="POST" class="inline" onsubmit="return confirm('Apakah Anda yakin ingin menghapus campaign ini?')">
                                @csrf
                                @method('DELETE')
                                <button class="text-red-600 hover:text-red-800 font-medium">Hapus</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
@endsection
