<x-layout>
    <h3>Edit Bumbu: {{ $spice->name }}</h3>
    <form action="/spices/{{ $spice->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="column">
                <label>Nama Bumbu</label>
                <input type="text" name="name" value="{{ $spice->name }}" required>
            </div>
            <div class="column">
                <label>Kategori</label>
                <select name="category_id">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ $spice->category_id == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="row">
            <div class="column">
                <label>Jumlah Stok</label>
                <input type="number" name="stock" value="{{ $spice->stock }}" required>
            </div>
            <div class="column">
                <label>Tanggal Kedaluwarsa</label>
                <input type="date" name="expired_at" value="{{ $spice->expired_at }}" required>
            </div>
        </div>
        <button type="submit">Perbarui</button>
        <a class="button button-outline" href="/spices">Batal</a>
    </form>
</x-layout>
