<x-layout>
    <h1 class="text-xl py-5 mb-5 font-bold">Daftar Siswa</h1>

<div class="overflow-x-auto">
  <table class="min-w-full divide-y-2 divide-gray-200">
    <thead class="ltr:text-left rtl:text-right">
      <tr class="*:font-medium *:text-gray-900">
        <th class="px-3 py-2 whitespace-nowrap">Nama</th>
        <th class="px-3 py-2 whitespace-nowrap">Tanggal Lahir</th>
        <th class="px-3 py-2 whitespace-nowrap">Role</th>
        <th class="px-3 py-2 whitespace-nowrap">Nilai</th>
      </tr>
    </thead>

        @foreach ($var as $items)
            <tbody class="divide-y divide-gray-200">
                <tr class="*:text-gray-900 *:first:font-medium">
                    <td class="px-3 py-2 whitespace-nowrap">{{ $items['nama'] }}</td>
                    <td class="px-3 py-2 whitespace-nowrap">04/06/1262</td>
                    <td class="px-3 py-2 whitespace-nowrap">Vampire Warrior</td>
                    <td class="px-3 py-2 whitespace-nowrap">{{ $items['nilai'] }}</td>
                </tr>
            </tbody>
        @endforeach

  </table>
</div>

    <ul>

    </ul>
    <x-slot:footer>
       {{ $data }}
    </x-slot:footer>
</x-layout>
