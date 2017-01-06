<?php

namespace OndraM\CiDetector\Ci;

use OndraM\CiDetector\Env;

interface CiInterface
{
    /**
     * Return true if this CI was detected
     *
     * @param Env $env
     * @return bool
     */
    public static function isDetected(Env $env);

    /**
     * Get name of the CI server type
     *
     * @return string
     */
    public function getCiName();

    /**
     * Get number of this concrete build
     *
     * @return string
     */
    public function getBuildNumber();

    /**
     * Get URL to this build
     *
     * @return string
     */
    public function getBuildUrl();

    /**
     * Get git commit being built
     *
     * @return string
     */
    public function getGitCommit();

    /**
     * Get name of the git branch which is being built
     *
     * @return string
     */
    public function getGitBranch();

    /**
     * Get URL of the git repository which is being built
     *
     * @return string
     */
    public function getRepositoryUrl();
}
