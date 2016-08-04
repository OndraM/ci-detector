<?php

namespace OndraM\Ci;

use OndraM\CiDetector;
use OndraM\Env;

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
}
