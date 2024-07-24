<!-- resources/views/penyewaan/show.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Alat</title>
    <link rel="stylesheet" href="{{ asset('asset/css/penyewaan.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/main.css') }}">
</head>
<body>
    <div class="menu-back">
        <a href="{{ url('/penyewaan') }}"><img src="asset/image/back.png" alt="">Kembali</a>
        <h1>Otomatisasi penyiraman tanaman dengan teknologi IoT</h1>
    </div>
    <div class="dash">
        <main style="padding: 71px;">
            <div class="detail">
                <h1>{{ $alat->nama_alat }}</h1>
                <div class="detail-image">
                    <img src="{{ asset('asset/image/'.$alat->gambar) }}" alt="">
                </div>
                <p>{{ $alat->atribut }}</p>
                <p>Rp {{ number_format($alat->harga, 0, ',', '.') }}</p>
                <!-- Add more details if needed -->
                <a href="{{ url('/penyewaan') }}">Back to List</a>
            </div>
        </main>
        <footer>
            <!-- Your footer content here -->
        </footer>
    </div>
</body>
</html>
