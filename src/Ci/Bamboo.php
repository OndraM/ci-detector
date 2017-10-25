<?php declare(strict_types = 1);

namespace OndraM\CiDetector\Ci;

use OndraM\CiDetector\CiDetector;
use OndraM\CiDetector\Env;

class Bamboo extends AbstractCi
{
    public static function isDetected(Env $env): bool
    {
        return $env->get('bamboo_buildKey') !== false;
    }

    public function getCiName(): string
    {
        return CiDetector::CI_BAMBOO;
    }

    public function getBuildNumber(): string
    {
        return $this->env->getString('bamboo_buildNumber');
    }

    public function getBuildUrl(): string
    {
        return $this->env->getString('bamboo_resultsUrl');
    }

    public function getGitCommit(): string
    {
        return $this->env->getString('bamboo_planRepository_revision');
    }

    public function getGitBranch(): string
    {
        return $this->env->getString('bamboo_planRepository_branch');
    }

    public function getRepositoryUrl(): string
    {
        return $this->env->getString('bamboo_planRepository_repositoryUrl');
    }
}
