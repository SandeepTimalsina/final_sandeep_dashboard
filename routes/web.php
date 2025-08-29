<?php


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

require __DIR__.'/frontend.php';
require __DIR__.'/backend.php';
require __DIR__.'/auth.php';
