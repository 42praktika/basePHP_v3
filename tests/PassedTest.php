<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use PHPUnit\Framework\Attributes\DataProvider;

final class PassedTest extends TestCase
{
    #[DataProvider('provider')]
    public function testSomething($x, $ex)
    {
        $this->assertEquals($x, $ex);
    }

    public function testAnything()
    {
        $this->assertTrue(true);
    }

    public static function provider()
    {
        for ($i = 0; $i < 50; $i++) {
            yield [$i, $i];
        }
    }
}
