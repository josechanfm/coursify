<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Illuminate\Http\Request;
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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('offers', [App\Http\Controllers\OfferController::class,'index']);
Route::get('application/{offer}', [App\Http\Controllers\ApplicationController::class,'form'])->name('application.form');
Route::post('application/checker', [App\Http\Controllers\ApplicationController::class,'checker'])->name('application.checker');
Route::post('application', [App\Http\Controllers\ApplicationController::class,'submit'])->name('application.submit');
Route::get('id/checker', [App\Http\Controllers\ApplicationController::class,'checker'])->name('application.checker');

Route::prefix('api')->group(function () {
    Route::get('id_validator', [App\Http\Controllers\Api\IdValidatorController::class, 'verifyId']);
    Route::get('get_check_digit', [App\Http\Controllers\Api\IdValidatorController::class, 'getCheckDigit']);
});


Route::prefix('admin')->group(function () {
    Route::get('login', [App\Http\Controllers\Admin\AuthController::class, 'showLoginForm'])->name('admin.login');
    Route::post('login', [App\Http\Controllers\Admin\AuthController::class, 'login']);
    Route::post('logout', [App\Http\Controllers\Admin\AuthController::class, 'logout'])->name('admin.logout');
});

Route::middleware([
    'auth:admin',
    'verified',
])->prefix('admin')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard');
    Route::resource('areas', App\Http\Controllers\Admin\AreaController::class)->names('admin.areas');
    Route::get('/{area}/courses', [App\Http\Controllers\Admin\CourseController::class,'index'])->name('admin.area.courses');
    Route::resource('courses', App\Http\Controllers\Admin\CourseController::class)->names('admin.courses');
    Route::get('/{course}/offers', [App\Http\Controllers\Admin\OfferController::class,'index'])->name('admin.course.offers');
    Route::get('/offers/current', [App\Http\Controllers\Admin\OfferController::class,'current'])->name('admin.offers.current');
    Route::resource('offers', App\Http\Controllers\Admin\OfferController::class)->names('admin.offers');
    Route::get('{offer}/applications', [App\Http\Controllers\Admin\ApplicationController::class,'index'])->name('admin.offer.applications');
    Route::get('/applications/current', [App\Http\Controllers\Admin\ApplicationController::class,'current'])->name('admin.applications.current');
    Route::resource('applications', App\Http\Controllers\Admin\ApplicationController::class)->names('admin.applications');
    Route::post('application/{application}/change_status', [App\Http\Controllers\Admin\ApplicationController::class,'changeStatus'])->name('admin.application.changeStatus');
    Route::resource('payments', App\Http\Controllers\Admin\PaymentController::class)->names('admin.payments');
    Route::get('{offer}/klass', [App\Http\Controllers\Admin\KlassController::class,'dashboard'])->name('admin.klass.dashboard');
    Route::get('{offer}/klass/{lesson}/attendances', [App\Http\Controllers\Admin\KlassController::class,'attendance'])->name('admin.klass.attendances');
    Route::post('klass/attendance/attend', [App\Http\Controllers\Admin\KlassController::class,'attend'])->name('admin.klass.attendance.attend');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->prefix('member')->group(function () {
    Route::get('/', [App\Http\Controllers\Member\DashboardController::class,'index'])->name('member.dashboard');    

});


Route::get('/manual', function (Request $request) {
    $manual=App\Models\Manual::where('route',$request->route)->first();
    if(empty($manual)){
        $manual=App\Models\Manual::where('route','default')->first();
    }else if($manual->reroute){
        $manual=App\Models\Manual::where('route',$manual->reroute)->first();
    }
    return Inertia::render('Manual', [
        'manual' => $manual,
    ]);
})->name('manual');
