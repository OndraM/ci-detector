<?php declare(strict_types=1);

namespace OndraM\CiDetector\Ci\Tests;

use OndraM\CiDetector\TrinaryLogic;
use PHPUnit\Framework\TestCase;

final class TrinaryLogicTest extends TestCase
{
    public function testCreateFromTrue(): void
    {
        $this->assertTrue(TrinaryLogic::createFromBoolean(true)->yes());
        $this->assertFalse(TrinaryLogic::createFromBoolean(true)->maybe());
        $this->assertFalse(TrinaryLogic::createFromBoolean(true)->no());
    }

    public function testCreateMaybe(): void
    {
        $this->assertFalse(TrinaryLogic::createMaybe()->yes());
        $this->assertTrue(TrinaryLogic::createMaybe()->maybe());
        $this->assertFalse(TrinaryLogic::createMaybe()->no());
    }

    public function testCreateFromFalse(): void
    {
        $this->assertFalse(TrinaryLogic::createFromBoolean(false)->yes());
        $this->assertFalse(TrinaryLogic::createFromBoolean(false)->maybe());
        $this->assertTrue(TrinaryLogic::createFromBoolean(false)->no());
    }

    public function testDescribe(): void
    {
        $this->assertSame('Yes', TrinaryLogic::createFromBoolean(true)->describe());
        $this->assertSame('Maybe', TrinaryLogic::createMaybe()->describe());
        $this->assertSame('No', TrinaryLogic::createFromBoolean(false)->describe());
    }

    public function testReturnsSameInstance(): void
    {
        $this->assertSame(TrinaryLogic::createFromBoolean(true), TrinaryLogic::createFromBoolean(true));
        $this->assertSame(TrinaryLogic::createMaybe(), TrinaryLogic::createMaybe());
        $this->assertSame(TrinaryLogic::createFromBoolean(false), TrinaryLogic::createFromBoolean(false));
    }
}
