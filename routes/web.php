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

// STAGES
// List with all internships
Route::get('/stages', 'InternshipController@index');
// List with all internships based on search
Route::post('/search', 'InternshipController@search');
<<<<<<< HEAD

// List after filter
Route::get('stages/filter/{filter}', 'InternshipController@filter');

||||||| merged common ancestors

=======
>>>>>>> 3316d2fecb07618a3cb670a4ebc2eaad4794eb08
// Show detail page of an internship
Route::get('/stages/{id}', 'InternshipController@details');
// Internship aanmaken door bedrijven
Route::get('/stageAanmaken', 'InternshipController@create');
// Versturen van data ingegeven bij het aanmaken van een intership door middel van post
Route::post('/stages', 'InternshipController@store');

// BEDRIJVEN
// List with all companies
Route::get('/bedrijven', 'CompanyController@index');
// Show detail page of a company
Route::get('/bedrijven/{id}', 'CompanyController@details');
// Company register
Route::get('/bedrijf/register', 'CompanyController@register');
Route::post('/bedrijf/register', 'CompanyController@handleRegister');
// Company login
// Indien je return route(''); wilt doen moet je de route een naam geven anders herkent hij deze niet
Route::get('/bedrijf/login', 'CompanyController@login')->name('bedrijfslogin');
Route::post('/bedrijf/login', 'CompanyController@handleLogin');
// Company profile
Route::get('/bedrijfsProfiel', 'CompanyController@profile');
// Edit company profile
Route::get('/bedrijfsProfiel/instellingen', 'CompanyController@settings');
Route::post('/bedrijfsProfiel/instellingen', 'CompanyController@change');
// Company internships
Route::get('/bedrijfsProfiel/mijnStages/{company}', 'CompanyController@internships');

// STUDENTEN
// Student register
Route::get('/student/register', 'StudentController@register');
Route::post('/student/register', 'StudentController@handleRegister');
// Student login
Route::get('/student/login', 'StudentController@login')->name('studentlogin');
Route::post('/student/login', 'StudentController@handleLogin');
// Student profile
// Check of de gebruiker wel ingelogd is
Route::get('/mijnProfiel', 'StudentController@profile')->middleware('auth');
// Edit student profile
// Check of de gebruiker wel ingelogd is
Route::get('/mijnProfiel/instellingen', 'StudentController@settings')->middleware('auth');
Route::post('/mijnProfiel/instellingen', 'StudentController@change');

// SOLLICITATIES
// internship_id halen uit de route van stage waarop de student solliciteert
Route::get('/mijnProfiel/mijnSollicitaties/{internship}', 'ApplyController@store');
// Tonen van alle stages waarop je al gesolliciteerd hebt
Route::get('/mijnProfiel/mijnSollicitaties', 'ApplyController@index');

// REVIEWS
// Company reviews
Route::get('/bedrijfsReviews', 'CompanyController@reviews');
// Review posten
Route::get('/schrijfReview', 'CompanyController@makeReview');
Route::post('/schrijfReview', 'CompanyController@handleMakeReview');

// LOGOUT
// Student and company logout
Route::get('/logout', 'HomeController@logout');
