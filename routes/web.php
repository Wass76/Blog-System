<?php

use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\Auth\RegisterController;
use App\Mail\MyEmail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SettingController;






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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware([ 'auth'])->group(function () {

    Route::get('/posts' /* */, [App\Http\Controllers\PostController::class, 'index'])->name('posts');

    Route::middleware(['can:access-admin'])->name('admin.')->prefix('admin')->group(function () {
        Route::get('/' ,[AdminController::class, 'index'])->name('index');
        Route::get('postss', [AdminPostController::class ,'index'])->name('posts.index');
        Route::get('setting', [SettingController::class, 'index'])->name('settings.index');
        Route::get('/users' /* */, [App\Http\Controllers\UserController::class, 'index'])->middleware('can:access-user')->name('users');
    });

});


Route::get('/posts/trushed' /* */, [App\Http\Controllers\PostController::class, 'postsTrashed'])->name('posts.trashed');
Route::get('/post/edit/{id}' /* */, [App\Http\Controllers\PostController::class, 'edit'])->name('post.edit');
Route::get('/post/create' /* */, [App\Http\Controllers\PostController::class, 'create'])->name('post.create');
Route::post('/post/store' /* */, [App\Http\Controllers\PostController::class, 'store'])->name('post.store');



Route::post('/profile' /* */, [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');

Route::get('/profile' /* */, [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
//don't put {id} beside of /profile
Route::post('/profile/update', [App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update');

//Routes for posts




Route::get('/post/show/{id}' /* */, [App\Http\Controllers\PostController::class, 'show'])->name('post.show');

Route::post('/post/update/{id}' , [App\Http\Controllers\PostController::class, 'update'])->name('post.update');

Route::get('/post/destroy/{id}' /* */, [App\Http\Controllers\PostController::class, 'destroy'])->name('post.destroy');
Route::get('/post/hDelete/{id}' /* */, [App\Http\Controllers\PostController::class, 'hDelete'])->name('post.hDelete');
Route::get('/post/restore/{id}' /* */, [App\Http\Controllers\PostController::class, 'restore'])->name('post.restore');


//Routes for tags
Route::get('/tags' /* */, [App\Http\Controllers\TagController::class, 'index'])->name('tags');
Route::get('/tag/create' /* */, [App\Http\Controllers\TagController::class, 'create'])->name('tag.create');
Route::post('/tag/store' /* */, [App\Http\Controllers\TagController::class, 'store'])->name('tag.store');
Route::get('/tag/edit/{id}' /* */, [App\Http\Controllers\TagController::class, 'edit'])->name('tag.edit');
Route::post('/tag/update/{id}' /* */, [App\Http\Controllers\TagController::class, 'update'])->name('tag.update');
Route::get('/tag/destroy/{id}' /* */, [App\Http\Controllers\TagController::class, 'destroy'])->name('tag.destroy');







 Route::get('signup', [RegisterController::class, 'index']);
// Route::post('signup', [RegisterController::class, 'store'])->name('register.store');


//Routes for users
// Route::get('/users' /* */, [App\Http\Controllers\UserController::class, 'index'])->name('users');
Route::get('/user/create' /* */, [App\Http\Controllers\UserController::class, 'create'])->name('user.create');
Route::post('/user/store' /* */, [App\Http\Controllers\UserController::class, 'store'])->name('user.store');
Route::get('/user/destroy/{id}' /* */, [App\Http\Controllers\UserController::class, 'destroy'])->name('user.destroy');



Route::get('/testroute' , function () {
    $name = 'Wassem Tenbakji';


Mail::to('wasee.tenbakji@gmail.com')->send(new MyEmail($name));
});

// Route::group(['middleware' => ['auth']], function() {
//     Route::resource('roles', RoleController::class);
//     Route::resource('users', UserController::class);
//     Route::resource('post', PostController::class);
// });



