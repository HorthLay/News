<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Comment;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;

use Stripe\Charge;

class Homecontroller extends Controller
{
    public function index()
    {
        $articles = Article::with('user', 'likes', 'comments')->get();
        $categories = Category::all();
        return view('admin.index', compact('articles', 'categories'));
    }
    public function search(Request $request)
    {
        $request->validate([
            'search' => 'required|string|max:255',
        ]);

        $search = $request->search;

        $articles = Article::where('title', 'LIKE', '%' . $search . '%')
            ->orWhere('category', 'LIKE', '%' . $search . '%')
            ->paginate(10);

        $categories = Category::all();

        return view('home.index', compact('articles', 'categories'));
    }
    public function home()
    {
        $articles = Article::with('user', 'likes', 'comments')->get();
        $categories = Category::all();
        return view('home.index', compact('articles', 'categories'));
    }

    public function comment(Request $request, Article $article)
    {
        $request->validate([
            'body' => 'required',
            'parent_id' => 'nullable|exists:comments,id',
        ]);

        $article->comments()->create([
            'body' => $request->body,
            'user_id' => auth()->id(),
            'parent_id' => $request->parent_id,
        ]);

        return back()->with('success', 'Comment added successfully.');
    }

    public function showByCategory($name)
    {
        $categorys = Category::where('name_en', $name)->firstOrFail();

        // Retrieve contents related to the category
        $articles = Article::where('category', $categorys->name_en)->with('user', 'likes', 'comments')->get();

        // Return view with category and contents
        return view('home.articles_by_category', compact('categorys', 'articles'));
    }


    public function article_detail($id)
    {
        $comments = Comment::where('article_id', $id)->with('user')->get();
        $article = Article::where('id', $id)->with('user', 'likes', 'comments')->first();
        return view('home.show', compact('article', 'comments'));
    }

    public function movie($id)
    {
        $comments = Comment::where('article_id', $id)->with('user')->get();
        $article = Article::where('id', $id)->with('user', 'likes', 'comments', 'episodes')->first();
        $categories = Category::all();
        $episodes = $article->episodes; // Assuming the relationship is defined in the Article model

        return view('home.movie', compact('article', 'categories', 'comments', 'episodes'));
    }
}
