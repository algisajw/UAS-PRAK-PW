<x-layout>
    <h3>Tambah Bumbu Baru</h3>
    <form action="/spices" method="POST">
        @csrf
        <div class="row">
            <div class="column">
                <label>Nama Bumbu</label>
                <input type="text" name="name" required>
            </div>
            <div class="column">
                <label>Kategori</label>
                <select name="category_id">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row">
            <div class="column">
                <label>Jumlah Stok</label>
                <input type="number" name="stock" required>
            </div>
            <div class="column">
                <label>Tanggal Kedaluwarsa</label>
                <input type="date" name="expired_at" required>
            </div>
        </div>
        <button type="submit">Simpan Bumbu</button>
        <a class="button button-outline" href="/spices">Kembali</a>
    </form>
</x-layout>
