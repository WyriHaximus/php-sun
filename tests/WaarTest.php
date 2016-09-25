<?php declare(strict_types=1);

namespace WyriHaximus\Tests\☼;

use WyriHaximus\☼\Waar;

class WaarTest extends \PHPUnit_Framework_TestCase
{
    public function testTrue()
    {
        $this->assertTrue(Waar::waar());
    }
}
