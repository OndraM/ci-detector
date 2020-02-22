<?php declare(strict_types=1);

namespace OndraM\CiDetector\Ci\Tests;

use OndraM\CiDetector\CiDetector;
use OndraM\CiDetector\Env;
use OndraM\CiDetector\Exception\CiNotDetectedException;
use PHPUnit\Framework\TestCase;

final class CiDetectorTest extends TestCase
{
    /**
     * @test
     */
    public function shouldReturnFalseWhenEnvironmentDoesNotHaveAnyEnvironmentVariables(): void
    {
        $environment = self::createEmptyEnvironment();

        $detector = CiDetector::fromEnvironment($environment);

        $this->assertFalse($detector->isCiDetected());
    }

    /**
     * @test
     */
    public function shouldThrowExceptionWhenCreatingFromEnvironmentWhichIsNotACiServer(): void
    {
        $environment = self::createEmptyEnvironment();

        $detector = CiDetector::fromEnvironment($environment);

        $this->expectException(CiNotDetectedException::class);
        $this->expectExceptionMessage('No CI server detected in current environment');

        $detector->detect();
    }

    private static function createEmptyEnvironment(): Env
    {
        return new class() extends Env {
            public function get(string $name)
            {
                return false;
            }
        };
    }
}
