<?php


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

$router->get(
    '/',
    [
        'as'    => 'home',
        'uses'  => 'MainController@list'
    ]
);

$router->get(
    '/character/{id}',
    [
        'as'    => 'character',
        'uses'  => 'CharacterController@item'
    ]
);

$router->get(
    '/houses',
    [
        'as'    => 'houses',
        'uses'  => 'HouseController@list'
    ]
);


$router->get(
    '/house/{id}',
    [
        'as'    => 'house',
        'uses'  => 'HouseController@item'
    ]
);
