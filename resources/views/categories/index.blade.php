<x-layout>
    <div class="row">
        <div class="column">
            <h3>Manajemen Kategori</h3>
            <form action="/categories" method="POST">
                @csrf
                <label>Nama Kategori Baru</label>
                <input type="text" name="name" required>
                <button type="submit">Tambah</button>
            </form>
        </div>
        <div class="column">
            <h3>Daftar Kategori</h3>
            <table>
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $cat)
                    <tr>
                        <td>{{ $cat->name }}</td>
                        <td>
                            <form action="/categories/{{ $cat->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="button-clear">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layout>
