<x-layout>
    <div class="row">
        <div class="column column-50 column-offset-25">
            <h3>Login Aplikasi</h3>
            <form action="/login" method="POST">
                @csrf
                <label>Username</label>
                <input type="text" name="username" required>
                <label>Password</label>
                <input type="password" name="password" required>
                <button type="submit">Login</button>
            </form>
        </div>
    </div>
</x-layout>
