<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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
Route::get('/login',[AuthController::class,'index'])->name('login');
Route::post('/login',[AuthController::class,'login'])->name('login.proceed');
Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('aboutus',[HomeController::class,'indexab'])->name('about-us');
Route::get('partners', function () { return view('partaners');})->name('partaners');
Route::get('carrer', function () { return view('carrer');})->name('carrer');
Route::get('service',[HomeController::class,'indexse'] )->name('service');
Route::post('/contactus', [GeneralController::class, 'storecont'])->name('contactus.store');
Route::get('/products/{id}', [GeneralController::class, 'show'])->name('products.show');
Route::get('contactus', function () { return view('contactus');})->name('contactus');

Route::middleware(['auth'])->group(function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');
    Route::get('/admin/general', [GeneralController::class, 'index'])->name('admin.layout.general.index');
    Route::post('/admin/general', [GeneralController::class, 'store'])->name('admin.general.store');
    Route::delete('/admin/general/{id}', [GeneralController::class, 'destroy'])->name('admin.layout.general.destroy');
    Route::put('/admin/general/{id}', [GeneralController::class, 'update'])->name('admin.layout.general.update');
    Route::get('/admin/bannerimg', [GeneralController::class, 'bannerindex'])->name('admin.layout.bannerimg.index');
    Route::post('/admin/bannerimg', [GeneralController::class, 'storev'])->name('admin.bannerimg.store');
    Route::delete('/admin/bannerimg/{id}', [GeneralController::class, 'destroyv'])->name('admin.layout.bannerimg.destroy');
    Route::get('/admin/testimonial', [GeneralController::class, 'testimonialindex'])->name('admin.layout.testimonial.index');
    Route::post('/admin/testimonial', [GeneralController::class, 'storetest'])->name('admin.testimonial.store');
    Route::delete('/admin/testimonial/{id}', [GeneralController::class, 'destroytest'])->name('admin.layout.testimonial.destroy');
    Route::put('/admin/testimonial/{id}', [GeneralController::class, 'updatetest'])->name('admin.layout.testimonial.update');
    Route::get('/admin/showcase', [GeneralController::class, 'showcaselindex'])->name('admin.layout.showcase.index');
    Route::post('/admin/showcase', [GeneralController::class, 'storeshowcase'])->name('admin.showcase.store');
    Route::delete('/admin/showcase/{id}', [GeneralController::class, 'destroyworkcase'])->name('admin.layout.showcase.destroy');
    Route::get('/admin/workinwith', [GeneralController::class, 'workwindex'])->name('admin.layout.workinwith.index');
    Route::post('/admin/workinwith', [GeneralController::class, 'workwstore'])->name('admin.workinwith.store');
    Route::delete('/admin/workinwith/{id}', [GeneralController::class, 'destroyworkw'])->name('admin.layout.workinwith.destroy');
    Route::get('/admin/aboutuss', [GeneralController::class, 'indexabout'])->name('admin.layout.aboutuss.index');
    Route::post('/admin/aboutuss', [GeneralController::class, 'storeabout'])->name('admin.aboutuss.store');
    Route::delete('/admin/aboutuss/{id}', [GeneralController::class, 'destroyabt'])->name('admin.layout.aboutuss.destroy');
    Route::get('/admin/aboutust', [GeneralController::class, 'indexabou'])->name('admin.layout.aboutust.index');
    Route::post('/admin/aboutust', [GeneralController::class, 'storeabou'])->name('admin.aboutust.store');
    Route::delete('/admin/aboutust/{id}', [GeneralController::class, 'destroyab'])->name('admin.layout.aboutust.destroy');
    Route::get('/admin/cont', [GeneralController::class, 'indexcont'])->name('admin.layout.cont.index');
    Route::get('/admin/prodc', [GeneralController::class, 'indexprodc'])->name('admin.layout.prodc.index');
    Route::post('/admin/prodc', [GeneralController::class, 'storeprod'])->name('admin.prodc.store');
    Route::delete('/admin/prodc/{id}', [GeneralController::class, 'destroypro'])->name('admin.layout.prodc.destroy');

    



    /* Route::get('/logout',[AuthController::class],'logout'); */
    
  
});
