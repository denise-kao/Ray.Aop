<?php

declare(strict_types=1);
/**
 * This file is part of the Ray.Aop package.
 *
 * @license http://opensource.org/licenses/MIT MIT
 */
namespace Ray\Aop;

use PHPUnit\Framework\TestCase;

class ParserFactoryTest extends TestCase
{
    public function testCreate()
    {
        $this->assertInstanceOf('PhpParser\Parser', (new ParserFactory)->newInstance());
    }
}
