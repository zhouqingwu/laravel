<?php

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

// Service Containner :: use config every time
// App::singleton('App\Billing\Stripe', function () {
//    return new \App\Billing\Stripe(config('services.stripe.key'));
// });

// $stripe = resolve('App\Billing\Stripe');
// or below
// $stripe = App::make('App\Billing\Stripe');
// or below
//$stripe = app('App\Billing\Stripe');
// or below
 

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    $name = 'Hello';
    $title = 'About';
    $tasks = DB::table('tasks')->get(); #->where('id', '>', 1);

    $data = compact('title', 'name', 'tasks');

    return view('about')->with($data);
});

Route::get('/tasks', 'TasksController@index');
Route::get('/tasks/create', 'TasksController@create');
Route::get('/tasks/{task}', 'TasksController@show');
Route::post('/tasks', 'TasksController@store');
Route::post('/tasks/{task}/comments', 'CommentsController@store');
/**
 * Card
 */

Route::get('/cards', 'CardController@index');
Route::get('/cards/{id}', 'CardController@show');

/**
 * Blog Posts
 */
Route::get('/posts', 'PostController@index')->name('home');
Route::get('/posts/create', 'PostController@create');
Route::get('/posts/{post}', 'PostController@show')->where('id', '[0-9]+');
Route::post('/posts', 'PostController@store');
Route::post('/posts/{post}/discuss', 'DiscussController@store');
Route::get('/posts/tags/{tag}', 'TagsController@index');

/*
 *    Registration and Login
 */
Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');
Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');
