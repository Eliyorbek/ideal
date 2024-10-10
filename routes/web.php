<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\CourseRegisterController;
use App\Http\Controllers\FrontControlller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubjectController;
use App\Models\CourseRegister;
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

Route::middleware('admin')->group(function(){
        Route::get('/admin' , function(){
            $title = 'Dashboard';
            $subtitle ='Dashboard';
            $all  = CourseRegister::where('status', 'active')->get();
            $matem = CourseRegister::whereHas('course', function($query){
                $query->where('name', 'matematika');
            })->where('status' , 'active')->get();
            
            $ona = CourseRegister::whereHas('course', function($query){
                $query->where('name', 'ona tili');
            })->where('status' , 'active')->get();
    
            $fizika = CourseRegister::whereHas('course', function($query){
                $query->where('name', 'fizika');
            })->where('status' , 'active')->get();
    
            $geografiya = CourseRegister::whereHas('course', function($query){
                $query->where('name', 'geografiya');
            })->where('status' , 'active')->get();
    
            $tarix = CourseRegister::whereHas('course', function($query){
                $query->where('name', 'tarix');
            })->where('status' , 'active')->get();
    
            $biologiya = CourseRegister::whereHas('course', function($query){
                $query->where('name', 'boiloogiya');
            })->where('status' , 'active')->get();
    
            $kimyo = CourseRegister::whereHas('course', function($query){
                $query->where('name', 'kimyo');
            })->where('status' , 'active')->get();
    
            $huquq = CourseRegister::whereHas('course', function($query){
                $query->where('name', 'huquq');
            })->where('status' , 'active')->get();
    
            $english = CourseRegister::whereHas('course', function($query){
                $query->where('name', 'ingliz tili');
            })->where('status' , 'active')->get();
            $rus = CourseRegister::whereHas('course', function($query){
                $query->where('name', 'rus tili');
            })->where('status' , 'active')->get();
            $arab = CourseRegister::whereHas('course', function($query){
                $query->where('name', 'arab tili');
            })->where('status' , 'active')->get();
            return view('backend.index' ,
            compact(
                'title' , 
                'subtitle',
                'all','matem' , 'ona' ,'fizika','geografiya','tarix','biologiya',
    'kimyo' , 'huquq','english','rus' , 'arab'
            
            ));})->name('admin');

Route::resource('/course' , CourseController::class);
Route::resource('/course-register', CourseRegisterController::class);
Route::get('/fanlar' , [SubjectController::class , 'index'])->name('fanlar');
});

Route::get('/' ,[FrontControlller::class , 'index'])->name('home');
Route::post('/store' ,[FrontControlller::class , 'store'])->name('store');



//Error 404 page
Route::get('/error404' , function(){return view('error.error404');})->name('error404');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
