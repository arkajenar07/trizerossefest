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
    <!-- Popup Form -->
<div id="popup-form" class="popup">
    <div class="popup-content">
        <span class="close-button" onclick="closePopup()">&times;</span>
        <h2>Buat Diskusi Baru</h2>
        <form id="forum-form" action="{{ url('/forum/create') }}" method="POST">
            @csrf
            <label for="pertanyaan">Judul Pertanyaan</label>
            <input type="text" id="pertanyaan" name="pertanyaan" required>
            
            <label for="uraian">Uraian:</label>
            <textarea id="uraian" name="uraian" required></textarea>
            
            <label for="katakunci">Kata Kunci:</label>
            <input type="text" id="katakunci" name="katakunci">
            
            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
            
            <button type="submit">Buat Diskusi</button>
        </form>
    </div>
</div>

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
            <button onclick="openPopup()">+ Buat Diskusi Baru</button>
        </div>
        <div class="forum-list">
            @foreach ($forums as $forum)
                <div class="forum-card">
                    <img class="logo" src="asset/image/ezar.png" alt="">
                    <div class="forum-content">
                        <h1>{{ $forum->pertanyaan }}</h1>
                        <h2>Dari<span> {{ $forum->user->name }} </span> - {{ $forum->created_at->diffForHumans() }}</h2>
                        <p>{{ $forum->uraian }}</p>
                    </div>
                    <div class="details-and-button">
                        <div class="details">
                            <img class="details-img" src="asset/image/details.png" alt="">
                            <h3><img src="asset/image/chat.png" alt=""> {{ $forum->comments_count }} Jawaban</h3>
                        </div>
                        <button><a href="{{ url('/forum/' . $forum->id) }}">Jawab</a></button>
                    </div>
                </div>
            @endforeach
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
    <script>
        function openPopup() {
            document.getElementById('popup-form').style.display = 'block';
        }

        function closePopup() {
            document.getElementById('popup-form').style.display = 'none';
        }

        // Optional: Close popup if user clicks outside of it
        window.onclick = function(event) {
            if (event.target == document.getElementById('popup-form')) {
                closePopup();
            }
        }

    </script>
</body>
</html>