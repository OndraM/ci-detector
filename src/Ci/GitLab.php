<?php

namespace OndraM\CiDetector\Ci;

use OndraM\CiDetector\CiDetector;
use OndraM\CiDetector\Env;

class GitLab extends AbstractCi
{
    public static function isDetected(Env $env)
    {
        return getenv('GITLAB_CI') !== false;
    }

    public function getCiName()
    {
        return CiDetector::CI_GITLAB;
    }

    public function getBuildNumber()
    {
        return $this->env->get('CI_BUILD_ID');
    }

    public function getBuildUrl()
    {
        return $this->env->get('CI_PROJECT_URL') . '/builds/' . $this->getBuildNumber();
    }

    public function getGitCommit()
    {
        return $this->env->get('CI_BUILD_REF');
    }

    public function getGitBranch()
    {
        return $this->env->get('CI_BUILD_REF_NAME');
    }

    public function getRepositoryUrl()
    {
        return $this->env->get('CI_BUILD_REPO');
    }
}
