@extends('app')

@section('content')
<div class="container mx-auto px-4 py-10">
    <div class="max-w-2xl mx-auto bg-white shadow-md rounded-xl p-8">
        <h1 class="text-3xl font-bold mb-6 text-gray-800">Tambah Campaign Baru</h1>

        <form action="{{ route('campaign.store') }}" method="POST" class="space-y-6">
            @csrf

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Judul Campaign</label>
                <input type="text" name="title" required
                    placeholder="Contoh: Bantu Korban Banjir"
                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-green-500 focus:border-green-500 outline-none transition duration-200">
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Deskripsi</label>
                <textarea name="description" required rows="4"
                    placeholder="Jelaskan detail mengenai campaign ini..."
                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-green-500 focus:border-green-500 outline-none transition duration-200"></textarea>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Target Donasi (Rp)</label>
                    <input type="number" name="target_donation" required
                        placeholder="1000000"
                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-green-500 focus:border-green-500 outline-none transition duration-200">
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Deadline</label>
                    <input type="date" name="deadline" required
                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-green-500 focus:border-green-500 outline-none transition duration-200">
                </div>
            </div>

            <div class="pt-4 flex items-center justify-end space-x-4">
                <a href="/campaign" class="text-gray-600 hover:text-gray-800 font-medium">Batal</a>
                <button type="submit"
                    class="bg-green-500 hover:bg-green-600 text-white font-bold py-3 px-8 rounded-lg shadow-lg hover:shadow-xl transition duration-200 transform hover:-translate-y-0.5">
                    Simpan Campaign
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
