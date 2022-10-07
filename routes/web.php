<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/layouts', function () {
    return view('sample');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        $role_id = auth()->user()->role_id;
        switch ($role_id) {
            case '1':
                return redirect()->route('admin.dashboard');
                // dd('admin');
                break;
            case '2':
                // return redirect()->route('midwife.dashboard');
                dd('midwife');
                break;
            case '3':
                // return redirect()->route('midwife.dashboard');
                dd('doctor');
                break;

            default:
                // code...
                break;
        }
    })->name('dashboard');
});

//ADMINISTRATOR
Route::prefix('/administrator')
    ->middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])
    ->group(function () {
        Route::get('/', function () {
            return view('admin.dashboard');
        })->name('admin.dashboard');
        Route::get('/patients', function () {
            return view('admin.patients');
        })->name('admin.patients');
        Route::get('/prenatal', function () {
            return view('admin.prenatal');
        })->name('admin.prenatal');
        Route::get('/childs', function () {
            return view('admin.childs');
        })->name('admin.childs');
        Route::get('/users', function () {
            return view('admin.users');
        })->name('admin.users');
    });
