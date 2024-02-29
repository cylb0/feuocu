<?php

namespace App\Tests;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class HomeControllerTest extends KernelTestCase
{
    public function testController(): void
    {
        $kernel = self::bootKernel();

        $client = self::createCl

        $this->assertSame('test', $kernel->getEnvironment());
        // $routerService = static::getContainer()->get('router');
        // $myCustomService = static::getContainer()->get(CustomService::class);
    }
}
