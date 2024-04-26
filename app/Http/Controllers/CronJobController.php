<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CronJob;

class CronJobController extends Controller
{
    //
    public function index()
    {
        $cronJobs = CronJob::all();
        // return view('cron_jobs.index', compact('cronJobs'));
        return response()->json($cronJobs);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'url' => 'required|url',
            'schedule' => 'required|string',
        ]);

        CronJob::create($validated);

        return redirect()->back()->with('success', 'Cron job created successfully!');
    }

    public function destroy(CronJob $cronJob)
    {
        $cronJob->delete();

        return redirect()->back()->with('success', 'Cron job deleted successfully!');
    }
}
