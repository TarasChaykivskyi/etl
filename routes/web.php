<?php

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
    return view('pages/home');
});

Route::view('electrical-products', 'pages/electrical-products');
Route::view('electrical-laboratory-to-1000-v', 'pages/electrical-laboratory-to-1000-in');
Route::view('certificate', 'pages/certificate');
Route::view('measurement-resistance-insulation', 'pages/measurement-resistance-insulation');
Route::view('measurement-resistance-loop-phase-zero', 'pages/measurement-resistance-loop-phase-zero');
Route::view('measurement-resistance-circuit-grounding-mounting', 'pages/measurement-resistance-circuit-grounding-mounting');
Route::view('technical-report', 'pages/technical-report');
Route::view('certificate-of-conformity', 'pages/certificate-of-conformity');
Route::view('certificate-of-checking-devices', 'pages/certificate-of-checking-devices');
Route::view('complex-transformer-substations', 'pages/complex-transformer-substations');

