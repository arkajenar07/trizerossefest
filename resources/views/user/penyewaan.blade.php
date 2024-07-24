<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Penyewaan</title>
    <link rel="stylesheet" href="{{ asset('asset/css/penyewaan.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/main.css') }}">
</head>
<body>
    <div class="sidebar">
        <img class="logo" src="{{ asset('asset/image/logo.png') }}" alt="">
        <ul class="menu">
            <li><img src="{{ asset('asset/image/ic_round-book.png') }}" alt=""><a href="{{ url('/dashboard') }}">Pembelajaran</a></li>
            <li><img src="{{ asset('asset/image/entypo_chat.png') }}" alt=""><a href="{{ url('/forum') }}">Forum Petani</a></li>
            <li><img src="{{ asset('asset/image/ph_math-operations-fill.png') }}" alt=""><a href="{{ url('/kalkulator') }}">Kalkulator</a></li>
            <li><img src="{{ asset('asset/image/ic_outline-cable.png') }}" alt=""><a href="{{ url('/diagnostik') }}">Alat Diagnosa</a></li>
            <li><img src="{{ asset('asset/image/game-icons_ice-cream-scoop.png') }}" alt=""><a href="{{ url('/penyewaan') }}">Penyewaan Alat</a></li>
        </ul>
    </div>
    <div class="dash">
    <main style="padding: 71px;">
        <div class="head">
            <div class="searchbar">
                <button>
                    <img src="{{ asset('asset/image/magnifying-glass.png') }}" alt="">
                </button>
                <input type="text" name="" id="" placeholder="Cari Modul Belajar">
            </div>
            <div class="auth-button-container">
                <a href="{{ url('/dashboard') }}">Dashboard</a>
                <button id="all" class="settings">
                    <img src="{{ asset('asset/image/settings-arr.png') }}" alt="">
                </button>
                <img src="{{ asset('asset/image/pp.png') }}" alt="" class="logo">
            </div>
        </div>

        <div class="pembelajaran-main">
            <section class="pembelajaran">
                <div class="title-container">
                    <h1>Internet of Things</h1>
                    <button><a href="#">Selengkapnya ></a></button>
                </div>
                <div class="card-slider">
                    @foreach($alatiot as $alat)
                        @if($alat->id >= 1 && $alat->id <= 3)
                        <div class="card">
                            <div class="card-image">
                                <img src="{{ asset('asset/image/'.$alat->gambar) }}" alt="">
                                <p>{{ $alat->atribut }}</p>
                            </div>
                            <div class="card-content">
                                <div class="title">
                                    <a href="{{ route('penyewaan.show', $alat->id) }}">
                                        <h1>{{ $alat->nama_alat }}</h1>
                                    </a>
                                    <img src="{{ asset('asset/image/arrow-up.png') }}" alt="">
                                </div>
                                <p>Rp {{ number_format($alat->harga, 0, ',', '.') }}</p>
                            </div>
                        </div>
                        @endif
                    @endforeach
                </div>
            </section>
            <section class="pembelajaran">
                <div class="title-container">
                    <h1>Internet of Things</h1>
                    <button><a href="#">Selengkapnya ></a></button>
                </div>
                <div class="card-slider">
                    @foreach($alatiot as $alat)
                        @if($alat->id >= 4 && $alat->id <= 6)
                        <div class="card">
                            <div class="card-image">
                                <img src="{{ asset('asset/image/'.$alat->gambar) }}" alt="">
                                <p>{{ $alat->atribut }}</p>
                            </div>
                            <div class="card-content">
                                <div class="title">
                                    <a href="{{ route('penyewaan.show', $alat->id) }}">
                                        <h1>{{ $alat->nama_alat }}</h1>
                                    </a>
                                    <img src="{{ asset('asset/image/arrow-up.png') }}" alt="">
                                </div>
                                <p>Rp {{ number_format($alat->harga, 0, ',', '.') }}</p>
                            </div>
                        </div>
                        @endif
                    @endforeach
                </div>
            </section>
        </div>
    </main>
    <footer>
        <div class="footer-main">
            <div class="short-description-and-social">
                <h1>Taniku</h1>
                <p>Taniku is a platform for those of you who want to increase your business opportunities and opportunities to be more attractive and recognized by many people. With Taniku increase your farming plan.</p>
                <div class="social">
                    <img src="{{ asset('asset/image/Group%2013.png') }}" alt="">
                    <img src="{{ asset('asset/image/Group%2011.png') }}" alt="">
                    <img src="{{ asset('asset/image/Group%2010.png') }}" alt="">
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
