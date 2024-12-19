<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Destination; // Import the Destination model
use App\Models\Tour;        // Import the Tour model
use App\Models\Package;     // Import the Package model
use App\Models\Blog;        // Import the Blog model
use App\Models\Comment;
use App\Models\InformationCategory;
use App\Models\Subtopic;
use App\Models\Testimonial;
use App\Models\Topic;
use Illuminate\Http\Request;

class DashboardController extends Controller
{public function index()
    {
        // Fetch counts of relevant entities
        $usersCount = User::count();         // Count of users
        $topicsCount = Topic::count();       // Count of topics
        $subtopicsCount = Subtopic::count(); // Count of subtopics

        return view('dashboard', compact('usersCount', 'topicsCount', 'subtopicsCount'));
    }

}
