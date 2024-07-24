<div class="pembelajaran-main">
    @foreach($alats as $alat)
        <div class="card">
            <div class="card-image">
                <img src="{{ asset('storage/' . $alat->gambar) }}" alt="{{ $alat->nama_alat }}">
                <p>Best Seller</p>
            </div>
            <div class="card-content">
                <div class="title">
                    <h1>{{ $alat->nama_alat }}</h1>
                    <img src="asset/image/arrow-up.png" alt="">
                </div>
                <p>Rp {{ number_format($alat->harga, 0, ',', '.') }}</p>
            </div>
        </div>
    @endforeach
</div>
