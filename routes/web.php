<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\WorkController;
use App\Http\Controllers\PublicationsController;
use App\Http\Controllers\skillsController;
use App\Http\Controllers\AchievementsController;
use App\Models\{User,Education};

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {

    $user = User::findOrFail(1);
    //  dd($user);
    return view('dashboard')->with(['user' => $user]);
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';



Route::middleware('auth')->group(function () {
    //Add content routes
    Route::get('add-education', [EducationController::class, 'create'])
                ->name('education.add');

    Route::get('add-work', [WorkController::class, 'create'])
                ->name('work.add');

    Route::get('add-skills', [SkillsController::class, 'create'])
                ->name('skills.add');

    Route::get('add-achievements', [achievementsController::class, 'create'])
                ->name('achievements.add');

    Route::get('add-publications', [PublicationsController::class, 'create'])
                ->name('publications.add');

    //saving content routes

    Route::post('save-education', [EducationController::class, 'store'])
                ->name('education.save');
    
});
