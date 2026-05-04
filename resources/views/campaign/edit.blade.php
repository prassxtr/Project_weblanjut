@extends('app')

@section('content')
<div class="container mx-auto px-4 py-10">
    <div class="max-w-2xl mx-auto bg-white shadow-md rounded-xl p-8">
        <h1 class="text-3xl font-bold mb-6 text-gray-800">Edit Campaign</h1>

        {{-- Form action diarahkan ke fungsi update dengan method PUT/PATCH --}}
        <form action="{{ route('campaign.update', $campaign->id) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT') {{-- PENTING: Laravel membutuhkan ini untuk proses update --}}

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Judul Campaign</label>
                <input type="text" name="title" value="{{ old('title', $campaign->title) }}" required
                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition duration-200">
            </div>

            <div>
                <label class="block text-sm font-semibold text-gray-700 mb-2">Deskripsi</label>
                <textarea name="description" required rows="4"
                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition duration-200">{{ old('description', $campaign->description) }}</textarea>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Target Donasi (Rp)</label>
                    <input type="number" name="target_donation" value="{{ old('target_donation', $campaign->target_donation) }}" required
                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition duration-200">
                </div>

                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Deadline</label>
                    <input type="date" name="deadline" value="{{ old('deadline', $campaign->deadline) }}" required
                        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-500 focus:border-blue-500 outline-none transition duration-200">
                </div>
            </div>

            <div class="pt-4 flex items-center justify-end space-x-4">
                <a href="/campaign" class="text-gray-600 hover:text-gray-800 font-medium">Batal</a>
                <button type="submit"
                    class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-lg shadow-lg transition duration-200">
                    Update Campaign
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
