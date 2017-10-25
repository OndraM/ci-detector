<?php declare(strict_types = 1);

namespace OndraM\CiDetector\Ci;

use OndraM\CiDetector\Env;

interface CiInterface
{
    /**
     * Return true if this CI was detected
     */
    public static function isDetected(Env $env): bool;

    /**
     * Get name of the CI server type
     */
    public function getCiName(): string;

    /**
     * Get number of this concrete build
     */
    public function getBuildNumber(): string;

    /**
     * Get URL to this build
     */
    public function getBuildUrl(): string;

    /**
     * Get git commit being built
     */
    public function getGitCommit(): string;

    /**
     * Get name of the git branch which is being built
     */
    public function getGitBranch(): string;

    /**
     * Get URL of the git repository which is being built
     */
    public function getRepositoryUrl(): string;
}
