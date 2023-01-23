<?php

use App\Http\Controllers\AbController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AchController;
use App\Http\Controllers\AchievementController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AlasanController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CounterController;
use App\Http\Controllers\EvController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\FooterController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IntroController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\MentorController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\RecomendedController;
use App\Http\Controllers\SampleController;
use App\Http\Controllers\SoftController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\TachievementController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\VisiController;
use App\Models\Tachievement;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [LandingController::class, 'index'])->name('index');

Route::get('/login', [AuthController::class, 'index'])->name('index')->middleware('guest');
Route::post('/login', [AuthController::class, 'login'])->name('login');

// sample
Route::resource('/sample', SampleController::class);

// route semua landing
Route::resource('/events', EvController::class);
Route::resource('/abouts', AbController::class);
Route::resource('/achievements', AchController::class);

Route::middleware('auth')->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('dashboard');

    // HOME START

    // resource hero
    Route::resource('/dashboard/heroes', HeroController::class)->names([
        'index' => 'hero',
    ]);

    // Route::get('/back', function () {
    //     return redirect()->route('home');
    // });

    // resource counter
    Route::resource('/dashboard/counters', CounterController::class)->names([
        'index' => 'counter',
    ]);

    // resource testimoni
    Route::resource('/dashboard/testimonis', TestimoniController::class)->names([
        'index' => 'testimoni',
    ]);

    // resource contact
    Route::resource('/dashboard/contacts', ContactController::class)->names([
        'index' => 'contact',
    ]);

    // HOME END

    // ABOUT START

    // resource intro
    Route::resource('/dashboard/intros', IntroController::class)->names([
        'index' => 'intro',
    ]);

    // resource visimisi
    Route::resource('/dashboard/visis', VisiController::class)->names([
        'index' => 'visi',
    ]);

    // resource alasan
    Route::resource('/dashboard/alasans', AlasanController::class)->names([
        'index' => 'alasan',
    ]);

    // resource team
    Route::resource('/dashboard/teams', TeamController::class)->names([
        'index' => 'team',
    ]);

    // resource question
    Route::resource('/dashboard/questions', QuestionController::class)->names([
        'index' => 'question',
    ]);

    Route::get('/dashboard/questions/{id}/restore', [QuestionController::class, 'restore'])->name('restore');
    Route::resource('/dashboard/softs', SoftController::class)->names([
        'index' => 'soft',
    ]);

    // ABOUT END

    // EVENT START

    // resource event
    Route::resource('/dashboard/events', EventController::class)->names([
        'index' => 'event',
    ]);

    // resource mentor
    Route::resource('/dashboard/mentors', MentorController::class)->names([
        'index' => 'mentor',
    ]);

    // resource recomended
    Route::resource('/dashboard/recomendeds', RecomendedController::class)->names([
        'index' => 'recomended',
    ]);

    // resource status
    Route::resource('/dashboard/statuses', StatusController::class)->names([
        'index' => 'status',
    ]);

    // resource category
    Route::resource('/dashboard/categories', CategoryController::class)->names([
        'index' => 'category',
    ]);

    // EVENT END

    // ACHIEVEMENT START

    // resource achievement
    Route::resource('/dashboard/achievements', AchievementController::class)->names([
        'index' => 'achievement',
    ]);

    // resource tachievement
    Route::resource('/dashboard/tachievements', TachievementController::class)->names([
        'index' => 'tachievement',
    ]);

    // resource peserta
    Route::resource('/dashboard/pesertas', PesertaController::class)->names([
        'index' => 'peserta',
    ]);

    // ACHIEVEMENT END


    // HEADER FOOTER START

    // resource header
    Route::resource('/dashboard/headers', HeaderController::class)->names([
        'index' => 'header',
    ]);

    // resource footer
    Route::resource('/dashboard/footers', FooterController::class)->names([
        'index' => 'footer',
    ]);

    // HEADER FOOTER END

    Route::get('/about', [AboutController::class, 'index'])->name('index');

    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
});
