<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});

Route::get('/faq', function () {
    return view('website.faq');
});

Route::get('/opportunités', function () {
    return view('opportunities.show');
});

Route::get('/opportunités/détail', function () {
    return view('opportunities.details');
});

Route::get('/contact', function () {
    return view('website.contact');
});

Route::get('/propos', function () {
    return view('website.propos');
});

Route::get('/inscription', function () {
    return view('auth.inscription');
});

Route::get('/inscription/register-association', function () {
    return view('auth.register-association');
});

Route::get('/inscription/register-benevole', function () {
    return view('auth.register-benevole');
});

Route::get('/Bénévoles', function () {
    return view('bénévoles.benovolat');
});

Route::get('associations', function () {
    return view('associations.association');
});

Route::get('formations', function () {
    return view('formations.formation');
});

Route::get('guide-Juridique', function () {
    return view('loi.guide');
});

Route::get('guide-Juridique/Conditions-dutilisation', function () {
    return view('loi.Conditions_dutilisation');
});

Route::get('guide-Juridique/Politique-confidentialité', function () {
    return view('loi.Politique_confidentialité');
});