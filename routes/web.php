<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\Admin\TeacherController;


use App\Models\News;
use App\Models\Event;
use App\Models\Video;
use App\Models\Teacher;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

//show all webpage to website

Route::get('/about-us', function () {
    return view('website.about-us');
})->name('about-us');

Route::get('/cbsemandate', function () {
    return view('website.cbsemandate');
})->name('cbsemandate');


Route::get('/library', function () {
    return view('website.library');
})->name('library');

Route::get('/computerlab', function () {
    return view('website.computerlab');
})->name('computerlab');

Route::get('/chemistery', function () {
    return view('website.chemistery');
})->name('chemistery');

Route::get('/physics', function () {
    return view('website.physics');
})->name('physics');

Route::get('/biology', function () {
    return view('website.biology');
})->name('biology');

Route::get('/math', function () {
    return view('website.math');
})->name('math');

Route::get('/fee-structure', function () {
    return view('website.fee-structure');
})->name('fee-structure');

Route::get('/booklist', function () {
    return view('website.booklist');
})->name('booklist');

Route::get('/transport-rules', function () {
    return view('website.transport-rules');
})->name('transport-rules');


Route::get('/dance-music', function () {
    return view('website.dance-music');
})->name('dance-music');

Route::get('/transport', function () {
    return view('website.transport');
})->name('transport');

Route::get('/principal-message', function () {
    return view('website.principal-message');
})->name('principal-message');

Route::get('/president-message', function () {
    return view('website.president-message');
})->name('president-message');





// Home page (News + Events+video)
Route::get('/', function () {
    $latestNews = News::latest()->take(3)->get();
    $events = Event::latest()->take(4)->get();
    $videos = Video::latest()->take(3)->get(); // ✅ ADD THIS

    return view('website.home', compact('latestNews', 'events', 'videos'));
})->name('home');


//Show Teacher on website
Route::get('/teachers', function () {
    $teachers = Teacher::orderBy('type')->get();
    return view('website.teachers', compact('teachers'));
})->name('teachers.public');



//show all videos on home page

Route::get('/videos', function () {
    $videos = Video::latest()->paginate(9); // pagination for many videos
    return view('website.videos', compact('videos'));
})->name('videos.public');


// show all events onpage

Route::get('/events', [EventController::class, 'publicIndex'])
    ->name('events.public');


// Public news page
Route::get('/news', function () {
    $news = News::latest()->paginate(10);
    return view('website.news', compact('news'));
})->name('public.news');

//public Events
Route::get('/events/{event}', function (Event $event) {
    return view('website.event-detail', compact('event'));
})->name('events.show');


// Edit event
Route::get('/dashboard/events/{event}/edit', [EventController::class, 'edit'])
    ->name('events.edit');

// Update event
Route::put('/dashboard/events/{event}', [EventController::class, 'update'])
    ->name('events.update');


Route::get('/events/{event}', [EventController::class, 'show'])
    ->name('events.show');
// Public gallery
Route::get('/gallery', [GalleryController::class, 'index'])
    ->name('gallery');

// Admission enquiry form submit
Route::post('/admission-enquiry', [AdmissionController::class, 'store'])
    ->name('admission.store');

// for vidoes

Route::get('/videos', function () {
    return view('videos', [
        'videos' => \App\Models\Video::latest()->get()
    ]);
});
/*
|--------------------------------------------------------------------------
| Authenticated Routes (ALL logged-in users)
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->group(function () {

    // Dashboard (shared)
    Route::get('/dashboard', function () {
        return view('dashboard.index');
    })->name('dashboard');

    // Profile
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

Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/videos', [VideoController::class, 'index'])->name('videos.index');
    Route::post('/videos', [VideoController::class, 'store'])->name('videos.store');
    Route::delete('/videos/{video}', [VideoController::class, 'destroy'])->name('videos.destroy');
});

Route::middleware(['auth', 'role:admin'])->group(function () {

    // Admissions
    Route::get('/dashboard/admissions', [AdmissionController::class, 'index'])
        ->name('admissions.index');

    Route::patch(
        '/dashboard/admissions/{admission}/status',
        [AdmissionController::class, 'updateStatus']
    )->name('admissions.status');

    Route::delete(
        '/dashboard/admissions/{admission}',
        [AdmissionController::class, 'destroy']
    )->name('admissions.destroy');

    // News
    Route::get('/dashboard/news', [NewsController::class, 'index'])
        ->name('news.index');

    Route::get('/dashboard/news/create', [NewsController::class, 'create'])
        ->name('news.create');

    Route::post('/dashboard/news', [NewsController::class, 'store'])
        ->name('news.store');

    Route::delete('/dashboard/news/{news}', [NewsController::class, 'destroy'])
        ->name('news.destroy');

    // Events / Achievements
    Route::get('/dashboard/events', [EventController::class, 'index'])
        ->name('events.index');

    Route::post('/dashboard/events', [EventController::class, 'store'])
        ->name('events.store');

    Route::delete('/dashboard/events/{event}', [EventController::class, 'destroy'])
        ->name('events.destroy');
});


/*
|--------------------------------------------------------------------------
| Staff Routes (Read-only)
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'role:staff'])->group(function () {

    Route::get('/dashboard/staff', function () {
        return view('dashboard.staff');
    })->name('staff.dashboard');

    Route::get(
        '/dashboard/staff/admissions',
        [AdmissionController::class, 'index']
    )->name('staff.admissions.index');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/dashboard/teachers', [TeacherController::class, 'index'])
        ->name('teachers.index');

    Route::get('/dashboard/teachers/create', [TeacherController::class, 'create'])
        ->name('teachers.create');

    Route::post('/dashboard/teachers', [TeacherController::class, 'store'])
        ->name('teachers.store');

    Route::get(
        '/dashboard/teachers/{teacher}/edit',
        [TeacherController::class, 'edit']
    )
        ->name('teachers.edit');

    Route::put(
        '/dashboard/teachers/{teacher}',
        [TeacherController::class, 'update']
    )
        ->name('teachers.update');

    Route::delete(
        '/dashboard/teachers/{teacher}',
        [TeacherController::class, 'destroy']
    )
        ->name('teachers.destroy');

    Route::get(
        '/dashboard/teachers/{teacher}/edit',
        [TeacherController::class, 'edit']
    )
        ->name('teachers.edit');

    Route::put(
        '/dashboard/teachers/{teacher}',
        [TeacherController::class, 'update']
    )
        ->name('teachers.update');
});



require __DIR__ . '/auth.php';
