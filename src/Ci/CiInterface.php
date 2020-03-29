<?php declare(strict_types=1);

namespace OndraM\CiDetector\Ci;

use OndraM\CiDetector\TrinaryLogic;

interface CiInterface
{
    /**
     * Return true if this CI was detected
     */
    public function isDetected(): bool;

    /**
     * Get name of the CI server type
     */
    public function getCiName(): string;

    /**
     * Returned TrinaryLogic object's value will be true if the current build is from a pull/merge request,
     * false if it not, and maybe if we can't determine it.
     */
    public function isPullRequest(): TrinaryLogic;

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
     * Get name of the git repository which is being built
     */
    public function getRepositoryName(): string;

    /**
     * Get URL of the git repository which is being built
     */
    public function getRepositoryUrl(): string;
}
