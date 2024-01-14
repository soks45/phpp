<?php
    use Framework\Route;
    use Framework\Router;

    Router::addRoute(new Route('page/{id}/create', 'PageController@create', Route::METHOD_GET));
    Router::addRoute(new Route('page/{id}/update', 'PageController@update', Route::METHOD_GET));
    Router::addRoute(new Route('page/{id}', 'PageController@page', Route::METHOD_GET));
    Router::addRoute(new Route('user/{id}', 'UserController@getById', Route::METHOD_GET));
    Router::addRoute(new Route('user', 'UserController@index', Route::METHOD_GET));

