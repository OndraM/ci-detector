<?php declare(strict_types = 1);

namespace OndraM\CiDetector\Ci;

use OndraM\CiDetector\CiDetector;
use OndraM\CiDetector\Env;

class Circle extends AbstractCi
{
    public static function isDetected(Env $env): bool
    {
        return $env->get('CIRCLECI') !== false;
    }

    public function getCiName(): string
    {
        return CiDetector::CI_CIRCLE;
    }

    public function getBuildNumber(): string
    {
        return $this->env->getString('CIRCLE_BUILD_NUM');
    }

    public function getBuildUrl(): string
    {
        return $this->env->getString('CIRCLE_BUILD_URL');
    }

    public function getGitCommit(): string
    {
        return $this->env->getString('CIRCLE_SHA1');
    }

    public function getGitBranch(): string
    {
        return $this->env->getString('CIRCLE_BRANCH');
    }

    public function getRepositoryUrl(): string
    {
        return $this->env->getString('CIRCLE_REPOSITORY_URL');
    }
}
