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
            <div class="auth-button-container" style="margin-left: 1200px">
                <a href="{{ url('/dashboard') }}">Dashboard</a>
                <button id="all" class="settings">
                    <img src="asset/image/settings-arr.png" alt="">
                </button>
                <img src="asset/image/pp.png" alt="" class="logo">
            </div>
        </div>
        <style>
            body {
              font-family: Arial, sans-serif;
              margin: 0;
              padding: 0;
            }
        
            .container {
              max-width: 600px;
              margin: 20px auto;
              background-color: #fff;
              padding: 20px;
              border-radius: 8px;
              box-shadow: 0 0 10px rgba(0,0,0,0.1);
            }
        
            h1 {
              text-align: center;
            }
        
            input[type="text"] {
              width: calc(100% - 42px);
              padding: 10px;
              margin-bottom: 10px;
              border: 1px solid #ccc;
              border-radius: 5px;
              font-size: 16px;
            }
        
            .file-upload-container {
              position: relative;
              overflow: hidden;
              margin-bottom: 20px;
              border: 5px dashed #ccc;
              padding: 200px;
              border-radius: 5px;
              text-align: center;
            }
        
            .file-upload-input {
              position: absolute;
              top: 0;
              left: 0;
              opacity: 0;
              cursor: pointer;
            }
        
            .file-upload-button {
              display: inline-block;
              padding: 10px 20px;
              border: 1px solid #ccc;
              border-radius: 5px;
              cursor: pointer;
              background-color: #f0f0f0;
              transition: background-color 0.3s ease;
            }
        
            .file-upload-button:hover {
              background-color: #e0e0e0;
            }
        
            .file-upload-preview {
              width: 100%;
              max-height: 200px;
              margin-top: 10px;
              object-fit: cover;
              border: 1px solid #ccc;
              border-radius: 5px;
            }
        
            button[type="submit"] {
              display: block;
              width: 100%;
              padding: 10px;
              background-color: #4CAF50;
              color: white;
              border: none;
              border-radius: 5px;
              cursor: pointer;
              font-size: 16px;
              margin-top: 10px;
              transition: background-color 0.3s ease;
            }
        
            button[type="submit"]:hover {
              background-color: #45a049;
            }
          </style>
          <div class="container">
            <h1>Upload Box Image</h1>
        
            <input type="text" placeholder="Enter image description (optional)">
        
            <div class="file-upload-container">
              <input type="file" class="file-upload-input" id="file-upload" accept="image/*">
              <label for="file-upload" class="file-upload-button">Select Image</label>
              <img src="#" alt="Uploaded Image" class="file-upload-preview">
            </div>
        
            <button type="submit">Upload</button>
          </div>
        
          <script>
            const fileUpload = document.getElementById('file-upload');
            const previewImage = document.querySelector('.file-upload-preview');
        
            fileUpload.addEventListener('change', function() {
              if (this.files && this.files[0]) {
                const reader = new FileReader();
        
                reader.onload = function(e) {
                  previewImage.src = e.target.result;
                };
        
                reader.readAsDataURL(this.files[0]);
              }
            });
          </script>        
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