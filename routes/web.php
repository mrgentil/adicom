<?php

use App\Http\Controllers\FaqController;
use App\Http\Controllers\NewsletterController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use TCG\Voyager\Facades\Voyager;


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

//Route::get('/', function () {
//    return view('home');
//});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/adicom-academy', [App\Http\Controllers\ADICOMController::class, 'academie'])->name('adicom.academie');
Route::get('/adicom-awards', [App\Http\Controllers\ADICOMController::class, 'awards'])->name('adicom.awards');
Route::get('/adicom-forum', [App\Http\Controllers\ADICOMController::class, 'forum'])->name('adicom.forum');
Route::get('/adicom-4-good', [App\Http\Controllers\ADICOMController::class, 'good'])->name('adicom.good');
Route::get('/adicom-watch', [App\Http\Controllers\ADICOMController::class, 'watch'])->name('adicom.watch');
Route::resource('faqs', FaqController::class);
Route::get('/contact-us', [App\Http\Controllers\ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [App\Http\Controllers\ContactController::class, 'store'])->name('contact.store');
Route::get('/medias', [App\Http\Controllers\MediaController::class, 'index'])->name('media.index');
Route::get('/medias/{slug}', [App\Http\Controllers\MediaController::class, 'show'])->name('media.show');
Route::get('/booking', [App\Http\Controllers\BookingController::class, 'index'])->name('booking.index');
Route::get('/editions', [App\Http\Controllers\EditionController::class, 'index'])->name('edition.index');
Route::get('/editions/{slug}', [App\Http\Controllers\EditionController::class, 'show'])->name('edition.show');
Route::get('/speaker/{slug}', [App\Http\Controllers\SpeakerController::class, 'show'])->name('speaker.show');
Route::get('/speakers', [App\Http\Controllers\SpeakerController::class, 'index'])->name('speaker.index');
Route::get('/schedule', [App\Http\Controllers\ScheduleController::class, 'index'])->name('schedule.index');
Route::post('/medias/{id}/comment', [App\Http\Controllers\MediaController::class, 'storeComment'])->name('articles.comment.store');
Route::post('/subscribe', [NewsletterController::class, 'subscribe'])->name('subscribe');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
