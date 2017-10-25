<?php declare(strict_types = 1);

namespace OndraM\CiDetector\Ci;

use OndraM\CiDetector\CiDetector;
use OndraM\CiDetector\Env;

class GitLab extends AbstractCi
{
    public static function isDetected(Env $env): bool
    {
        return $env->get('GITLAB_CI') !== false;
    }

    public function getCiName(): string
    {
        return CiDetector::CI_GITLAB;
    }

    public function getBuildNumber(): string
    {
        return $this->env->getString('CI_BUILD_ID');
    }

    public function getBuildUrl(): string
    {
        return $this->env->getString('CI_PROJECT_URL') . '/builds/' . $this->getBuildNumber();
    }

    public function getGitCommit(): string
    {
        return $this->env->getString('CI_BUILD_REF');
    }

    public function getGitBranch(): string
    {
        return $this->env->getString('CI_BUILD_REF_NAME');
    }

    public function getRepositoryUrl(): string
    {
        return $this->env->getString('CI_BUILD_REPO');
    }
}
