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
        <th class="px-3 py-2 whitespace-nowrap">Details</th>
      </tr>
    </thead>

        @foreach ($var as $items)
            <tbody class="divide-y divide-gray-200">
                <tr class="*:text-gray-900 *:first:font-medium">
                    <td class="px-3 py-2 whitespace-nowrap">{{ $items->nama }}</td>
                    <td class="px-3 py-2 whitespace-nowrap">{{ $items->tanggal_lahir }}</td>
                    <td class="px-3 py-2 whitespace-nowrap">{{ $items->jurusan }}</td>
                    <td class="px-3 py-2 whitespace-nowrap">{{ $items->nilai }}</td>
                    <td>
                        <a href="{{ route('siswa.show', $items->id) }}" class="text-teal-500 font-bold hover:opacity-50">
                            View Details
                        </a>
                    </td>
                </tr>
            </tbody>
        @endforeach

  </table>
</div>

<div class="py-7">
    {{ $var->appends(request()->query())->links() }}
</div>

    <ul>

    </ul>
    <x-slot:footer>
       {{ $data }}
    </x-slot:footer>
</x-layout>
