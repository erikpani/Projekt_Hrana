<?php

use Illuminate\Support\Facades\Route;
use App\Models\jela;


Route::get('/', function () {
    return view('welcome', ['meals' => jela::all()]);
});
