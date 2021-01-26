<?php declare(strict_types=1);

namespace OndraM\CiDetector\Ci;

use OndraM\CiDetector\Env;
use OndraM\CiDetector\TrinaryLogic;
use PHPUnit\Framework\TestCase;

final class DescribeTest extends TestCase
{
    /**
     * @test
     */
    public function shouldDescribeCiServerTrue(): void
    {
        $ci = $this->createDummyCi();

        $this->assertSame(
            [
                'ci-name' => 'Dummy CI',
                'build-number' => 'build no. 1',
                'build-url' => 'https://build.url',
                'commit' => 'abcdef12',
                'branch' => 'feature/branch',
                'target-branch' => 'main',
                'repository-name' => 'repository/name',
                'repository-url' => 'https://repository.url',
                'is-pull-request' => 'Yes',
            ],
            $ci->describe()
        );
    }

    private function createDummyCi(): AbstractCi
    {
        return new class($this->createMock(Env::class)) extends AbstractCi {
            public static function isDetected(Env $env): bool
            {
                return true;
            }

            public function getCiName(): string
            {
                return 'Dummy CI';
            }

            public function getBuildNumber(): string
            {
                return 'build no. 1';
            }

            public function getBuildUrl(): string
            {
                return 'https://build.url';
            }

            public function getCommit(): string
            {
                return 'abcdef12';
            }

            public function getBranch(): string
            {
                return 'feature/branch';
            }

            public function getTargetBranch(): string
            {
                return 'main';
            }

            public function getRepositoryName(): string
            {
                return 'repository/name';
            }

            public function getRepositoryUrl(): string
            {
                return 'https://repository.url';
            }

            public function isPullRequest(): TrinaryLogic
            {
                return TrinaryLogic::createFromBoolean(true);
            }
        };
    }
}
