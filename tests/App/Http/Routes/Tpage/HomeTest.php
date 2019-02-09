<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Http\Routes\Tpage\Home;

class HomeTest extends TestCase
{
    public function testNamespace()
    {
        $route = new Home();

        $this->assertEquals($route->namespace, 'App\Http\Controllers');
    }

    public function testMiddleware()
    {
    	$route = new Home();

    	$this->assertTrue(count($route->middleware) > 0);
    	$this->assertTrue(in_array('web', $route->middleware));
    }
}
