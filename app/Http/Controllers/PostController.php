<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Psy\CodeCleaner\ReturnTypePass;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return view('questions.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('questions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'user_id' => 'required|integer',
            'body' => 'required',
            'points' => 'required|integer',
        ]);

        Post::create($validated);
        return redirect()->route('questions.index')->with('success', 'Otázka byla úspěšně odeslána');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('questions.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'user_id' => 'required|integer',
            'body' => 'required',
            'points' => 'required|integer',
        ]);

        $post = Post::findOrFail($id);
        $post->update($validated);

        return redirect()->route('questions.index')->with('success', 'Otázka byla úspěšně upravena');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect()->route('questions.index')->with('success', 'Otázka byla úspěšně smazána');
    }
}
