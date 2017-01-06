<?php

namespace OndraM\Ci;

use OndraM\CiDetector;
use OndraM\Env;

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
}
