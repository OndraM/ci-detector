<?php declare(strict_types=1);

namespace OndraM\CiDetector\Ci;

use OndraM\CiDetector\CiDetector;
use OndraM\CiDetector\Env;
use OndraM\CiDetector\TrinaryLogic;

class Bamboo extends AbstractCi
{
    public static function isDetected(Env $env): bool
    {
        return $env->get('bamboo_buildKey') !== false;
    }

    public function getCiName(): string
    {
        return CiDetector::CI_BAMBOO;
    }

    public function isPullRequest(): TrinaryLogic
    {
        return TrinaryLogic::createFromBoolean($this->env->get('bamboo_repository_pr_key') !== false);
    }

    public function getBuildNumber(): string
    {
        return $this->env->getString('bamboo_buildNumber');
    }

    public function getBuildUrl(): string
    {
        return $this->env->getString('bamboo_resultsUrl');
    }

    public function getGitCommit(): string
    {
        return $this->env->getString('bamboo_planRepository_revision');
    }

    public function getGitBranch(): string
    {
        // TODO: While the PR source branch is in `bamboo.repository_pr_sourceBranch`, it cannot be reliably
        // used, probably because it is environment variables with dot in name.
        // As a result, returned branch in case of PR build is the target branch (eg. master) not the PR branch.

        return $this->env->getString('bamboo_planRepository_branch');
    }

    public function getRepositoryName(): string
    {
        return $this->env->getString('bamboo_planRepository_name');
    }

    public function getRepositoryUrl(): string
    {
        return $this->env->getString('bamboo_planRepository_repositoryUrl');
    }
}
