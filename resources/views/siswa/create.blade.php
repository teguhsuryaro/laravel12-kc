<x-layout>
    <h1 class="text-xl mb-5 font-bold">Create siswa</h1>

    <form action="{{ route('siswa.store') }}" method="POST" class="space-y-4">

        @csrf
        {{-- Nama --}}
        <div>
            <label for="nama" class="block text-sm font-medium text-gray-700">
                Nama
            </label>
            <input
                type="text"
                id="nama"
                name="nama"
                class="mt-1 block w-full px-4 py-2 border rounded-lg shadow-sm
                       focus:ring-blue-500 focus:border-blue-500 border-gray-300"
                value="{{ old('nama') }}"
            />
            @error('nama')
                <div class="text-red-600 text-sm">{{ $message }}</div>
            @enderror
        </div>

        {{-- Tanggal Lahir --}}
        <div>
            <label for="tanggal_lahir" class="block text-sm font-medium text-gray-700">
                Tanggal Lahir
            </label>
            <input
                type="date"
                id="tanggal_lahir"
                name="tanggal_lahir"
                class="mt-1 block w-full px-4 py-2 border rounded-lg shadow-sm
                       focus:ring-blue-500 focus:border-blue-500 border-gray-300"
                value="{{ old('tanggal_lahir') }}"
            />
            @error('tangagal_lahir')
                <div class="text-red-600 text-sm">{{ $message }}</div>
            @enderror
        </div>

        {{-- Jurusan --}}
        <div>
            <label for="jurusan" class="block text-sm font-medium text-gray-700">
                Jurusan
            </label>
            <input
                type="text"
                id="jurusan"
                name="jurusan"
                class="mt-1 block w-full px-4 py-2 border rounded-lg shadow-sm
                       focus:ring-blue-500 focus:border-blue-500 border-gray-300"
                value="{{ old('jurusan') }}"
            />
            @error('jurusan')
                <div class="text-red-600 text-sm">{{ $message }}</div>
            @enderror
        </div>

        {{-- Nilai --}}
        <div>
            <label for="nilai" class="block text-sm font-medium text-gray-700">
                Nilai
            </label>
            <input
                type="number"
                id="nilai"
                name="nilai"
                class="mt-1 block w-full px-4 py-2 border rounded-lg shadow-sm
                       focus:ring-blue-500 focus:border-blue-500 border-gray-300"
                value="{{ old('nilai') }}"
            />
            @error('nilai')
                <div class="text-red-600 text-sm">{{ $message }}</div>
            @enderror
        </div>

        {{-- Mentor --}}
        <div>
            <label for="mentor" class="block text-sm font-medium text-gray-700">
                Mentor
            </label>
            <select
                id="mentor_id"
                name="mentor_id"
                class="mt-1 block w-full px-4 py-2 border rounded-lg shadow-sm
                       focus:ring-blue-500 focus:border-blue-500 border-gray-300"
            >
                <option value="{{ old('mentor_id') }}">-- Pilih Mentor --</option>
                @foreach ($mentors as $mentor)
                <option value="{{ $mentor->id }}">{{ $mentor->nama }}</option>
                    
                @endforeach
            </select>
            @error('mentor_id')
                <div class="text-red-600 text-sm">{{ $message }}</div>
            @enderror
        </div>

        {{-- Button --}}
        <div class="pt-4">
            <button
                type="submit"
                class="mt-1 block w-full px-4 py-2 border shadow-sm bg-teal-600 text-white rounded-lg
                       hover:bg-teal-700 transition"
            >
                Simpan
            </button>
        </div>

    </form>

    <x-slot:footer>
       {{ $data }}
    </x-slot:footer>

</x-layout>
