<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logbumbu</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
</head>
<body>
    <nav class="container" style="margin-top: 20px; border-bottom: 1px solid #eee; padding-bottom: 10px;">
        <div class="row">
            <div class="column">
                <strong>LOGBUMBU</strong>
            </div>
            <div class="column" style="text-align: right;">
                @if(session('user_id'))
                    <a href="/dashboard">Home</a> | 
                    <a href="/spices">Daftar Bumbu</a> |
                    @if(session('role') == 'Ibu')
                        <a href="/categories">Kategori</a> |
                    @endif
                    <form action="/logout" method="POST" style="display: inline;">
                        @csrf
                        <button type="submit" class="button-clear" style="padding: 0; height: auto; line-height: normal;">Logout ({{ session('username') }})</button>
                    </form>
                @else
                    <a href="/login">Login</a> | <a href="/register">Register</a>
                @endif
            </div>
        </div>
    </nav>
    <main class="container" style="margin-top: 40px;">
        {{ $slot }}
    </main>
</body>
</html>
