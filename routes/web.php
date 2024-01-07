<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'title' => 'Home'
    ]);
});


Route::get('/about', function() {
    return view('about', [
        'title' => "About",
        "name" => "Faisal",
        "email" => "muchammad.faisal@unisba.ac.id"
    ]);
});


Route::get('/blog', function() {
    return view('posts', [
        "title" => "Posts",
        "posts" => Post::all()
    ]);
});

//halaman single posts
Route::get('/posts/{slug}', function($slug) {
    
    // $new_post = [];
    // foreach ($blog_posts as $post) {
    //     if ($post["slug"] === $slug) {
    //         $new_post = $post;
    //     }
    // }

    return view('post',[
        "title" => "Singe Post",
        "post" => POST::find($slug)
    ]);
});