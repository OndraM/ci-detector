<?php

namespace OndraM\Ci;

use OndraM\CiDetector;
use OndraM\Env;

class Jenkins extends AbstractCi
{
    public static function isDetected(Env $env)
    {
        return getenv('JENKINS_URL') !== false;
    }

    public function getCiName()
    {
        return CiDetector::CI_JENKINS;
    }

    public function getBuildNumber()
    {
        return $this->env->get('BUILD_NUMBER');
    }

    public function getBuildUrl()
    {
        return $this->env->get('BUILD_URL');
    }

    public function getGitCommit()
    {
        return $this->env->get('GIT_COMMIT');
    }

    public function getGitBranch()
    {
        return $this->env->get('GIT_BRANCH');
    }
}
