<?php

namespace App\Http\Routes\Common;

use JumpGate\Core\Contracts\Routes;
use JumpGate\Core\Http\Routes\BaseRoute;
use Illuminate\Routing\Router;

class Home extends BaseRoute implements Routes
{
    public $namespace = 'App\Http\Controllers\Common';

    public $middleware = ['web'];

    public function routes(Router $router)
    {
        $router->get('/')
               ->name('home')
               ->uses('HomeController@index');
        $router->get('/home')
               ->name('home')
               ->uses('HomeController@index');
    }
}