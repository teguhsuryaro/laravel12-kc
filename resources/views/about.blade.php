<x-layout>
    <h1>Welcome To About</h1>
    <h3>halo mamang, nama saya {{ $nama }}, umur saya {{ $umur }} tahun</h3>
    @if ($umur > 18)
        <h3>You bisa Vote Presiden in Pemilu</h3>
    @else
        <h3>You gabisa Vote Presiden in Pemilu</h3>
    @endif
    <x-slot:footer>
       {{ $data }}
    </x-slot:footer>
</x-layout>