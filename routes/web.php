<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\ProfileController;
use App\Models\Article;
use Illuminate\Support\Facades\Route;
// Home
Route::get('/', [Homecontroller::class, 'home'])->middleware(['auth', 'verified']);
Route::get('/dashboard', [Homecontroller::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::get("/search", [Homecontroller::class, "search"]);
Route::get('/article_detail/{id}', [Homecontroller::class, 'article_detail']);
Route::get('admin/dashboard', [Homecontroller::class, 'index'])->middleware(['auth', 'admin']);
Route::get('/add_article', [AdminController::class, 'create'])->middleware(['auth', 'admin']);
Route::post('/upload', [AdminController::class, 'store'])->middleware(['auth', 'admin']);

Route::post('articles/{article}/comment', [Homecontroller::class, 'comment'])->name('articles.comment');
Route::get('/movie/{id}', [Homecontroller::class, 'movie'])->middleware(['auth', 'verified']);
// Admin
// Route::get('/search_article', AdminController::class, 'search_article')->middleware(['auth', 'admin']);
Route::get('/category/{name}', [Homecontroller::class, 'showByCategory'])->name('articles_by_category');
Route::post('/articles/{article}/like', [LikeController::class, 'store'])->name('articles.like')->middleware(['auth', 'verified']);;
Route::post('/articles/{article}/comment', [CommentController::class, 'store'])->name('articles.comment')->middleware(['auth', 'verified']);;
Route::get("/category_view", [AdminController::class, "category_view"])->name('category_view')->middleware(['auth', 'admin']);
Route::post("/category", [AdminController::class, "create_category"])->name('create_category')->middleware(['auth', 'admin']);
Route::post('comments/{comment}/reply', [CommentController::class, 'reply'])->name('comments.reply');
Route::get('/view_article', [AdminController::class, 'view_article'])->middleware(['auth', 'admin']);
Route::get('/edit_article/{id}', [AdminController::class, 'edit_article'])->middleware(['auth', 'admin']);
Route::get('/delete_article/{id}', [AdminController::class, 'delete_article'])->middleware(['auth', 'admin']);
Route::get('/update_article/{id}', [AdminController::class, 'update_article'])->middleware(['auth', 'admin']);
Route::post('/article_edit/{id}', [AdminController::class, 'article_edit'])->middleware(['auth', 'admin']);

// Episode
Route::get('/articles/{article}/episodes', [AdminController::class, 'viewEpisodes'])->name('articles.episodes.view');
Route::get('/articles/{article}/episodes/create', [AdminController::class, 'createEpisode'])->name('articles.episodes.create');
Route::post('/articles/{article}/episodes', [AdminController::class, 'storeEpisode'])->name('articles.episodes.store');
Route::get('/articles/{article}/episodes/{episode}/edit', [AdminController::class, 'editEpisode'])->name('articles.episodes.edit');
Route::put('/articles/{article}/episodes/{episode}', [AdminController::class, 'updateEpisode'])->name('articles.episodes.update');
Route::delete('/articles/{article}/episodes/{episode}', [AdminController::class, 'deleteEpisode'])->name('articles.episodes.delete');
Route::get('/episodes', [Homecontroller::class, 'showEpisodes']);
// User

Route::get('/add_user', [AdminController::class, 'add_user'])->middleware(['auth', 'admin']);
Route::get('/update_user/{id}', [AdminController::class, 'update_user'])->middleware(['auth', 'admin']);
Route::post('/edit_user/{id}', [AdminController::class, 'edit_user'])->middleware(['auth', 'admin']);
Route::post('/upload_user', [AdminController::class, 'upload_user'])->middleware(['auth', 'admin']);
Route::get('/view_user', [AdminController::class, 'view_user'])->middleware(['auth', 'admin']);
Route::get('/delete_user/{id}', [AdminController::class, 'delete_user'])->middleware(['auth', 'admin']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
