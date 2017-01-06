<?php

namespace OndraM\CiDetector\Ci;

use OndraM\CiDetector\CiDetector;
use OndraM\CiDetector\Env;

class Circle extends AbstractCi
{
    public static function isDetected(Env $env)
    {
        return getenv('CIRCLECI') !== false;
    }

    public function getCiName()
    {
        return CiDetector::CI_CIRCLE;
    }

    public function getBuildNumber()
    {
        return $this->env->get('CIRCLE_BUILD_NUM');
    }

    public function getBuildUrl()
    {
        return $this->env->get('CIRCLE_BUILD_URL');
    }

    public function getGitCommit()
    {
        return $this->env->get('CIRCLE_SHA1');
    }

    public function getGitBranch()
    {
        return $this->env->get('CIRCLE_BRANCH');
    }

    public function getRepositoryUrl()
    {
        return $this->env->get('CIRCLE_REPOSITORY_URL');
    }
}
