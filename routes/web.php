<?php

use App\Livewire\About\Index as AboutIndex;
use App\Livewire\Blog\Details as BlogDetails;
use App\Livewire\Blog\Index as BlogIndex;
use App\Livewire\Cart\Index as CartIndex;
use App\Livewire\Checkout\Index as CheckoutIndex;
use App\Livewire\Contact\Index as ContactIndex;
use App\Livewire\History\Index as HistoryIndex;
use App\Livewire\Home\Index;
use App\Livewire\Shop\Details;
use App\Livewire\Shop\Index as ShopIndex;
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


Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('/', Index::class);
Route::get('/sobre', AboutIndex::class);
Route::get('/contato', ContactIndex::class);
Route::get('/produtos', ShopIndex::class);
Route::get('/blog', BlogIndex::class);
Route::get('/produto/{id}', Details::class);
Route::get('/cart', CartIndex::class);
Route::get('/checkout', CheckoutIndex::class);
Route::get('/blog/{id}', BlogDetails::class);
Route::get('/historico', HistoryIndex::class);


// require __DIR__.'/auth.php';

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
