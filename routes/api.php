<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\LaporanApiController;

Route::get('/laporan', [LaporanApiController::class, 'index']);