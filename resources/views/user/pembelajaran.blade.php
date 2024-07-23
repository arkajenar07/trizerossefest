<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="asset/css/main.css">
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
                <input type="text" name="" id="" placeholder="Cari Modul Belajar">
            </div>
            <div class="auth-button-container">
                <a href="{{ url('/dashboard') }}">Dashboard</a>
                <button id="all" class="settings">
                    <img src="asset/image/settings-arr.png" alt="">
                </button>
                <img src="asset/image/pp.png" alt="" class="logo">
            </div>
        </div>

        <div class="pembelajaran-main">
            <section class="pembelajaran">
                <div class="title-container">
                    <h1>Internet of Things untuk Pertanian dan Perkebunan</h1>
                    <button>Selengkapnya ></button>
                </div>
                <div class="card-slider">
                    <div class="card">
                        <div class="card-image">
                            <img src="asset/image/gambar-card.png" alt="">
                            <button></button>
                            <p><img src="asset/image/clock.png" alt=""> 08 hr 12 mins</p>
                        </div>
                        <div class="card-content">
                            <div class="title">
                                <h1>Otomatisasi penyiraman tanaman</h1>
                                <img src="asset/image/arrow-up.png" alt="">
                            </div>
                            <p>Use Figma to get a job in UI Design, User Interface, User Experience design.</p>
                            <div class="rating">
                                <h4>5.0</h4>
                                <img src="asset/image/rating.png" alt="">
                                <h5>(16,325)</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="pembelajaran">
                <div class="title-container">
                    <h1>Pertanian Ramah Lingkungan</h1>
                    <button>Selengkapnya ></button>
                </div>
                <div class="card-slider">
                    <div class="card">
                        <div class="card-image">
                            <img src="asset/image/gambar-card.png" alt="">
                            <button></button>
                            <p><img src="asset/image/clock.png" alt=""> 08 hr 12 mins</p>
                        </div>
                        <div class="card-content">
                            <div class="title">
                                <h1>Otomatisasi penyiraman tanaman</h1>
                                <img src="asset/image/arrow-up.png" alt="">
                            </div>
                            <p>Use Figma to get a job in UI Design, User Interface, User Experience design.</p>
                            <div class="rating">
                                <h4>5.0</h4>
                                <img src="asset/image/rating.png" alt="">
                                <h5>(16,325)</h5>
                            </div>
                        </div>
                    </div>
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
            Copyright © 2023. Miracle of Bali. All right reserved
        </div>
    </footer>
    </div>
</body>
</html>