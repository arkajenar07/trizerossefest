<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $forum->pertanyaan }}</title>
    <link rel="stylesheet" href="{{ asset('asset/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/forum.css') }}">
</head>
<body>
    <div class="menu-back">
        <a href="{{ url('/penyewaan') }}"><img src="{{ asset('asset/image/back.png') }}" alt="">Kembali</a>
    </div>
    <div class="container">
        <div class="title-user">
            <img src="{{  asset('asset/image/guido.png') }}" alt="">
            <p>Posted by {{ $forum->user->name }} - {{ $forum->created_at->diffForHumans() }}</p>
        </div>
        <h1>{{ $forum->pertanyaan }}</h1>
        <p>{{ $forum->uraian }}</p>
        @foreach ($forum->replies as $reply)
            <div class="reply">
                <img src="{{  asset('asset/image/guido.png') }}" alt="">
                <div>
                    <p class="content">{{ $reply->content }}</p>
                    <p>Replied by {{ $reply->user->name }} - {{ $reply->created_at->diffForHumans() }}</p>
                </div>
            </div>
        @endforeach
        
        <h2>Post a Reply</h2>
        <form action="{{ route('reply.store', $forum->id) }}" method="POST">
            @csrf
            <textarea name="content" required></textarea>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
