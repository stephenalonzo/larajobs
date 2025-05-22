<?php

use App\Http\Controllers\UserController;
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

// Delete Vacancy
Route::get('/vacancies/{vacancy}/delete', [VacancyController::class, 'destroy']);

// Manage Vacancies
Route::get('/vacancies/manage', [VacancyController::class, 'manage']);

// Show Login Form
Route::get('/login', [UserController::class, 'index']);

// Show Registration Form
Route::get('/register', [UserController::class, 'create']);

// Register User
Route::post('/users', [UserController::class, 'store']);

// Single Vacancy
Route::get('/vacancies/{vacancy}', [VacancyController::class, 'show']);

// Logout User
Route::post('/logout', [UserController::class, 'destroy']);

// Login User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);