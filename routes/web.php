<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\GameNewsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PlayerFeedController;
use App\Http\Controllers\TopPlayersController;

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

Route::get('redirect_to_panel', function () {
    if (Auth::user()->is_admin) {
        return redirect()->route('admin.home');
    } else {
        return redirect()->route('user.profile');
    }
});
// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'user_home'])->name('user.home');
Route::get('player-feed', [PlayerFeedController::class, 'player_feed'])->name('user.player.feed');
Route::get('about-us', [AboutUsController::class, 'about_us'])->name('user.about.us');
Route::get('top-players', [TopPlayersController::class, 'top_players'])->name('user.top.players');
Route::get('gaming-news', [GameNewsController::class, 'gaming_news'])->name('user.gaming.news');
Route::get('contact-us', [ContactUsController::class, 'contact_us'])->name('user.contact.us');
Route::post('contact-us', [ContactUsController::class, 'contact_us_store'])->name('user.contact.us.store');
Auth::routes();

Route::middleware(['is_user'])->group(function (){
    Route::get('/profile', [HomeController::class, 'user_profile'])->name('user.profile');
    Route::post('/update-profile', [HomeController::class, 'user_profile_update'])->name('user.profile.update');
    Route::post('/upload-cover', [HomeController::class, 'user_cover_image'])->name('user.cover.image');
    Route::post('/upload-profile-image', [HomeController::class, 'user_profile_image'])->name('user.profile.image.upload');
});



Route::prefix('admin')->middleware(['is_admin'])->group(function () {
    Route::get('dashboard', [HomeController::class, 'adminHome'])->name('admin.home');
    //  players
    Route::get('/players', [AdminController::class, 'fetch_all_players'])->name('fetch.all.players');
    Route::get('/delete-players/{id}', [AdminController::class, 'delete_player'])->name('delete.player');
    //  Brands
    Route::get('/brands', [AdminController::class, 'fetch_all_brands'])->name('fetch.all.brands');
    Route::get('/delete-brand/{id}', [AdminController::class, 'delete_brand'])->name('delete.brand');
    // Games
    Route::resource('games', GameController::class);
});
