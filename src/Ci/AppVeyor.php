<?php declare(strict_types = 1);

namespace OndraM\CiDetector\Ci;

use OndraM\CiDetector\CiDetector;
use OndraM\CiDetector\Env;

class AppVeyor extends AbstractCi
{
    public static function isDetected(Env $env): bool
    {
        return $env->get('APPVEYOR') === 'True';
    }

    public function getCiName(): string
    {
        return CiDetector::CI_APPVEYOR;
    }

    public function getBuildNumber(): string
    {
        return $this->env->getString('APPVEYOR_BUILD_NUMBER');
    }

    public function getBuildUrl(): string
    {
        return sprintf(
            '%s/project/%s/%s/build/%s',
            $this->env->get('APPVEYOR_URL'),
            $this->env->get('APPVEYOR_ACCOUNT_NAME'),
            $this->env->get('APPVEYOR_PROJECT_SLUG'),
            $this->env->get('APPVEYOR_BUILD_VERSION')
        );
    }

    public function getGitCommit(): string
    {
        return $this->env->getString('APPVEYOR_REPO_COMMIT');
    }

    public function getGitBranch(): string
    {
        return $this->env->getString('APPVEYOR_REPO_BRANCH'); // For PR builds this is the base branch (not the PR branch)
    }

    public function getRepositoryUrl(): string
    {
        return ''; // unsupported
    }
}
