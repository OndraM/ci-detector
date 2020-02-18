<?php declare(strict_types=1);

namespace OndraM\CiDetector\Ci\Tests;

use OndraM\CiDetector\TrinaryLogic;
use PHPUnit\Framework\TestCase;

final class TrinaryLogicTest extends TestCase
{
    /**
     * @test
     */
    public function shouldCreateInstanceFromTrue(): void
    {
        $this->assertTrue(TrinaryLogic::createFromBoolean(true)->yes());
        $this->assertFalse(TrinaryLogic::createFromBoolean(true)->maybe());
        $this->assertFalse(TrinaryLogic::createFromBoolean(true)->no());
    }

    /**
     * @test
     */
    public function shouldCreateInstanceFromFalse(): void
    {
        $this->assertFalse(TrinaryLogic::createFromBoolean(false)->yes());
        $this->assertFalse(TrinaryLogic::createFromBoolean(false)->maybe());
        $this->assertTrue(TrinaryLogic::createFromBoolean(false)->no());
    }

    /**
     * @test
     */
    public function shouldCreateMaybeInstance(): void
    {
        $this->assertFalse(TrinaryLogic::createMaybe()->yes());
        $this->assertTrue(TrinaryLogic::createMaybe()->maybe());
        $this->assertFalse(TrinaryLogic::createMaybe()->no());
    }

    /**
     * @test
     */
    public function shouldDescribeValue(): void
    {
        $this->assertSame('Yes', TrinaryLogic::createFromBoolean(true)->describe());
        $this->assertSame('Maybe', TrinaryLogic::createMaybe()->describe());
        $this->assertSame('No', TrinaryLogic::createFromBoolean(false)->describe());
    }

    /**
     * @test
     */
    public function shouldReturnTheSameSingletonInstanceForTheSameValue(): void
    {
        $this->assertSame(TrinaryLogic::createFromBoolean(true), TrinaryLogic::createFromBoolean(true));
        $this->assertSame(TrinaryLogic::createMaybe(), TrinaryLogic::createMaybe());
        $this->assertSame(TrinaryLogic::createFromBoolean(false), TrinaryLogic::createFromBoolean(false));
    }
}
