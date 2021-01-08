<?php

/** @var \Laravel\Lumen\Routing\Router $router */


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

// $router->get('/courses', function () {
//     return \App\Models\Course::all();
// });
 
// $router->get('/broom',function() use ($router){
//     return "dont mind me, im just sweeping";
// });




$router->group(['prefix'=>'courses'],function() use ($router) {
    $router->get('/','CourseController@index' );
    $router->get('/{id}','CourseController@show');


/*
    Resource: Course
    Endpoint: /courses
    Desired Methods: GET, POST,PUT/PATCH,DELETE
    --------------------------------------------

*/

});
