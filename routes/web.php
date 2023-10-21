<?php

use App\Http\Controllers\ProfileController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Route::middleware(['auth'])->group(function () {
    // A
    Route::get('/accordion', function () {
        return view('admin/accordion');
    })->name('accordion');
    Route::get('/alerts', function () {
        return view('admin/alerts');
    })->name('alerts');
    Route::get('/avatars', function () {
        return view('admin/avatars');
    })->name('avatars');

    // B
    Route::get('/badges', function () {
        return view('admin/badges');
    })->name('badges');
    Route::get('/breadcrumb', function () {
        return view('admin/breadcrumb');
    })->name('breadcrumb');
    Route::get('/buttons', function () {
        return view('admin/buttons');
    })->name('buttons');

    // C
    Route::get('/cards', function () {
        return view('admin/cards');
    })->name('cards');

    // D
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // I
    Route::get('/input', function () {
        return view('admin/input');
    })->name('input');

    // L
    Route::get('/lists', function () {
        return view('admin/lists');
    })->name('lists');

    // P
    Route::get('/placeholders', function () {
        return view('admin/placeholders');
    })->name('placeholders');
    Route::get('/progress', function () {
        return view('admin/progress');
    })->name('progress');

    // S
    Route::get('/spiners', function () {
        return view('admin/spiners');
    })->name('spiners');

    // T
    Route::get('/table', function () {
        $users = User::where('id', '!=', Auth::user()->id)->paginate(5);
        return view('admin/table', ['users' => $users]);
    })->name('table');
    Route::get('/tabs', function () {
        return view('admin/tabs');
    })->name('tabs');
    Route::get('/toasts', function () {
        return view('admin/toasts');
    })->name('toasts');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
