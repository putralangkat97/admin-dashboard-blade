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
    Route::get('/dashboard', function () {
        $users = User::where('id', '!=', Auth::user()->id)->paginate(10);
        return view('dashboard', ['users' => $users]);
    })->name('dashboard');

    Route::get('/table', function () {
        $users = User::where('id', '!=', Auth::user()->id)->paginate(10);
        return view('admin/table', ['users' => $users]);
    })->name('table');

    Route::get('/accordion', function () {
        return view('admin/accordion');
    })->name('accordion');

    Route::get('/alerts', function () {
        return view('admin/alerts');
    })->name('alerts');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
