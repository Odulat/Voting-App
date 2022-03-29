<?php

use App\Http\Controllers\QuestionController;
use App\Http\Controllers\QuizController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::group(['prefix' => 'quizzes'], function () {
    Route::get('', [ QuizController::class, 'index' ])
        ->name('quizzes.index')
    ;
    Route::post('', [ QuizController::class, 'store' ])
        ->name('quizzes.store')
    ;

    Route::group(['prefix' => '{id}'], function () {
        Route::group(['prefix' => 'questions'], function () {
            Route::get('', [ QuestionController::class, 'index' ])
                ->name('questions.index')
            ;
            Route::post('', [ QuestionController::class, 'store' ])
                ->name('questions.store')
            ;
            Route::get('create', [ QuestionController::class, 'create' ])
                ->name('questions.create')
            ;
            Route::get('{question_id}', [ QuestionController::class, 'show' ])
                ->name('questions.show')
            ;
        });
    });
});

require __DIR__.'/auth.php';
