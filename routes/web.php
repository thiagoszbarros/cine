<?php

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;

Route::get('/', fn (): View  => view('welcome'));

Route::get('/login', fn (): string => 'Login')->name('login');