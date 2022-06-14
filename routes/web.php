<?php
use App\Http\Controllers\CourseController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApplicationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MentorController;
use App\Http\Controllers\changeimage;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UserM;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MentorRequestController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\singleMentor;
use App\Http\Controllers\categoryShowController;
use App\Http\Controllers\PostControlle;
use App\Http\Controllers\sendEmail;

use App\Http\Controllers\CommentController;/*
=======
use App\Http\Controllers\CommentController;
use App\Http\Controllers\postAdminController;/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/layout', function () {
//     return view('pages.layout');
// });
Route::resource('send-mail', sendEmail::class);
Route::get('/', function () {
    return view('pages.home');
});

Route::get('/show', function () {
    return view('pages.show');
});
 
// Route::get('/profile', function () {
//     return view('pages.profile');
// });

Route::get('/',[categoryShowController::class,'index']);
Route::resource('/posts', PostControlle::class);
Route::post('comments', [CommentController::class, 'store'])->name('comments.store');
Route::resource('profile',MentorController::class);

Route::resource('image',changeimage::class);
 


Route::post('edit_profile',[MentorController::class,'update_mentor']);


// Route::post('/home','HomeController@profileUpdate')->name('profileupdate');
 

// Route::get('editprofile',[MentorController::class,'myedit']);
// Route::get('/editprofile', function () {
//     return view('pages.editprofile');
// });


Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

// Route::get('/editc', function () {
//     return view('admin.edit');
// });

// Route::resource('/ed', RegisteController::class);

Route::get('/admin_profile', [AdminController::class,'show']);

Route::put('/edit_admin/{admin}', [AdminController::class,'update']);



Route::get('/dashboard', [AdminController::class,'index']);

Route::resource('/mentors', MentorRequestController::class);

Route::resource('/category', CategoryController::class);
Route::resource('/post', postAdminController::class);

// Route::resource('/admin_profile', [AdminController::class,'show']);


Route::get('/addcategory', [CategoryController::class,'create']);

// Route::get('/editCat/{id}/edit', [CategoryController::class,'edit']);



// Route::post('/editCat/{id}', [CategoryController::class,'update']);

Auth::routes();




Route::get('/auth', [App\Http\Controllers\HomeController::class, 'index'])->name('auth');


Route::delete('category/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');
 




// Route::get('/mentorSingle', function () {
//     return view('pages.mentorSingle');
// });

 

Route::get('/mentorSingle/{id}', [singleMentor::class,'index']);


 

Route::resource('course', CourseController::class);


Route::get('/home', function () {
    return view('pages.home');
});

Route::get('/create_course', function () {
    return view('pages.create_course');
});





Route::post('application',[ApplicationController::class,'store']);


Route::get('/app', [ApplicationController::class,'index']);
Route::delete('/app/{id}', [ApplicationController::class,'destroy']);

