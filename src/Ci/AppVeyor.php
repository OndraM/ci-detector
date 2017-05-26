<?php

namespace OndraM\CiDetector\Ci;

use OndraM\CiDetector\CiDetector;
use OndraM\CiDetector\Env;

class AppVeyor extends AbstractCi
{
    public static function isDetected(Env $env)
    {
        return getenv('APPVEYOR') === 'True';
    }

    public function getCiName()
    {
        return CiDetector::CI_APPVEYOR;
    }

    public function getBuildNumber()
    {
        return $this->env->get('APPVEYOR_BUILD_NUMBER');
    }

    public function getBuildUrl()
    {
        return sprintf(
            '%s/project/%s/%s/build/%s',
            $this->env->get('APPVEYOR_URL'),
            $this->env->get('APPVEYOR_ACCOUNT_NAME'),
            $this->env->get('APPVEYOR_PROJECT_SLUG'),
            $this->env->get('APPVEYOR_BUILD_VERSION')
        );
    }

    public function getGitCommit()
    {
        return $this->env->get('APPVEYOR_REPO_COMMIT');
    }

    public function getGitBranch()
    {
        return $this->env->get('APPVEYOR_REPO_BRANCH'); // For PR builds this is the base branch (not the PR branch)
    }

    public function getRepositoryUrl()
    {
        return ''; // unsupported
    }
}
