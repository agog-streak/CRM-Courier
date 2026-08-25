<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\OrderController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth'])
    ->group(function () {

        Route::middleware(['role:admin'])
            ->group(function () {

                Route::resource(
                    'clients',
                    ClientController::class
                );
            });

        Route::resource(
            'orders',
            OrderController::class
        );
    });

require __DIR__.'/auth.php';
