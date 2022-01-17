<?php

namespace App\Tests\Classes;

use PHPUnit\Framework\TestCase;
use App\Classes\ClassA;

class TestClassA extends TestCase
{
    public function testSumUp(): void
    {
        $c = new ClassA();
        $res = $c->sumUp(3, 3);

        self::assertEquals(5, $res, "AAAAA");
    }

}