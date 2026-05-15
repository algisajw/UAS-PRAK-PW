<x-layout>
    <div class="row">
        <div class="column">
            <h3>Daftar Kedaluwarsa Bumbu</h3>
        </div>
        <div class="column" style="text-align: right;">
            @if(session('role') != 'Anak')
                <a class="button" href="/spices/create">Tambah Bumbu</a>
            @endif
        </div>
    </div>

    <table>
        <thead>
            <tr>
                <th>Nama Bumbu</th>
                <th>Kategori</th>
                <th>Stok</th>
                <th>Tanggal Kedaluwarsa</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($spices as $spice)
            <tr>
                <td>{{ $spice->name }}</td>
                <td>{{ $spice->category->name }}</td>
                <td>{{ $spice->stock }}</td>
                <td>{{ $spice->expired_at }}</td>
                <td>
                    @if(session('role') == 'Ibu')
                        <a href="/spices/{{ $spice->id }}/edit">Edit</a>
                    @endif
                    @if(session('role') == 'Ibu' || session('role') == 'Ayah')
                        <form action="/spices/{{ $spice->id }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="button-clear" onclick="return confirm('Hapus?')">Hapus</button>
                        </form>
                    @endif
                    @if(session('role') == 'Anak')
                        -
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-layout>
