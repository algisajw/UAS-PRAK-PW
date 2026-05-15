<x-layout>
    <div class="row">
        <div class="column">
            <h2>Selamat Datang, {{ session('username') }}</h2>
            <p>Anda login sebagai role: <strong>{{ session('role') }}</strong></p>
            <hr>
            <div class="row">
                <div class="column">
                    <a class="button" href="/spices">Lihat Catatan Bumbu</a>
                </div>
            </div>
        </div>
    </div>
</x-layout>
