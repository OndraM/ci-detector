<?php

declare(strict_types=1);

namespace OndraM\CiDetector\Ci;

use OndraM\CiDetector\CiDetector;
use OndraM\CiDetector\Env;
use OndraM\CiDetector\TrinaryLogic;

class ClaudeCode extends AbstractCi
{
    public static function isDetected(Env $env): bool
    {
        return $env->get('CLAUDECODE') === '1';
    }

    public function getCiName(): string
    {
        return CiDetector::CI_CLAUDECODE;
    }

    public function isPullRequest(): TrinaryLogic
    {
        return TrinaryLogic::createMaybe();
    }

    public function getBuildNumber(): string
    {
        return '';
    }

    public function getBuildUrl(): string
    {
        return '';
    }

    public function getCommit(): string
    {
        return '';
    }

    public function getBranch(): string
    {
        return '';
    }

    public function getTargetBranch(): string
    {
        return '';
    }

    public function getRepositoryName(): string
    {
        return '';
    }

    public function getRepositoryUrl(): string
    {
        return '';
    }
}