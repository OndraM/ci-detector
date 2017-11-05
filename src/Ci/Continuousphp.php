<?php declare(strict_types = 1);

namespace OndraM\CiDetector\Ci;

use OndraM\CiDetector\CiDetector;
use OndraM\CiDetector\Env;

class Continuousphp extends AbstractCi
{
    public static function isDetected(Env $env): bool
    {
        return $env->get('CONTINUOUSPHP') === 'continuousphp';
    }

    public function getCiName(): string
    {
        return CiDetector::CI_CONTINUOUSPHP;
    }

    public function getBuildNumber(): string
    {
        return $this->env->getString('CPHP_BUILD_ID');
    }

    public function getBuildUrl(): string
    {
        return $this->env->getString('');
    }

    public function getGitCommit(): string
    {
        return $this->env->getString('CPHP_GIT_COMMIT');
    }

    public function getGitBranch(): string
    {
        $gitReference = $this->env->getString('CPHP_GIT_REF');

        return preg_replace('~^refs/heads/~', '', $gitReference);
    }

    public function getRepositoryUrl(): string
    {
        return $this->env->getString('');
    }
}
