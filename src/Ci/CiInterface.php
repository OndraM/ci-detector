<?php declare(strict_types=1);

namespace OndraM\CiDetector\Ci;

use OndraM\CiDetector\Env;
use OndraM\CiDetector\TrinaryLogic;

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
     * Returned TrinaryLogic object's value will be true if the current build is from a pull/merge request,
     * false if it not, and maybe if we can't determine it.
     */
    public function isPullRequest(): TrinaryLogic;

    /**
     * Get number of this concrete build.
     *
     * Build number is usually human-readable increasing number sequence. It should increase each time this particular
     * job was run on the CI server. Most CIs use simple numbering sequence like: 1, 2, 3...
     * However, some CIs do not provide this simple human-readable value and rather use for example alphanumeric hash.
     */
    public function getBuildNumber(): string;

    /**
     * Get URL where this build can be found and viewed
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
     * Get name of the target branch of a pull request.
     */
    public function getTargetBranch(): string;

    /**
     * Get name of the git repository which is being built.
     *
     * This is usually in form "user/repository", for example "OndraM/ci-detector".
     */
    public function getRepositoryName(): string;

    /**
     * Get URL where the repository which is being built can be found.
     *
     * This is either HTTP URL like "https://github.com/OndraM/ci-detector"
     * but may be a git ssh url like "ssh://git@bitbucket.org/OndraM/ci-detector".
     */
    public function getRepositoryUrl(): string;
}
