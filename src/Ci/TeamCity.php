<?php

namespace OndraM\CiDetector\Ci;

use OndraM\CiDetector\CiDetector;
use OndraM\CiDetector\Env;

class TeamCity extends AbstractCi
{
    public static function isDetected(Env $env)
    {
        return getenv('TEAMCITY_VERSION') !== false;
    }

    public function getCiName()
    {
        return CiDetector::CI_TEAMCITY;
    }

    public function getBuildNumber()
    {
        return $this->env->get('BUILD_NUMBER');
    }

    public function getBuildUrl()
    {
        return ''; // unsupported
    }

    public function getGitCommit()
    {
        return $this->env->get('BUILD_VCS_NUMBER');
    }

    public function getGitBranch()
    {
        return ''; // unsupported
    }

    public function getRepositoryUrl()
    {
        return ''; // unsupported
    }
}
