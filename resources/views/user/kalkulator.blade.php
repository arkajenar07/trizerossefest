<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="asset/css/main.css">
    <link rel="stylesheet" href="asset/css/kalkulator.css">
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
            <div class="auth-button-container" style="margin-left: 1055px">
                <a href="{{ url('/dashboard') }}">Dashboard</a>
                <button id="all" class="settings">
                    <img src="asset/image/settings-arr.png" alt="">
                </button>
                <img src="asset/image/pp.png" alt="" class="logo">
            </div>
        </div>
        <div class="title-desc">
            <h1>Kalkulator Kebutuhan Tanaman</h1>
            <p>Taniku menyediakan kalkulator website yang membantu Anda menanam dengan mudah dan sukses! Website ini menyediakan kalkulator yang canggih untuk menghitung kebutuhan air dan pupuk yang tepat untuk tanaman Anda.</p>
        </div>
        <div class="kalkulator">
            <div style="display: flex; flex-direction: column; width: 629px">
                <select name="" id="">
                    <option value="">Pilih jenis tanaman</option>
                    <option value="">Mangga</option>
                </select>
                <select name="" id="">
                    <option value="">Pilih kondisi lingkungan</option>
                    <option value="">Panas Terik</option>
                </select>
                <select name="" id="">
                    <option value="">Pilih kondisi lingkungan</option>
                    <option value="">Panas Terik</option>
                </select>
                <select name="" id="">
                    <option value="">Pilih kondisi lingkungan</option>
                    <option value="">Panas Terik</option>
                </select>
                <button style="border: none;">submit</button>
            </div>
            <img src="asset/image/details-tanaman.png">
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
