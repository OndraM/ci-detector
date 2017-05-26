<?php

namespace OndraM\CiDetector;

use OndraM\CiDetector\Ci\CiInterface;
use OndraM\CiDetector\Exception\CiNotDetectedException;

/**
 * Unified way to get environment variables from current continuous integration server
 */
class CiDetector
{
    const CI_APPVEYOR = 'AppVeyor';
    const CI_BAMBOO = 'Bamboo';
    const CI_CIRCLE = 'CircleCI';
    const CI_CODESHIP = 'Codeship';
    const CI_GITLAB = 'GitLab';
    const CI_JENKINS = 'Jenkins';
    const CI_TEAMCITY = 'TeamCity';
    const CI_TRAVIS = 'Travis CI';

    /**
     * Is current environment an recognized CI server?
     *
     * @return bool
     */
    public function isCiDetected()
    {
        $ciServer = $this->detectCurrentCiServer();

        return ($ciServer instanceof CiInterface);
    }

    /**
     * Detect current CI server and return instance of its settings
     *
     * @throws CiNotDetectedException
     * @return CiInterface Adapter for detected CI server
     */
    public function detect()
    {
        $ciServer = $this->detectCurrentCiServer();

        if (!$ciServer instanceof CiInterface) {
            throw new CiNotDetectedException('No CI server detected in current environment');
        }

        return $ciServer;
    }

    /**
     * @return string[]
     */
    protected function getCiServers()
    {
        return [
            Ci\AppVeyor::class,
            Ci\Bamboo::class,
            Ci\Circle::class,
            Ci\Codeship::class,
            Ci\GitLab::class,
            Ci\Jenkins::class,
            Ci\TeamCity::class,
            Ci\Travis::class,
        ];
    }

    /**
     * @return bool
     */
    protected function detectCurrentCiServer()
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
}
