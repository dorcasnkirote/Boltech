<?php

use Illuminate\Support\Facades\Route;

// Controllers
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\CKEditorController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\InformationCategoryController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\SubtopicController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\TopicController;
// Models
use App\Models\Blog;
use App\Models\Destination;
use App\Models\InformationCategory;
use App\Models\Package;
use App\Models\Testimonial;
use App\Models\Topic;
use App\Models\Tour;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application.
|
*/

// Authentication Routes
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

// Public Routes
Route::get('/', function () {


    $topics = Topic::all();

    return view('welcome', [

        'topics'=>$topics

    ]);
});


Route::get('ckeditor/image_browser',[CKEditorController::class,'browser'])->name('ckeditor.image_browser');

Route::get('ckeditor/image_upload',[CKEditorController::class,'upload'])->name('ckeditor.image_upload');


Route::get('/topics/{topic}', [TopicController::class, 'show'])->name('topics.show');


Route::get('/faqs', function () {
    $blogs = Blog::latest()->take(3)->get();
    $categories = InformationCategory::all(); // Fetch all categories from the categories table


    return view('FAQs', compact('blogs','categories'));
});



Route::get('subtopics/create', [SubtopicController::class, 'create'])->name('subtopics.create');

Route::get('topics/create', [TopicController::class, 'create'])->name('topics.create');



Route::get('subtopics/{subtopic}', [SubtopicController::class, 'show'])->name('subtopics.show');

// Destination Routes
Route::get('/destination', function (Request $request) {
    $destinations = Destination::all();
    $categories = InformationCategory::all(); // Fetch all categories from the categories table

    $tours = Tour::all(); // Fetch all tours initially

    // Check if the request is an AJAX request for filtered tours
    if ($request->ajax()) {
        $query = Tour::query();

        // Filter by destination ID if provided
        if ($request->has('destination_id') && $request->input('destination_id') !== null) {
            $query->where('destination_id', $request->input('destination_id'));
        }

        // Filter by search query if provided
        if ($request->has('search') && $request->input('search') !== null) {
            $query->where('name', 'like', '%' . $request->input('search') . '%');
        }

        $tours = $query->get(); // Return filtered tours as JSON for AJAX response
        return response()->json($tours);
    }

    $blogs = Blog::latest()->take(3)->get();

    // Load the view with all destinations and all tours initially
    return view('Destination', compact('destinations', 'tours', 'blogs','categories'));
});

Route::get('/destination/{id}', function ($id) {
    $destination = Destination::findOrFail($id); // Ensure you get the destination
    $tours = Tour::where('destination_id', $id)->get();

    return view('Destination.show', compact('destination', 'tours'));
});

// Tour Routes
Route::get('/tour', function () {
    $tours = Tour::all();
    return view('tour.index', compact('tours'));
});

Route::get('/tour/{id}', function ($id) {
    $destination = Destination::findOrFail($id); // Ensure you get the destination
    $tours = Tour::where('destination_id', $id)->get();
    $blogs = Blog::latest()->take(3)->get();

    $categories = InformationCategory::all(); // Fetch all categories from the categories table

    return view('tour', compact('destination', 'tours', 'blogs','categories'));
});


Route::get('/package/{id}', function ($id) {
    $tours = Tour::findOrFail($id); // Ensure you get the destination
    $packages = Package::where('tour_id', $id)->get();
    $blogs = Blog::all();


    return view('package', compact('tours', 'packages', 'blogs'));
});

// Authenticated Routes
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('logs/{log}', [LogController::class, 'show'])->name('logs.show');


    Route::get('/topics', [TopicController::class, 'index'])->name('topics.index');

    // Route to show the form to create a new topic




    // Route to store a newly created topic
    Route::post('/topics', [TopicController::class, 'store'])->name('topics.store');

    // Route to show a specific topic along with its subtopics

    // Route to show the form for editing a topic
    Route::get('/topics/{topic}/edit', [TopicController::class, 'edit'])->name('topics.edit');

    // Route to update a specific topic
    Route::put('/topics/{topic}', [TopicController::class, 'update'])->name('topics.update');



    // Route to delete a specific topic
    Route::delete('/topics/{topic}', [TopicController::class, 'destroy'])->name('topics.destroy');

    Route::get('topics/create', [TopicController::class, 'create'])->name('topics.create');

    Route::get('subtopics', [SubtopicController::class, 'index'])->name('subtopics.index');
    Route::get('subtopics/create', [SubtopicController::class, 'create'])->name('subtopics.create');
    Route::post('subtopics', [SubtopicController::class, 'store'])->name('subtopics.store');
    Route::get('subtopics/{subtopic}/edit', [SubtopicController::class, 'edit'])->name('subtopics.edit');
    Route::put('subtopics/{subtopic}', [SubtopicController::class, 'update'])->name('subtopics.update');
    Route::delete('subtopics/{subtopic}', [SubtopicController::class, 'destroy'])->name('subtopics.destroy');




    Route::get('/logs', [LogController::class, 'viewLogs'])->name('logs.index');
    Route::resource('users', UserController::class);
    Route::get('/users/export-excel', [UserController::class, 'exportExcel'])->name('users.export');
    Route::get('/users/print-pdf', [UserController::class, 'printPdf'])->name('users.print.pdf');

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');








});

require __DIR__ . '/auth.php';

