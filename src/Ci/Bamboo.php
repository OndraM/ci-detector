<?php

namespace OndraM\CiDetector\Ci;

use OndraM\CiDetector\CiDetector;
use OndraM\CiDetector\Env;

class Bamboo extends AbstractCi
{
    public static function isDetected(Env $env)
    {
        return getenv('bamboo_buildKey') !== false;
    }

    public function getCiName()
    {
        return CiDetector::CI_BAMBOO;
    }

    public function getBuildNumber()
    {
        return $this->env->get('bamboo_buildNumber');
    }

    public function getBuildUrl()
    {
        return $this->env->get('bamboo_resultsUrl');
    }

    public function getGitCommit()
    {
        return $this->env->get('bamboo_planRepository_revision');
    }

    public function getGitBranch()
    {
        return $this->env->get('bamboo_planRepository_branch');
    }

    public function getRepositoryUrl()
    {
        return $this->env->get('bamboo_planRepository_repositoryUrl');
    }
}
