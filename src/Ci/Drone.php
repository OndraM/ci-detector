<?php declare(strict_types = 1);

namespace OndraM\CiDetector\Ci;

use OndraM\CiDetector\CiDetector;
use OndraM\CiDetector\Env;

class Drone extends AbstractCi
{
    public static function isDetected(Env $env): bool
    {
        return $env->get('CI') === 'drone';
    }

    public function getCiName(): string
    {
        return CiDetector::CI_DRONE;
    }

    public function getBuildNumber(): string
    {
        return $this->env->getString('DRONE_BUILD_NUMBER');
    }

    public function getBuildUrl(): string
    {
        return $this->env->getString('DRONE_BUILD_LINK');
    }

    public function getGitCommit(): string
    {
        return $this->env->getString('DRONE_COMMIT_SHA');
    }

    public function getGitBranch(): string
    {
        return $this->env->getString('DRONE_COMMIT_BRANCH');
    }

    public function getRepositoryUrl(): string
    {
        return $this->env->getString('DRONE_REPO_LINK');
    }
}
