<?php

namespace Otis22\PhpSkelleton\Tests;

use Otis22\PhpSkelleton\JoinedString;
use PHPUnit\Framework\TestCase;

class JoinedStringTest extends TestCase
{
    public function testJoinedString()
    {
        $result = new JoinedString(',', [1, 2, 3, 4]);
        $this->assertEquals('1,2,3,4', strval($result));
    }
}
