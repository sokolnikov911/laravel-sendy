<?php

namespace sokolnikov911\LaravelSendy\Tests;

use sokolnikov911\LaravelSendy\Facades\LaravelSendy;
use sokolnikov911\LaravelSendy\ServiceProvider;
use Orchestra\Testbench\TestCase;

class LaravelSendyTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [ServiceProvider::class];
    }

    protected function getPackageAliases($app)
    {
        return [
            'laravel-sendy' => LaravelSendy::class,
        ];
    }

    public function testExample()
    {
        $this->assertEquals(1, 1);
    }
}
