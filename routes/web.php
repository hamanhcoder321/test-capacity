<?php
// routes/web.php

use App\Http\Controllers\FormController;

Route::get('/form', [FormController::class, 'showForm'])->name('form.show');
Route::post('/form', [FormController::class, 'submitForm'])->name('form.submit');

Route::get('/result', [FormController::class, 'showResult'])->name('form.result');
Route::get('/form/reset', [FormController::class, 'resetForm'])->name('form.reset');
