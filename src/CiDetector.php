<?php

namespace OndraM;

use OndraM\Ci\AbstractCi;

/**
 * Unified way to get environment variables from current continuous integration server
 */
class CiDetector
{
    const CI_BAMBOO = 'Bamboo';
    const CI_CIRCLE = 'CircleCI';
    const CI_CODESHIP = 'Codeship';
    const CI_GITLAB = 'GitLab';
    const CI_JENKINS = 'Jenkins';
    const CI_TEAMCITY = 'TeamCity';
    const CI_TRAVIS = 'Travis CI';

    /**
     * Detect current CI server and return instance of its settings
     *
     * @return AbstractCi|false Adapter for detected CI server or false if CI server not detected
     */
    public function detect()
    {
        $env = new Env();

        $ciServers = $this->getCiServers();
        foreach ($ciServers as $ciClass) {
            if (call_user_func([$ciClass, 'isDetected'], $env)) {
                return new $ciClass($env);
            }
        }

        return false;
    }

    /**
     * @return string[]
     */
    protected function getCiServers()
    {
        return [
            Ci\Bamboo::class,
            Ci\Circle::class,
            Ci\Codeship::class,
            Ci\GitLab::class,
            Ci\Jenkins::class,
            Ci\TeamCity::class,
            Ci\Travis::class,
        ];
    }
}
