<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AgentAddToolController;
use App\Http\Controllers\ToolsController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\AgentTableController;
use App\Http\Controllers\AgentChartsController;
use App\Http\Controllers\AgentFormController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\MaidController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'homepage']); 
 
Route::get('/home', [HomeController::class, 'index'])->middleware('auth')->name('home');

Route::get('/home/payment', [PaymentController::class, 'payment'])->middleware('auth')->name('home.payment');
Route::get('/home/tables', [AgentTableController::class, 'tables'])->middleware('auth')->name('agent.tables');
Route::get('/home/charts', [AgentChartsController::class, 'chart'])->middleware('auth')->name('agent.charts');
Route::get('/home/form', [AgentFormController::class, 'form'])->middleware('auth')->name('agent.agentform');



/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');*/

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
Route::get('/addtools', [AgentAddToolController::class, 'addtools'])->middleware('auth');
Route::post('/add_post', [AgentAddToolController::class, 'add_post'])->middleware('auth');
Route::get('/show_post', [AgentAddToolController::class, 'show_post'])->middleware('auth');
Route::get('/tools', [ToolsController::class, 'tools'])->middleware('auth');
/***Services */
Route::get('/show_service', [ServiceController::class, 'show_service'])->middleware('auth');
Route::post('/add_spost', [ServiceController::class, 'add_spost'])->middleware('auth');
Route::get('/add_service', [ServiceController::class, 'add_service'])->middleware('auth');
/***Maid *** */
Route::get('/show_maid', [MaidController::class, 'show_maid'])->middleware('auth');
Route::post('/add_mpost', [MaidController::class, 'add_mpost'])->middleware('auth');
Route::get('/add_maid', [MaidController::class, 'add_maid'])->middleware('auth');