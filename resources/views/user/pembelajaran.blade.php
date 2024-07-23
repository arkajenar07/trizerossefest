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
        <img src="asset/image/logo.png" alt="">
        <ul class="menu">
            <li><a href="#">Pembelajaran</a></li>
            <li><a href="#">Forum Petani</a></li>
            <li><a href="#">Kalkulator</a></li>
            <li><a href="#">Alat Diagnosa</a></li>
            <li><a href="#">Penyewaan Alat</a></li>
        </ul>
    </div>
    <main>
        <div class="head">
            <div class="searchbar">
                <button>
                    <img src="asset/image/magnifying-glass.png" alt="">
                </button>
                <input type="text" name="" id="" placeholder="Cari Modul Belajar">
            </div>
            <div class="auth-button-container">
                <a href="{{ url('/dashboard') }}">Dashboard</a>
                <img src="asset/image/pp.png" alt="" class="logo">
            </div>
        </div>
        <div class="pembelajaran-main">
            <section class="pembelajaran">
                <div class="title-container">
                    <h1>Internet of Things untuk Pertanian dan Perkebunan</h1>
                    <button>Selengkapnya ></button>
                </div>
                
            </section>
        </div>
    </main>
</body>
</html>