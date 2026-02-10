<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\Admin\TeacherController;


use App\Models\News;
use App\Models\Video;
use App\Models\Teacher;

/*
|--------------------------------------------------------------------------
| Static Public Pages
|--------------------------------------------------------------------------
*/

Route::view('/about-us', 'website.about-us')->name('about-us');
Route::view('/cbsemandate', 'website.cbsemandate')->name('cbsemandate');
Route::view('/library', 'website.library')->name('library');
Route::view('/computerlab', 'website.computerlab')->name('computerlab');
Route::view('/chemistery', 'website.chemistery')->name('chemistery');
Route::view('/physics', 'website.physics')->name('physics');
Route::view('/biology', 'website.biology')->name('biology');
Route::view('/math', 'website.math')->name('math');
Route::view('/fee-structure', 'website.fee-structure')->name('fee-structure');
Route::view('/booklist', 'website.booklist')->name('booklist');
Route::view('/transport-rules', 'website.transport-rules')->name('transport-rules');
Route::view('/dance-music', 'website.dance-music')->name('dance-music');
Route::view('/transport', 'website.transport')->name('transport');
Route::view('/principal-message', 'website.principal-message')->name('principal-message');
Route::view('/president-message', 'website.president-message')->name('president-message');

/*
|--------------------------------------------------------------------------
| Home Page
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

/*
|--------------------------------------------------------------------------
| Public Dynamic Pages
|--------------------------------------------------------------------------
*/

// Teachers (public)
Route::get('/teachers', function () {
    $teachers = Teacher::orderBy('type')->get();
    return view('website.teachers', compact('teachers'));
})->name('teachers.public');

// Videos (public)
Route::get('/videos', function () {
    $videos = Video::latest()->paginate(9);
    return view('website.videos', compact('videos'));
})->name('videos.public');

// Events (public list + filter)
Route::get('/events', [EventController::class, 'publicIndex'])
    ->name('events.public');

// Event detail
Route::get('/events/{event}', [EventController::class, 'show'])
    ->name('events.show');

// News (public)
Route::get('/news', function () {
    $news = News::latest()->paginate(10);
    return view('website.news', compact('news'));
})->name('public.news');

// Gallery
Route::get('/gallery', [GalleryController::class, 'index'])
    ->name('gallery');

// Admission enquiry
Route::post('/admission-enquiry', [AdmissionController::class, 'store'])
    ->name('admission.store');

/*
|--------------------------------------------------------------------------
| Authenticated User Routes
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', fn () => view('dashboard.index'))
        ->name('dashboard');

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

Route::middleware(['auth', 'role:admin'])->group(function () {

    // Videos
    Route::get('/admin/videos', [VideoController::class, 'index'])
        ->name('videos.index');

    Route::post('/admin/videos', [VideoController::class, 'store'])
        ->name('videos.store');

    Route::delete('/admin/videos/{video}', [VideoController::class, 'destroy'])
        ->name('videos.destroy');

    // Admissions
    Route::get('/dashboard/admissions', [AdmissionController::class, 'index'])
        ->name('admissions.index');

    Route::patch('/dashboard/admissions/{admission}/status', [AdmissionController::class, 'updateStatus'])
        ->name('admissions.status');

    Route::delete('/dashboard/admissions/{admission}', [AdmissionController::class, 'destroy'])
        ->name('admissions.destroy');

    // News
    Route::resource('/dashboard/news', NewsController::class)
        ->except(['show', 'edit', 'update']);

    // Events (admin)
    Route::resource('/dashboard/events', EventController::class)
        ->except(['show']);

    // Teachers (admin)
    Route::resource('/dashboard/teachers', TeacherController::class);
});

/*
|--------------------------------------------------------------------------
| Staff Routes
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'role:staff'])->group(function () {

    Route::get('/dashboard/staff', fn () => view('dashboard.staff'))
        ->name('staff.dashboard');

    Route::get('/dashboard/staff/admissions', [AdmissionController::class, 'index'])
        ->name('staff.admissions.index');
});

require __DIR__ . '/auth.php';