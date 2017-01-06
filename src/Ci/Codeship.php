<?php

namespace OndraM\Ci;

use OndraM\CiDetector;
use OndraM\Env;

class Codeship extends AbstractCi
{
    public static function isDetected(Env $env)
    {
        return getenv('CI_NAME') === 'codeship';
    }

    public function getCiName()
    {
        return CiDetector::CI_CODESHIP;
    }

    public function getBuildNumber()
    {
        return $this->env->get('CI_BUILD_NUMBER');
    }

    public function getBuildUrl()
    {
        return $this->env->get('CI_BUILD_URL');
    }

    public function getGitCommit()
    {
        return $this->env->get('COMMIT_ID');
    }

    public function getGitBranch()
    {
        return $this->env->get('CI_BRANCH');
    }
}
