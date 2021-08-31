<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\SkillController;
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


// Route pour la page pricipal

Route::get('/', [HomeController::class, 'index'])->name('index');

// Routes pour toute les create

Route::get('/abouts/create', [AboutController::class, 'createAbout'])->name('createAbout');
Route::get('/contacts/create', [ContactController::class, 'createContact'])->name('createContact');
Route::get('/portfolios/create', [PortfolioController::class, 'createPorfolio'])->name('createPortfolio');
Route::get('/skills/create', [SkillController::class, 'createSkill'])->name('createSkill');

// Routes pour toute les Edits

Route::get('/abouts/{id}/edit', [AboutController::class, 'editAbout'])->name('editAbout');
Route::get('/contacts/{id}/edit', [ContactController::class, 'editContact'])->name('editContact');
Route::get('/portfolios/{id}/edit', [PortfolioController::class, 'editPorfolio'])->name('editPortfolio');
Route::get('/skills/{id}/edit', [SkillController::class, 'editSkill'])->name('editSkill');


// Route  pour les Updates

Route::put('/abouts/{id}/update', [AboutController::class, 'updateAbout'])->name('updateAbout');
Route::put('/contacts/{id}/update', [ContactController::class, 'updateContact'])->name('updateContact');
Route::put('/protfolio/{id}/update', [PortfolioController::class, 'updatePortfolio'])->name('updatePortfolio');
Route::put('/skills/{id}/update', [SkillController::class, 'updateSkill'])->name('updateSkill');
// Route pour tout les show 

Route::get('/abouts/{id}/show', [AboutController::class, 'showAbout'])->name('showAbout ');
Route::get('/contacts/{id}/show', [ContactController::class, 'showContact'])->name('showContact ');
Route::get('/portfolios/{id}/show', [PortfolioController::class, 'showPortfolio'])->name('showPortfolio ');
Route::get('/skills/{id}/show', [SkillController::class, 'showSkill'])->name('showSkill ');

// Route pour les Store

Route::post('/abouts', [AboutController::class, 'storeAbout'])->name('storeAbout');
Route::post('/contacts', [ContactController::class, 'storeContact'])->name('storeContact');
Route::post('/portfolios', [PortfolioController::class, 'storePortfolio'])->name('storePortfolio');
Route::post('/skills', [SkillController::class, 'storeSkill'])->name('storeSkill');

// Route pour function delete delete 

Route::delete('/abouts/{id}/delete', [AboutController::class, 'destroyAbout'])->name('deleteAbout');
Route::delete('/contacts/{id}/delete', [ContactController::class, 'destroyContact'])->name('deleteContact');
Route::delete('/portfolios/{id}/delete', [PortfolioController::class, 'destroyPortfolio'])->name('deletePortfolio');
Route::delete('/skills/{id}/delete', [SkillController::class, 'destroySkill'])->name('deleteSkill');

