<?php declare(strict_types=1);

namespace OndraM\CiDetector\Ci;

use OndraM\CiDetector\CiDetector;
use OndraM\CiDetector\Env;

class GitHubActions extends AbstractCi
{
    const GITHUB_BASE_URL = 'https://github.com';

    public static function isDetected(Env $env): bool
    {
        return $env->get('GITHUB_ACTIONS') !== false;
    }

    public function getCiName(): string
    {
        return CiDetector::CI_GITHUB_ACTIONS;
    }

    public function getBuildNumber(): string
    {
        return $this->env->getString('GITHUB_ACTION');
    }

    public function getBuildUrl(): string
    {
        return sprintf(
            '%s/%s/commit/%s/checks',
            self::GITHUB_BASE_URL,
            $this->env->get('GITHUB_REPOSITORY'),
            $this->env->get('GITHUB_SHA')
        );
    }

    public function getGitCommit(): string
    {
        return $this->env->getString('GITHUB_SHA');
    }

    public function getGitBranch(): string
    {
        $gitReference = $this->env->getString('GITHUB_REF');

        return preg_replace('~^refs/heads/~', '', $gitReference);
    }

    public function getRepositoryUrl(): string
    {
        return sprintf(
            '%s/%s',
            self::GITHUB_BASE_URL,
            $this->env->get('GITHUB_REPOSITORY')
        );
    }
}
