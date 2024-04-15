<?php

use App\Models\Post;
use App\Models\Comment;
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

    return view('pages.index', [
        'posts' => Post::all()
    ]);
});

Route::get('posts/{post}', function($slug) {
    //access the Post class and use its find method to get a post by its slug
    return view('pages.post', [
        'post' => Post::find($slug),
        'comments' => Comment::findCommentsByPost($slug)
    ]);

})->where('post', '[A-z_\-]+'); 

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/contribute', function () {
    return view('pages.contribute');
});