<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Route::get('/ajax-toast-test', function() {
//     return response()->json([
//         'message' => 'This is a test AJAX toast!'
//     ]);
// })->name('ajax.toast.test')->middleware('auth');


// Route::get('/toast-test/{type}', function ($type) {
//     return redirect()->back()->with('toast', [
//         'type' => $type,
//         'title' => ucfirst($type),
//         'message' => "This is a $type toast notification!",
//     ]);
// })->name('toast.test');

require __DIR__.'/auth.php';
