<?php

namespace Georanma\UnitConversions\Tests;

use Georanma\UnitConversions\Weight;
use PHPUnit\Framework\TestCase;

class WeightTest extends TestCase
{
    /** @test */
    public function it_can_convert_kilograms_to_lbs(): void
    {
        $lbs = Weight::fromKilograms(100)->toLbs();

        $this->assertEquals(220.4623, $lbs);
    }
}
