<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "tittle" => "home"
    ]);
});
Route::get('about', function () {
    return view('about', [
        "nama" => "aan",
        "email" => "aan@aan.com",
        "image" => "aan.jpg",
        "tittle" => "about"
    ]);
});


Route::get('blog', [PostController::class, 'index']);

Route::get('/categories', function () {
    return view('categories', [
        'tittle' => 'Post Categories',
        'categories' => Category::all()
    ]);
});

Route::get('posts/{post:slug}', [PostController::class, 'show']);
Route::get('/categories/{category:slug}', function (Category $category) {
    return view('category', [
        'tittle' => $category->name,
        'posts' => $category->posts,
        'category' => $category->name,

    ]);
});
