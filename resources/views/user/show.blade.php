<!-- resources/views/penyewaan/show.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Alat</title>
    <link rel="stylesheet" href="{{ asset('asset/css/show.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/main.css') }}">
</head>
<body>
    <div class="menu-back">
        <a href="{{ url('/penyewaan') }}"><img src="{{ asset('asset/image/back.png')  }}" alt="">Kembali</a>
        <h1>{{ $alat->nama_alat }}</h1>
    </div>
        <main style="padding: 71px;">
            <div class="detail">
                <div class="detail-image">
                    <img src="{{ asset('asset/image/'.$alat->gambar) }}" alt="">
                </div>
                <div class="content-detail">
                    <h1>{{ $alat->nama_alat }}</h1>
                    <p>Rp {{ number_format($alat->harga, 0, ',', '.') }}</p>
                    <button>Book on WhatsApp</button>
                    <p><span>Include:</span> unit, acs (charger, battery x2)</p>
                </div>
            </div>
        </main>
        <footer>
            <div class="footer-main">
                <div class="short-description-and-social">
                    <h1>Taniku</h1>
                    <p>Taniku is a platform for those of you who want to increase your business opportunities and opportunities to be more attractive and recognized by many people. With Taniku increase your farming plan.</p>
                    <div class="social">
                        <img src="asset/image/Group%2013.png" alt="">
                        <img src="asset/image/Group%2011.png" alt="">
                        <img src="asset/image/Group%2010.png" alt="">
                    </div>
                </div>
                <div class="links">
                    <ul class="links-item">
                        <li class="links-title">Informations</li>
                        <li><a href="#">Link</a></li>
                        <li><a href="#">Link</a></li>
                        <li><a href="#">Link</a></li>
                    </ul>
                    <ul class="links-item">
                        <li class="links-title">Fitur</li>
                        <li><a href="#">Podcast</a></li>
                        <li><a href="#">Podcast</a></li>
                        <li><a href="#">Podcast</a></li>
                    </ul>
                    <ul class="links-item">
                        <li class="links-title">Fitur</li>
                        <li><a href="#">Podcast</a></li>
                        <li><a href="#">Podcast</a></li>
                        <li><a href="#">Podcast</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-foot">
                Copyright © 2023. Taniku All right reserved
            </div>
        </footer>
    </div>
</body>
</html>
