<?php
use App\Http\Controllers\BooksController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
// Route admin
Route::group(['middleware' => 'user_type:1'], function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    //users
    Route::get('user',[UserController::class,'index'])->name('list.user');
    Route::get('user/add',[UserController::class,'create'])->name('create.user');
    Route::post('user/add',[UserController::class,'store'])->name('store.user');
    Route::get('user/edit/{id}',[UserController::class,'edit'])->name('edit.user');
    Route::put('user/edit/{id}',[UserController::class,'update'])->name('user.update');
    Route::delete('{id}',[UserController::class,'destroy'])->name('user.destroy');
    //books
    Route::get('book',[BooksController::class,'index'])->name('list.book');
    Route::get('book/add',[BooksController::class,'create'])->name('create.book');
    Route::post('book/add',[BooksController::class,'store'])->name('store.book');
    Route::get('book/edit/{id}',[BooksController::class,'edit'])->name('book.edit');
    Route::put('book/edit/{id}',[BooksController::class,'update'])->name('book.update');
    Route::delete('book/{id}',[BooksController::class,'destroy'])->name('book.destroy');
    route::post('book/{id}/complete',[BooksController::class,'complete'])->name('book.complete');
    //sections
    Route::get('book/{id}/section',[SectionController::class,'index'])->name('book.sections');
    Route::get('section/create/{id}',[SectionController::class,'create'])->name('book.sections.create');
    Route::post('section/create/{id}',[SectionController::class,'store'])->name('book.sections.store');
    Route::get('{book_id}/section/edit/{id}',[SectionController::class,'edit'])->name('book.sections.edit');
    Route::put('{book_id}/section/edit/{id}',[SectionController::class,'update'])->name('book.sections.update');
    Route::delete('{book_id}/sections/{id}',[SectionController::class,'destroy'])->name('book.sections.destroy');
    //category
    Route::get('category',[CategoriesController::class,'index'])->name('list.categories');
    Route::get('category/create',[CategoriesController::class,'create'])->name('create.categories');
    Route::post('category/create',[CategoriesController::class,'store'])->name('store.categories');
    Route::get('category/edit/{id}',[CategoriesController::class,'edit'])->name('edit.categories');
    Route::put('category/edit/{id}',[CategoriesController::class,'update'])->name('update.categories');
    Route::delete('category/delete/{id}',[CategoriesController::class,'destroy'])->name('destroy.categories');
});
//trang chu
Route::get('',[IndexController::class,'index'])->name('index');
// user
Route::get('login',[AdminController::class,'login'])->name('login');
Route::post('login',[AdminController::class,'customLogin'])->name('customLogin');
Route::get('registration',[AdminController::class,'registration'])->name('registration');
Route::post('registration',[AdminController::class,'register'])->name('register');
Route::get('sigout',[AdminController::class,'signOut'])->name('signOut');
ROute::get('profile/{id}',[IndexController::class,'profile'])->name('profile');
Route::get('passowrd/{id}',[IndexController::class,'change_password'])->name('change_passowrd');
Route::post('change-password/{id}', [IndexController::class, 'updatePassword'])->name('update.password');
Route::get('history',[IndexController::class,'UserReadHistory'])->name('readhistory');
Route::get('clear-history',function(){
    abort(404);
});
Route::post('clear-history',[IndexController::class,'ClearHistory'])->name('clear.history');
Route::get('delete-history/{history_id}',function(){
    abort(404);
});
Route::post('delete-history/{history_id}',[IndexController::class,'deleteHistory'])->name('delete.history');
Route::get('listfollow',[IndexController::class,'listFollow'])->name('list.follow');
//review
Route::get('book/{id}/detail',[IndexController::class,'detail'])->name('detail.book')->where('id', '\d');
Route::get('book/{slug}/detail',function(){
    abort(404);
})->where('slug', '.+');
Route::post('/books/{book}/reviews', [ReviewsController::class, 'store'])->name('reviews.store');
//book
Route::get('search', [IndexController::class, 'search'])->name('search');
Route::get('books/follow',function(){
    abort(404);
});
Route::get('unfollow/{book_id}',function(){
    abort(404);
});
Route::get('unfollowAll/',function(){
    abort(404);
});
Route::post('books/follow', [IndexController::class, 'followBook'])->name('books.follow');
Route::post('unfollow/{book_id}',[IndexController::class,'unfollow'])->name('unfollow');
Route::post('unfollowAll/',[IndexController::class,'unfollowAll'])->name('unfollowAll');
Route::get('{any}', function () {
    abort(404);
})->where('any', '.*');