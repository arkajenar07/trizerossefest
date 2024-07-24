<?php

namespace App\Http\Controllers;

use App\Models\Reply;
use Illuminate\Http\Request;

class ReplyController extends Controller
{
    public function store(Request $request, $forumId)
    {
        $request->validate([
            'content' => 'required',
        ]);

        $reply = new Reply();
        $reply->forum_id = $forumId;
        $reply->user_id = auth()->id();
        $reply->content = $request->content;
        $reply->save();

        return redirect()->back()->with('success', 'Your reply has been posted.');
    }
}

