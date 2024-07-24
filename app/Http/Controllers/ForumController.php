<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function index()
    {
        $forums = Forum::with('user')->orderBy('created_at', 'desc')->get();
        return view('user.forum', compact('forums'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'pertanyaan' => 'required|string|max:255',
            'uraian' => 'required|string',
            'katakunci' => 'nullable|string',
            'user_id' => 'required|exists:users,id',
        ]);

        Forum::create($request->all());

        return redirect()->back()->with('success', 'Diskusi berhasil dibuat!');
    }

    public function show($id)
    {
        // Fetch the item with the specified ID
        $forum = Forum::findOrFail($id);

        // Return the view with the item details
        return view('user.forumshow', compact('forum'));
    }
}
