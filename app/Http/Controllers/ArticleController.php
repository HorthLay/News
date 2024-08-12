<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    // public function comment(Request $request, Article $article)
    // {
    //     $request->validate([
    //         'body' => 'required',
    //         'parent_id' => 'nullable|exists:comments,id',
    //     ]);

    //     $article->comments()->create([
    //         'body' => $request->body,
    //         'user_id' => auth()->id(),
    //         'parent_id' => $request->parent_id,
    //     ]);

    //     return back()->with('success', 'Comment added successfully.');
    // }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //
    }
}
