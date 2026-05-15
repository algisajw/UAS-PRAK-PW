<x-layout>
    <div class="row">
        <div class="column column-50 column-offset-25">
            <h3>Daftar Akun</h3>
            <form action="/register" method="POST">
                @csrf
                <label>Username</label>
                <input type="text" name="username" required>
                <label>Password</label>
                <input type="password" name="password" required>
                <label>Role</label>
                <select name="role">
                    <option value="Ibu">Ibu</option>
                    <option value="Ayah">Ayah</option>
                    <option value="Anak">Anak</option>
                </select>
                <button type="submit">Register</button>
            </form>
        </div>
    </div>
</x-layout>
