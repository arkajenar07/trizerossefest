<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="asset/css/video.css">
    <link rel="stylesheet" href="asset/css/main.css">
</head>
<body>
    <div class="menu-back">
        <a href="{{ url('/dashboard') }}"><img src="asset/image/back.png" alt="">Kembali</a>
        <h1>Otomatisasi penyiraman tanaman dengan teknologi IoT</h1>
    </div>
    <div class="main-container">
        <div class="video-container">
            <div class="video-item">
                <video id="video1" width="320" height="240" controls>
                    <source src="FINALE.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <button><img src="asset/image/playbutton.png"></button>
            </div>
            <div class="title">
                <h1>1. Persiapan ( Pendahuluan )</h1>
                <p>Otomatisasi penyiraman tanaman dengan teknologi IoT</p>
            </div>
            <div class="rating-and-time">
                
            </div>
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
                        <input type="checkbox" name="check" id="">
                        <h2>1. Pendahuluan</h2>
                    </div>
                    <p><img src="asset/image/video-icon.png" alt=""> 5 menit</p>
                </div>
                <div class="vid-section">
                    <div class="checkboxes">
                        <input type="checkbox" name="check" id="">
                        <h2>2. Alat dan bahan</h2>
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
    
        closeBtn.addEventListener('click', function() {
            if (sidemenu.classList.contains('closed')) {
                sidemenu.classList.remove('closed');
                sidemenu.style.animation = 'slideIn 0.3s forwards';
            } else {
                sidemenu.style.animation = 'slideOut 0.3s forwards';
                setTimeout(() => sidemenu.classList.add('closed'), 300);
            }
        });
    });
    </script>

</body>
</html>