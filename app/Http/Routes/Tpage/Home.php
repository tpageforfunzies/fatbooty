<?php

namespace App\Http\Routes\Tpage;

use JumpGate\Core\Contracts\Routes;
use JumpGate\Core\Http\Routes\BaseRoute;
use Illuminate\Routing\Router;

class Home extends BaseRoute implements Routes
{
    public $namespace = 'App\Http\Controllers\Tpage';

    public $middleware = ['web'];

    public function routes(Router $router)
    {
        $router->get('/tpage')
               ->name('home')
               ->uses('TpageController@index');
        $router->get('/tpage/home')
               ->name('home')
               ->uses('TpageController@index');
    }
}