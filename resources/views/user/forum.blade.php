<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="asset/css/main.css">
    <link rel="stylesheet" href="asset/css/forum.css">
</head>
<body>
    <div class="sidebar">
        <img class="logo" src="asset/image/logo.png" alt="">
        <ul class="menu">
            <li><img src="asset/image/ic_round-book.png" alt=""><a href="{{ url('/dashboard') }}">Pembelajaran</a></li>
            <li><img src="asset/image/entypo_chat.png" alt=""><a href="{{ url('/forum') }}">Forum Petani</a></li>
            <li><img src="asset/image/ph_math-operations-fill.png" alt=""><a href="{{ url('/kalkulator') }}">Kalkulator</a></li>
            <li><img src="asset/image/ic_outline-cable.png" alt=""><a href="{{ url('/diagnostik') }}">Alat Diagnosa</a></li>
            <li><img src="asset/image/game-icons_ice-cream-scoop.png" alt=""><a href="{{ url('/penyewaan') }}">Penyewaan Alat</a></li>
        </ul>
    </div>
    <div class="dash">
    <main style="padding: 71px;">
        <div class="head">
            <div class="searchbar">
                <button>
                    <img src="asset/image/magnifying-glass.png" alt="">
                </button>
                <input type="text" name="" id="" placeholder="Cari di Forum">
            </div>
            <div class="auth-button-container">
                <a href="{{ url('/dashboard') }}">Dashboard</a>
                <button id="all" class="settings">
                    <img src="asset/image/settings-arr.png" alt="">
                </button>
                <img src="asset/image/pp.png" alt="" class="logo">
            </div>
        </div>
        <div class="button-filter">
            <div class="filter">
                <button>Yang Terbaru</button>
                <button>Kata Kunci</button>
            </div>
            <button>+ Buat Diskusi Baru</button>
        </div>
        <div class="forum-list">
            <div class="forum-card">
                <img class="logo" src="asset/image/ezar.png" alt="">
                <div class="forum-content">
                    <h1>Bagaimana cara menanam padi tanpa pestisida?</h1>
                    <h2>Dari<span> Arka Jenar Ma’arif </span> - 12 menit yang lalu</h2>
                    <p>Saya memiliki sawah di dekat rumah, namun saya ingin mencoba untuk padi tanpa pestisida untuk menekan biaya agar terlalu boros. Apakah ada altrenatif lain agar padi saya tetap tumbuh tanpa hama.</p>
                </div>
                <div class="details-and-button">
                    <div class="details">
                        <img class="details-img" src="asset/image/details.png" alt="">
                        <h3><img src="asset/image/chat.png" alt=""> 16 Jawaban</h3>
                    </div>
                    <button><a href="{{ url('/') }}">Jawab</a></button>
                </div>
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