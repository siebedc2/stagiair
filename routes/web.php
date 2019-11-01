<?php

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

// DEFENITIONS
// GET -> show
// POST -> store
// DELETE -> destroy
// UPDATE/PATCH -> update

// Home
Route::get('/', 'HomeController@index');

// List with all internships
Route::get('/stages', 'InternshipController@index');

// Show detail page of an internship
Route::get('/stages/{id}', 'InternshipController@details');

// Internship aanmaken door bedrijven
Route::get('/aanmakenStage', 'InternshipController@create');

// Versturen van data ingegeven bij het aanmaken van een intership door middel van post
Route::post('/stages', 'InternshipController@store');

// List with all companies
Route::get('/bedrijven', 'CompanyController@index');

// Show detail page of a company
Route::get('/bedrijven/{id}', 'CompanyController@details');

// Student register
Route::get('/student/register', 'StudentController@register');
Route::post('/student/register', 'StudentController@handleRegister');

// Student login
Route::get('/student/login', 'StudentController@login');
Route::post('/student/login', 'StudentController@handleLogin');

// Student profile
Route::get('/mijnProfiel', 'StudentController@profile');

// Edit student profile
Route::get('/mijnProfiel/instellingen', 'StudentController@settings');
Route::post('/mijnProfiel/instellingen', 'StudentController@change');

// Student internships
Route::get('/mijnProfiel/mijnStages', 'StudentController@internships');

// Company register
Route::get('/bedrijf/register', 'CompanyController@register');
Route::post('/bedrijf/register', 'CompanyController@handleRegister');

// Company login
Route::get('/bedrijf/login', 'CompanyController@login');
Route::post('/bedrijf/login', 'CompanyController@handleLogin');

// Company profile
Route::get('/bedrijfsProfiel', 'CompanyController@profile');

// Edit company profile
Route::get('/bedrijfsProfiel/instellingen', 'CompanyController@settings');
Route::post('/bedrijfsProfiel/instellingen', 'CompanyController@change');

// Company internships
Route::get('/bedrijfsProfiel/mijnStages', 'CompanyController@internships');

// Student and company logout
Route::get('/logout', 'HomeController@logout');
