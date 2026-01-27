<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\Admin\AchievementController;

use App\Models\News;
use App\Models\Event;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

// Home Page
Route::get('/', function () {
    $latestNews   = News::latest()->take(3)->get();
    $latestEvents = Event::orderBy('event_date', 'desc')->take(4)->get();

    return view('website.home', compact('latestNews', 'latestEvents'));
})->name('home');

// Public News
Route::get('/news', function () {
    $news = News::latest()->paginate(10);
    return view('website.news', compact('news'));
})->name('public.news');

// Public Events
Route::get('/events', function () {
    $events = Event::orderBy('event_date', 'desc')->paginate(12);
    return view('website.events.index', compact('events'));
})->name('events.public');

// Event Detail
Route::get('/events/{event}', [EventController::class, 'show'])
    ->name('events.show');

// Gallery
Route::get('/gallery', [GalleryController::class, 'index'])
    ->name('gallery');

// Admission Enquiry
Route::post('/admission-enquiry', [AdmissionController::class, 'store'])
    ->name('admission.store');


/*
|--------------------------------------------------------------------------
| Authenticated User Routes
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard.index');
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');
});


/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'role:admin'])->prefix('dashboard')->group(function () {

    // Admissions
    Route::get('/admissions', [AdmissionController::class, 'index'])
        ->name('admissions.index');

    Route::patch('/admissions/{admission}/status',
        [AdmissionController::class, 'updateStatus']
    )->name('admissions.status');

    Route::delete('/admissions/{admission}',
        [AdmissionController::class, 'destroy']
    )->name('admissions.destroy');


    // News
    Route::get('/news', [NewsController::class, 'index'])
        ->name('news.index');

    Route::get('/news/create', [NewsController::class, 'create'])
        ->name('news.create');

    Route::post('/news', [NewsController::class, 'store'])
        ->name('news.store');

    Route::delete('/news/{news}', [NewsController::class, 'destroy'])
        ->name('news.destroy');


    // Events
    Route::get('/events', [EventController::class, 'index'])
        ->name('events.index');

    Route::post('/events', [EventController::class, 'store'])
        ->name('events.store');

    Route::get('/events/{event}/edit', [EventController::class, 'edit'])
        ->name('events.edit');

    Route::put('/events/{event}', [EventController::class, 'update'])
        ->name('events.update');

    Route::delete('/events/{event}', [EventController::class, 'destroy'])
        ->name('events.destroy');


    // ✅ Achievements (CLEAN & CONSISTENT)
    Route::resource('achievements', AchievementController::class)
        ->only(['index', 'create', 'store', 'destroy']);
});


/*
|--------------------------------------------------------------------------
| Staff Routes (Read-only)
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'role:staff'])->prefix('dashboard/staff')->group(function () {

    Route::get('/', function () {
        return view('dashboard.staff');
    })->name('staff.dashboard');

    Route::get('/admissions', [AdmissionController::class, 'index'])
        ->name('staff.admissions.index');
});


require __DIR__ . '/auth.php';
