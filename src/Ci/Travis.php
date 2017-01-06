<?php

namespace OndraM\Ci;

use OndraM\CiDetector;
use OndraM\Env;

class Travis extends AbstractCi
{
    const TRAVIS_BASE_URL = 'https://travis-ci.org';

    public static function isDetected(Env $env)
    {
        return getenv('TRAVIS') !== false;
    }

    public function getCiName()
    {
        return CiDetector::CI_TRAVIS;
    }

    public function getBuildNumber()
    {
        return $this->env->get('TRAVIS_JOB_NUMBER');
    }

    public function getBuildUrl()
    {
        return sprintf(
            '%s/%s/jobs/%s',
            self::TRAVIS_BASE_URL,
            $this->env->get('TRAVIS_REPO_SLUG'),
            $this->env->get('TRAVIS_JOB_ID')
        );
    }

    public function getGitCommit()
    {
        return $this->env->get('TRAVIS_COMMIT');
    }

    public function getGitBranch()
    {
        return $this->env->get('TRAVIS_BRANCH');
    }
}
