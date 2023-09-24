<?php

use App\Http\Controllers\BillingController;
use App\Http\Controllers\TweetController;
use App\Http\Controllers\UserController;
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

Route::prefix('tweet')->group(function () {
    Route::get('/', [TweetController::class, 'index'])->name('tweet.index');
    Route::post('tweet/{userId}', [TweetController::class, 'post'])->name('tweet.post');
    Route::delete('tweet/{userId}/{tweetId}', [TweetController::class, 'delete'])->name('tweet.delete');
});
