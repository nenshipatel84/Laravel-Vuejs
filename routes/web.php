<?php

use App\Http\Controllers\CronJobController;
use Illuminate\Support\Facades\Route;
use App\Models\CronJob;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/cron-job', function () {
    return view('index'); // Assuming a Blade template
});

Route::delete('/cron-jobs/{id}', function ($id) {
    // Logic to delete the cron job with the given ID from your database
    $cronJob = CronJob::find($id);
    if ($cronJob) {
        $cronJob->delete();
        return response()->json(['message' => 'Cron job deleted successfully']);
    } else {
        return response()->json(['error' => 'Cron job not found'], 404);
    }
});
