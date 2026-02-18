<!DOCTYPE html>
<html>
<head>
    <title>Kirim Email</title>
</head>
<body>
    <h1>Kirim Email Selamat Datang</h1>
    
    @if(session('success'))
        <div style="color: green;">{{ session('success') }}</div>
    @endif

    @if(session('error'))
        <div style="color: red;">{{ session('error') }}</div>
    @endif

    <form action="{{ route('send.welcome.email') }}" method="POST">
        @csrf
        <div>
            <label>Email Tujuan:</label>
            <input type="email" name="email" required>
        </div>
        <button type="submit">Kirim Email</button>
    </form>
</body>
</html>