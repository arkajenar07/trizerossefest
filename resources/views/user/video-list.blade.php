<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="asset/css/video.css">
    <link rel="stylesheet" href="asset/css/main.css">
    <style>
        .video-container {
            position: relative;
        }
        .video-item button {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: none;
            border: none;
            cursor: pointer;
        }
        .video-item video {
            width: 100%;
            height: auto;
        }
        .hidden {
            display: none;
        }
    </style>
</head>
<body>
    <div class="menu-back">
        <a href="{{ url('/dashboard') }}"><img src="asset/image/back.png" alt="">Kembali</a>
        <h1>Otomatisasi penyiraman tanaman dengan teknologi IoT</h1>
    </div>
    <div class="main-container">
        <div class="video-container">
            <div class="video-item" id="videoItem1">
                <video id="video1" width="320" height="240">
                    <source src="asset/video/jokowinanem.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <button class="play-button"><img src="asset/image/playbutton.png"></button>
            </div>
            <div class="video-item hidden" id="videoItem2">
                <video id="video2" width="320" height="240">
                    <source src="asset/video/nanemsayur.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <button class="play-button"><img src="asset/image/playbutton.png"></button>
            </div>
            <div class="video-item hidden" id="videoItem3">
                <video id="video3" width="320" height="240">
                    <source src="asset/video/video3.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <button class="play-button"><img src="asset/image/playbutton.png"></button>
            </div>
            <div class="title">
                <h1>1. Persiapan ( Pendahuluan )</h1>
                <p>Otomatisasi penyiraman tanaman dengan teknologi IoT</p>
            </div>
            <div class="rating-and-time"></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lobortis eu nulla eu iaculis. Vivamus maximus nulla non orci ornare ultrices. Integer a tincidunt enim. Mauris pellentesque enim finibus urna lacinia, ac molestie neque convallis. Suspendisse bibendum, sapien sed sodales vehicula, dui sapien sagittis sapien, ac luctus ligula leo in velit. Maecenas dolor est, varius elementum massa id, porta pharetra massa. Mauris vestibulum tellus sed nibh gravida, ac feugiat erat efficitur. Pellentesque quis rutrum nisl.</p>
            <h1>1. Persiapan</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lobortis eu nulla eu iaculis. Vivamus maximus nulla non orci ornare ultrices. Integer a tincidunt enim. Mauris pellentesque enim finibus urna lacinia, ac molestie neque convallis. Suspendisse bibendum, sapien sed sodales vehicula, dui sapien sagittis sapien, ac luctus ligula leo in velit. Maecenas dolor est, varius elementum massa id, porta pharetra massa. Mauris vestibulum tellus sed nibh gravida, ac feugiat erat efficitur. Pellentesque quis rutrum nisl.</p>
        </div>
        <div class="sidemenu">
            <button id="close">--></button>
            <div class="vid-sections">
                <div class="title-and-toggle-container">
                    <div class="title-toggle">
                        <h2>Section 1: Persiapan</h2>
                        <button><img src="asset/image/settings-arr.png" alt=""></button>
                    </div>
                    <p>4 / 4 jam - 1 jam 10 menit</p>
                </div>
                <div class="vid-section">
                    <div class="checkboxes">
                        <input type="checkbox" class="check" id="checkbox1">
                        <h2>1. Pendahuluan</h2>
                    </div>
                    <p><img src="asset/image/video-icon.png" alt=""> 5 menit</p>
                </div>
                <div class="vid-section">
                    <div class="checkboxes">
                        <input type="checkbox"  class="check" id="checkbox2">
                        <h2>2. Alat dan bahan</h2>
                    </div>
                    <p><img src="asset/image/video-icon.png" alt=""> 5 menit</p>
                </div>
                <div class="vid-section">
                    <div class="checkboxes">
                        <input type="checkbox"  class="check" id="checkbox3">
                        <h2>3. Instalasi</h2>
                    </div>
                    <p><img src="asset/image/video-icon.png" alt=""> 5 menit</p>
                </div>
            </div>
        </div>
    </div>
    
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const sidemenu = document.querySelector('.sidemenu');
        const closeBtn = document.getElementById('close');
        const playButtons = document.querySelectorAll('.play-button');
        const videos = document.querySelectorAll('video');
        const checkboxes = document.querySelectorAll('.check');
        const videoItems = document.querySelectorAll('.video-item');

        closeBtn.addEventListener('click', function() {
            if (sidemenu.classList.contains('closed')) {
                sidemenu.classList.remove('closed');
                sidemenu.style.animation = 'slideIn 0.3s forwards';
            } else {
                sidemenu.style.animation = 'slideOut 0.3s forwards';
                setTimeout(() => sidemenu.classList.add('closed'), 300);
            }
        });

        playButtons.forEach((button, index) => {
            const video = videos[index];
            button.addEventListener('click', function() {
                video.setAttribute('controls', 'controls');
                video.play();
                button.style.display = 'none';
            });

            video.addEventListener('pause', function() {
                button.style.display = 'block';
                video.removeAttribute('controls');
            });

            video.addEventListener('play', function() {
                button.style.display = 'none';
            });
        });

        videos.forEach((video, index) => {
            video.addEventListener('timeupdate', function() {
                const checkbox = document.getElementById(`checkbox${index + 1}`);
                if (video.currentTime >= video.duration * 0.95) {
                    checkbox.checked = true;
                    if (index < videos.length - 1) {
                        videoItems[index].classList.add('hidden');
                        videoItems[index + 1].classList.remove('hidden');
                    }
                }
            });
        });

        checkboxes.forEach((checkbox, index) => {
            checkbox.addEventListener('change', function() {
                if (checkbox.checked && index < videos.length - 1) {
                    videoItems[index].classList.add('hidden');
                    videoItems[index + 1].classList.remove('hidden');
                }
            });
        });
    });
    </script>

</body>
</html>
