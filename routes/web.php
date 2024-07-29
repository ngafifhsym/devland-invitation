<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FlowerController;
use App\Http\Controllers\ProductController;
use App\Http\Middleware\EnsureTokenIsValid;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;



// Route::get('/', function () {
//     return view('home',[
//         'title' => "Home"
//     ]);
// });

    Route::get('/about', function () {
        return view('about',[
            'name' => "Ngafiff Hasyim ash'ari",
            'email' => 'ngafifhasyim209@gmail.com',
            'image' => 'IMG_6908.PNG',
            'title' => 'About'
        ]);
    });
    Route::get('/blog', [PostController::class, 'index']); 
    Route::get('/posts/{slug}', [PostController::class, 'show']);
    Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
    Route::post('/login', [LoginController::class, 'authenticate']);
    Route::post('/logout', [LoginController::class, 'logout']);
    
    
    Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
    Route::post('/register', [RegisterController::class, 'store']);
    
    Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');


Route::get('/home', [HomeController::class, 'whatsapp'])->name('home.send');
Route::get('/', [HomeController::class, 'index']);
Route::get('/product', [ProductController::class, 'index']);
Route::get('/flower', [FlowerController::class, 'index']);

