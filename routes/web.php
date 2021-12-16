<?php

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


Route::get('blog', function () {
    $blog_posts = [
        [
            "tittle" => "Articel 1",
            "slug" => "article-1",
            "author" => "Aan",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos, quam ratione repudiandae voluptas itaque ex reprehenderit quos deserunt non nihil! Aliquid numquam ipsa maiores recusandae cumque repellat dignissimos exercitationem assumenda suscipit beatae, iure optio. Provident, delectus deserunt facilis quasi quidem sequi, explicabo incidunt dignissimos officiis nulla, quod nostrum? Quisquam, reiciendis fugit, nam excepturi, vel dolor expedita libero asperiores aperiam omnis fugiat tempora exercitationem! Nihil quibusdam veniam est quod vel animi optio iusto quae necessitatibus. Doloremque dignissimos optio nihil quis mollitia!"
        ],
        [
            "tittle" => "Articel 2",
            "slug" => "article-2",
            "author" => "Yuli",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam recusandae voluptas itaque ea maiores! Asperiores aut laborum ducimus excepturi voluptas magni itaque, ratione porro veniam? Deserunt, incidunt nam sequi, excepturi voluptatibus eos consequuntur quia, quis dolores vero soluta explicabo aliquid consequatur voluptates molestias iusto fugit accusamus repellendus cumque corporis odio reiciendis. Voluptate reprehenderit minima numquam veritatis ullam laborum nobis dolorum, ratione provident quod optio saepe deserunt beatae modi rerum in facilis ducimus porro. Vel perferendis eius cupiditate, asperiores nobis earum? Itaque, quibusdam. Adipisci eaque suscipit, facere quos dolorem culpa quisquam maxime explicabo, in modi sequi a, vitae reprehenderit aspernatur similique?"
        ]
    ];

    return view('posts', [
        "tittle" => "posts",
        "posts" => $blog_posts
    ]);
});

Route::get('posts/{slug}', function ($slug) {
    return view('post', [
        "tittle" => "Detail Blog"
    ]);
});
