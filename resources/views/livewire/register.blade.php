<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="path/to/your/css/file.css">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="asset/css/main.css">
    <link rel="stylesheet" href="asset/css/register.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="contain flex">
        <div class="log-img">
            <a href="{{url('/')}}"><img src="asset/image/logo-white.png" alt=""></a>
            <h2>Halo, User Baru</h2>
        </div>
        <div class="text-content col-md-8">
            <h1>Buat Akun Taniku</h1>
            <h3>Create your account</h3>
            <form wire:submit="register">
                <div class="email flex flex-col">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" wire:model="email" class="form-control @error('email') is-invalid @enderror">
                    @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="pass-con flex">
                    <div class="password flex flex-col">
                        <label for="password">Password</label>
                        <input type="password" id="password" wire:model="password" class="form-control @error('password') is-invalid @enderror">
                        @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                    <div class="confirm-pass flex flex-col">
                        <label for="password_confirmation">Confirm Password</label>
                        <input type="password" id="password_confirmation" wire:model="password_confirmation" class="form-control">
                    </div>
                </div>
                <button type="submit">Register</button>
                <span wire:loading>Processing...</span>
            </form>
            <h4>Already have an account? <a href="/login">Login here</a></h4>
        </div>
    </div>
</body>
</html>
