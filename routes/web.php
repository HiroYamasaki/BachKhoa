<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;

Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/', function () {
    return view('home');
});

Route::get('/about-us', function () {
    return view('aboutUs');
});

Route::get('/contact-us', function () {
    return view('contactUs');
});

Route::get('/faq', function () {
    return view('FAQ');
});

Route::get('/shop', [ProductController::class, 'index']);

Route::get('/product-detail', [ProductController::class, 'show']);

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/blog-detail', function () {
    return view('blog_detail');
});

Route::get('/projects', function () {
    return view('projects');
});

Route::get('/project-detail', function () {
    return view('project_detail');
});

// TEMPORARY DEBUG - remove after diagnosing
Route::get('/debug-db', function () {
    try {
        $pdo = \DB::connection()->getPdo();
        $dbName = \DB::connection()->getDatabaseName();
        $productCount = \App\Models\Product::count();
        $host = config('database.connections.mysql.host');
        $port = config('database.connections.mysql.port');
        $driver = config('database.default');
        $hasUrl = env('MYSQL_URL') ? 'YES' : 'NO';
        $hasMysqlHost = env('MYSQLHOST') ? 'YES' : 'NO';
        $hasDbHost = env('DB_HOST') ? 'YES' : 'NO';
        return response()->json([
            'status' => 'connected',
            'driver' => $driver,
            'database' => $dbName,
            'host' => $host,
            'port' => $port,
            'products' => $productCount,
            'env_MYSQL_URL' => $hasUrl,
            'env_MYSQLHOST' => $hasMysqlHost,
            'env_DB_HOST' => $hasDbHost,
        ]);
    } catch (\Exception $e) {
        return response()->json([
            'status' => 'error',
            'message' => $e->getMessage(),
        ], 500);
    }
});
