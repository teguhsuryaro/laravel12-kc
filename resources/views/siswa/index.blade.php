<x-layout>
    <h1>Daftar Siswa</h1>
    <ul>
    @foreach ($var as $items)
        <li>
            <h3>{{ $items['nama'] }} - {{ $items['nilai'] }}</h3>
        </li>
    @endforeach
    </ul>
    <x-slot:footer>
       {{ $data }}
    </x-slot:footer>
</x-layout>
