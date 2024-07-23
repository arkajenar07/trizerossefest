<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="asset/css/main.css">
    <link rel="stylesheet" href="asset/css/landing.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <header>
        <img src="asset/image/logo.png" alt="" class="logo">
        <nav>
            <li class="active"><a href="#">Beranda</a></li>
            <li><a href="#">Tentang Kami</a></li>
            <li><a href="#">Layanan</a></li>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Testimoni</a></li>
            <li><a href="#">Kontak</a></li>
        </nav>
        <div class="auth-button-container">
            <button><a href="{{ route('login') }}">Masuk</a></button>
            <button class="register"><a href="{{ route('register') }}">Daftar</a></button>
        </div>
    </header>
    <main>
        <section id="sec1" class="section">
            <div class="content">
                <h1>Belajar <span>Pertanian</span>
                    Berkelanjutan dengan
                    para Professional</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <div class="content-button-container">
                    <button>Coba Gratis</button>
                    <button class="pelajari">Pelajari --></button>
                </div>
                <div class="counter-container">
                    <div class="counter">
                        <h2>20+</h2>
                        <p>Provinsi</p>
                    </div>
                    <div class="counter">
                        <h2>100k+</h2>
                        <p>Provinsi</p>
                    </div>
                    <div class="counter">
                        <h2>220</h2>
                        <p>Provinsi</p>
                    </div>
                </div>
            </div>
            <div class="content-image">
                <img class="petani-img" src="asset/image/image-removebg%201.png" alt="">
                <img class="bg-img" src="asset/image/Rectangle%2069.png" alt="">
                <div class="pop pop-one">
                    <h1>Konsumsi Sumber Daya</h1>
                    <div class="pop-data">
                        <img src="asset/image/Group%201000006236.png" alt="">
                        <h2>128%</h2>
                    </div>
                </div>
                <div class="pop pop-two">
                    <h1>Hasil Panen</h1>
                    <div class="pop-data">
                        <img src="asset/image/Group%201000006235.png" alt="">
                        <h2>52%</h2>
                    </div>
                </div>
            </div>
        </section>
        <section id="sec2" class="section">
            <h1>Lebih dari <span>100 kelompok tani</span> telah bekerja sama dengan kami</h1>
            <div class="image-slide">
                <img src="asset/image/image%20154.png" alt="">
                <img src="asset/image/image%20107.png" alt="">
                <img src="asset/image/image%20103.png" alt="">
                <img src="asset/image/image%20106.png" alt="">
                <img src="asset/image/image%20105.png" alt="">
                <img src="asset/image/image%20112.png" alt="">
                <img src="asset/image/image%20155.png" alt="">
            </div>
        </section>
        <section id="sec3" class="section">
            <div class="content">
                <h2>Tentang kami</h2>
                <h1>Taniku ?</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua incididunt ut labore et dolore magna aliqua</p>
                <button>Detail Layanan</button>
            </div>
            <img src="asset/image/taniku.png" alt="">
            <div class="list-keuntungan">
                <div class="list">
                    <div class="image-list">
                        <img src="asset/image/star.png" alt="">
                    </div>
                    <h1>Tingkatkan Hasil Panen</h1>
                </div>
                <div class="list">
                    <div class="image-list">
                        <img src="asset/image/sourcetree.png" alt="">
                    </div>
                    <h1>Minimalisir Sumber Daya</h1>
                </div>
                <div class="list">
                    <div class="image-list">
                        <img src="asset/image/coins.png" alt="">
                    </div>
                    <h1>Raih keuntungan extra</h1>
                </div>
            </div>
        </section>
        <section id="sec4" class="section">
            <img src="asset/image/Rectangle%2082.png" alt="">
            <div class="content">
                <div class="content-text">
                    <h1>Apa saja <span>layanan</span> dari kami ?</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus nisi ac rhoncus lobortis. Integer iaculis pulvinar ante ut porttitor.</p>
                </div>
                <div class="list-layanan">
                    <div class="layanan">
                        <h1>1</h1>
                        <h2>Pembelajaran</h2>
                    </div>
                    <div class="layanan">
                        <h1>2</h1>
                        <h2>Penyewaan Alat</h2>
                    </div>
                    <div class="layanan">
                        <h1>3</h1>
                        <h2>Kalkulator</h2>
                    </div>
                    <div class="layanan">
                        <h1>4</h1>
                        <h2>Alat Diagnostik</h2>
                    </div>
                    <div class="layanan">
                        <h1>5</h1>
                        <h2>Forum Antar Petani</h2>
                    </div>
                </div>
            </div>
        </section>
        <section  id="sec5" class="section">
            <div class="content-text">
                <h2>FAQ</h2>
                <h1>Frequently Ask <span>Question</span></h1>
                <p>Pertanyaan yang seringkali ditanyakan oleh pengguna kami</p>
            </div>
            <div class="dropdown-container">
                <div class="search-box">
                    <button><img src="asset/image/magnifying-glass.png" alt=""></button>
                    <input type="text" name="" id="" placeholder="Cari Sesuatu...">
                </div>
                <div class="dropdown">
                    <div class="dropdown-title">
                        <h1>Apa itu Taniku?</h1>
                        <button><img src="asset/image/chevron-down.png" alt=""></button>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus nisi ac rhoncus lobortis. Integer iaculis pulvinar ante ut porttitor.</p>
                </div>
                <div class="dropdown">
                    <div class="dropdown-title">
                        <h1>Bagaimana cara menyewa alat di Taniku?</h1>
                        <button><img src="asset/image/chevron-down.png" alt=""></button>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus nisi ac rhoncus lobortis. Integer iaculis pulvinar ante ut porttitor.</p>
                </div>
                <div class="dropdown">
                    <div class="dropdown-title">
                        <h1>Apa itu Taniku?</h1>
                        <button><img src="asset/image/chevron-down.png" alt=""></button>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus nisi ac rhoncus lobortis. Integer iaculis pulvinar ante ut porttitor.</p>
                </div>
                <div class="dropdown">
                    <div class="dropdown-title">
                        <h1>Apa itu Taniku?</h1>
                        <button><img src="asset/image/chevron-down.png" alt=""></button>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus nisi ac rhoncus lobortis. Integer iaculis pulvinar ante ut porttitor.</p>
                </div>
            </div>
        </section>
        <section id="sec6">
            <div class="title-container">
                <div class="title-content">
                    <h1>Kata <span>mereka</span> tentang kami</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
                </div>
                <div class="navigation">
                    <button id="prev"><img src="asset/image/Group%201000006269.png" alt=""></button>
                    <button id="next"><img src="asset/image/Group%201000006270.png" alt=""></button>
                </div>
            </div>
            <div id="slider" class="testimoni-slide">
                <div class="testimoni-card">
                    <img class="star" src="asset/image/Group%2085.png" alt="">
                    <p>I am very satisfied with the Taniku service, my sales have increased by 80%.</p>
                    <img class="logo" src="asset/image/image%20107.png" alt="">
                    <h1>Bagas Dwi C</h1>
                    <h2>Sales Kenongo Mukti Farmer's Group</h2>
                    <img class="pic" src="asset/image/image%2034.png" alt="">
                </div>
                <div class="testimoni-card">
                    <img class="star" src="asset/image/Group%2085.png" alt="">
                    <p>I am very satisfied with the Taniku service, my sales have increased by 80%.</p>
                    <img class="logo" src="asset/image/image%20107.png" alt="">
                    <h1>Bagas Dwi C</h1>
                    <h2>Sales Kenongo Mukti Farmer's Group</h2>
                    <img class="pic" src="asset/image/image%2034.png" alt="">
                </div>
                <div class="testimoni-card">
                    <img class="star" src="asset/image/Group%2085.png" alt="">
                    <p>I am very satisfied with the Taniku service, my sales have increased by 80%.</p>
                    <img class="logo" src="asset/image/image%20107.png" alt="">
                    <h1>Bagas Dwi C</h1>
                    <h2>Sales Kenongo Mukti Farmer's Group</h2>
                    <img class="pic" src="asset/image/image%2034.png" alt="">
                </div>
                <div class="testimoni-card">
                    <img class="star" src="asset/image/Group%2085.png" alt="">
                    <p>I am very satisfied with the Taniku service, my sales have increased by 80%.</p>
                    <img class="logo" src="asset/image/image%20107.png" alt="">
                    <h1>Bagas Dwi C</h1>
                    <h2>Sales Kenongo Mukti Farmer's Group</h2>
                    <img class="pic" src="asset/image/image%2034.png" alt="">
                </div>
                <div class="testimoni-card">
                    <img class="star" src="asset/image/Group%2085.png" alt="">
                    <p>I am very satisfied with the Taniku service, my sales have increased by 80%.</p>
                    <img class="logo" src="asset/image/image%20107.png" alt="">
                    <h1>Bagas Dwi C</h1>
                    <h2>Sales Kenongo Mukti Farmer's Group</h2>
                    <img class="pic" src="asset/image/image%2034.png" alt="">
                </div>
                <div class="testimoni-card">
                    <img class="star" src="asset/image/Group%2085.png" alt="">
                    <p>I am very satisfied with the Taniku service, my sales have increased by 80%.</p>
                    <img class="logo" src="asset/image/image%20107.png" alt="">
                    <h1>Bagas Dwi C</h1>
                    <h2>Sales Kenongo Mukti Farmer's Group</h2>
                    <img class="pic" src="asset/image/image%2034.png" alt="">
                </div>

            </div>
        </section>
    </main>
    <footer>
        <div class="footer-head">
            <div class="footer-head-text">
                <h1>The Largest Farmer Support Platform in Indonesia.</h1>
                <h2>Taniku</h2>
            </div>
        </div>
        <div class="footer-main">
            <div class="short-description-and-social">
                <h1>Taniku</h1>
                <p>Miracle of Bali is your go-to website for all things Balinese culture. Discover the beauty and richness of this island's culture through our articles, photos, and captivating stories.</p>
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const slider = document.getElementById('slider');
            const cards = document.querySelectorAll('.testimoni-card');
            const totalCards = cards.length;
            const cardWidth = cards[0].offsetWidth;
            let currentIndex = 0;

            document.getElementById('next').addEventListener('click', function() {
                if (currentIndex < totalCards - 1) {
                    currentIndex++;
                    slider.scrollTo({
                        left: cardWidth * currentIndex,
                        behavior: 'smooth'
                    });
                }
            });

            document.getElementById('prev').addEventListener('click', function() {
                if (currentIndex > 0) {
                    currentIndex--;
                    slider.scrollTo({
                        left: cardWidth * currentIndex,
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>
    <script>
        document.querySelectorAll('.dropdown-title button').forEach(button => {
            button.addEventListener('click', () => {
                const dropdown = button.parentElement.parentElement;
                const p = dropdown.querySelector('p');

                document.querySelectorAll('.dropdown p').forEach(paragraph => {
                    if (paragraph !== p) {
                        paragraph.classList.remove('show');
                        setTimeout(() => {
                            paragraph.style.display = 'none';
                        }, 500); // match the transition duration
                    }
                });

                if (p.classList.contains('show')) {
                    p.classList.remove('show');
                    setTimeout(() => {
                        p.style.display = 'none';
                    }, 500); // match the transition duration
                } else {
                    p.style.display = 'block';
                    setTimeout(() => {
                        p.classList.add('show');
                    }, 10); // slight delay to trigger transition
                }
            });
        });
    </script>
</body>
</html>
