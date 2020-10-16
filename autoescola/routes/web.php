<?php


use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;





Route::get('/' , HomeController::class)->name('name');

Route::post('painel', [UsuarioController::class, 'login'])->name('usuarios.login');

Route::post('/', [UsuarioController::class, 'logout'])->name('usuarios.logout');

Route::resource('admins', AdminController::class);
