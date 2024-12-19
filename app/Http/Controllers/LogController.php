<?php
namespace App\Http\Controllers;

use App\Models\Log; // Import the Log model

class LogController extends Controller
{
    /**
     * Display the application logs from the database.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function viewLogs()
    {
        // Fetch logs ordered by the most recent first
        $logs = Log::latest()->paginate(10); // 10 logs per page

        // Return the view with the paginated logs
        return view('logs.index', compact('logs'));
    }


    public function show(Log $log)
    {
        // Decode the details field as an array
        $details = json_decode($log->details, true);
        if (is_array($details)) {
            return view('logs.show', compact('log', 'details'));
        } else {
            // Handle the case where details are not properly decoded
            return redirect()->route('logs.index')->with('error', 'Log details could not be retrieved.');
        }
    }
}
