<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{EducationController, WorkController, 
    PublicationsController, SkillsController, AchievementsController};
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
    Route::resources([
        'work' => WorkController::class,
        'publication' => PublicationsController::class,
        'skill' => SkillsController::class,
        'achievement' => AchievementsController::class,
        'education' => EducationController::class,
    ]);

    Route::get('/settings', function(){
        return view('settings');
    })->name('settings');
    
});
