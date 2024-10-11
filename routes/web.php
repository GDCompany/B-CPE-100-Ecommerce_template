<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\HomePage;
use App\Livewire\ShopPage;
use App\Livewire\LoginPage;
use App\Livewire\RegisterPage;
use App\Livewire\WishlistPage;
use App\Livewire\ProfilePage;
use App\Livewire\ProductPage;
use App\Livewire\ForgotpasswordPage;
use App\Livewire\AboutPage;
use App\Livewire\ContactPage;
use App\Livewire\Dashboard\IndexDash;

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
 
Route::get("/",  App\Livewire\HomePage::class)->name('home');

Route::get("/shop",  App\Livewire\ShopPage::class)->name('shop');

Route::get("/login",  App\Livewire\LoginPage::class)->name('login');

Route::get("/register",  App\Livewire\RegisterPage::class)->name('register');

Route::get("/wishlist",  App\Livewire\WishlistPage::class)->name('wishlist');

Route::get("/profile",  App\Livewire\ProfilePage::class)->name('profile');

Route::get("/product",  App\Livewire\ProductPage::class)->name('product');

Route::get("/fogortpassword",  App\Livewire\ForgotpasswordPage::class)->name('fogortpassword');

Route::get("/about",  App\Livewire\AboutPage::class)->name('about');

Route::get("/contact",  App\Livewire\ContactPage::class)->name('contact');

Route::get("/dash",  App\Livewire\Dashboard\IndexDash::class)->name('dash');
