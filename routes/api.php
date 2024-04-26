<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CronJobController;
use App\Models\CronJob;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/cron-jobs', [CronJobController::class, 'index']);
Route::post('/cron-jobs', [CronJobController::class, 'store']);
Route::delete('/cron-jobs/{cronJob}', [CronJobController::class, 'destroy']);
