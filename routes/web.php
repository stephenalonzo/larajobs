<?php

use App\Http\Controllers\VacancyController;
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

// All Vacancies
Route::get('/', [VacancyController::class, 'index']);

// Show Create Vacancy Form
Route::get('/vacancies/create', [VacancyController::class, 'create']);

// Create Vacancy
Route::post('/vacancies', [VacancyController::class, 'store']);

// Edit Vacancy
Route::get('/vacancies/{vacancy}/edit', [VacancyController::class, 'edit']);

// Update Vacancy
Route::put('/vacancies/{vacancy}', [VacancyController::class, 'update']);

// Single Vacancy
Route::get('/vacancies/{vacancy}', [VacancyController::class, 'show']);