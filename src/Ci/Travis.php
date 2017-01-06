<?php

namespace OndraM\CiDetector\Ci;

use OndraM\CiDetector\CiDetector;
use OndraM\CiDetector\Env;

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
        if ($this->env->get('TRAVIS_PULL_REQUEST') === 'false') {
            return $this->env->get('TRAVIS_BRANCH');
        }

        // If the build is for PR, return name of the branch with the PR, not the target PR branch
        // https://github.com/travis-ci/travis-ci/issues/6652
        return $this->env->get('TRAVIS_PULL_REQUEST_BRANCH');
    }

    public function getRepositoryUrl()
    {
        return ''; // unsupported
    }
}
