<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Log;

Route::view('/', 'index');
Route::get('/articlelist', [PostController::class, 'index'])->name('articlelist');
Route::get('/article/{slug}', [PostController::class, 'show'])->name('article');
Route::post('/contact', [ContactController::class, 'send'])->name('contact');

if (app()->environment('local')) {
Route::get('/fix-storage', function () {
    Artisan::call('storage:link');
    return 'Storage link created!';
});

Route::get('/debug-images', function () {
    $post = \App\Models\Post::whereNotNull('image')->first();
    
    echo "<h1>Image Debugger</h1>";
    echo "<p><strong>APP_URL:</strong> " . env('APP_URL') . "</p>";
    echo "<p><strong>Public Path:</strong> " . public_path() . "</p>";
    echo "<p><strong>Storage Path:</strong> " . storage_path('app/public') . "</p>";
    
    $linkPath = public_path('storage');
    echo "<p><strong>Symlink Exists?</strong> " . (file_exists($linkPath) ? 'Yes' : 'No') . "</p>";
    echo "<p><strong>Is Link?</strong> " . (is_link($linkPath) ? 'Yes' : 'No') . "</p>";
    
    if ($post) {
        echo "<hr>";
        echo "<p><strong>Test Post Title:</strong> {$post->title}</p>";
        echo "<p><strong>DB Image Value:</strong> {$post->image}</p>";
        echo "<p><strong>Generated URL:</strong> " . asset('storage/' . $post->image) . "</p>";
        
        $realPath = public_path('storage/' . $post->image);
        echo "<p><strong>Physical File Check:</strong> " . (file_exists($realPath) ? 'Found!' : 'NOT FOUND at ' . $realPath) . "</p>";
    } else {
        echo "<p>No posts with images found.</p>";
    }
    
    echo "<hr>";
    echo "<form action='" . url('/fix-storage-force') . "' method='GET'><button>Force Re-Link Storage</button></form>";
});

Route::get('/fix-storage-force', function () {
    $target = storage_path('app/public');
    $link = public_path('storage');

    if (file_exists($link)) {
        // Windows-compatible delete
        if (is_link($link)) {
            @unlink($link);
        } else {
            @rmdir($link);
        }
    }

    \Illuminate\Support\Facades\Artisan::call('storage:link');
    return "Storage link re-created. <a href='/debug-images'>Go back to Debugger</a>";
});
}

Route::get('/create-user', function () {
    $user = \App\Models\User::updateOrCreate(
        ['email' => 'username@myheat.co.za'],
        [
            'name' => 'username',
            // Default password, please change this!
            'password' => \Illuminate\Support\Facades\Hash::make('Password123!'),
            // Set as admin
            'is_admin' => true, 
        ]
    );

    return 'User Oratile created successfully with email: ' . $user->email;
});