<?php declare(strict_types = 1);

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
    const CI_CONTINUOUSPHP = 'continuousphp';
    const CI_DRONE = 'drone';
    const CI_GITLAB = 'GitLab';
    const CI_JENKINS = 'Jenkins';
    const CI_TEAMCITY = 'TeamCity';
    const CI_TRAVIS = 'Travis CI';

    /**
     * Is current environment an recognized CI server?
     */
    public function isCiDetected(): bool
    {
        $ciServer = $this->detectCurrentCiServer();

        return ($ciServer !== null);
    }

    /**
     * Detect current CI server and return instance of its settings
     *
     * @throws CiNotDetectedException
     */
    public function detect(): CiInterface
    {
        $ciServer = $this->detectCurrentCiServer();

        if ($ciServer === null) {
            throw new CiNotDetectedException('No CI server detected in current environment');
        }

        return $ciServer;
    }

    /**
     * @return string[]
     */
    protected function getCiServers(): array
    {
        return [
            Ci\AppVeyor::class,
            Ci\Bamboo::class,
            Ci\Circle::class,
            Ci\Codeship::class,
            Ci\Continuousphp::class,
            Ci\Drone::class,
            Ci\GitLab::class,
            Ci\Jenkins::class,
            Ci\TeamCity::class,
            Ci\Travis::class,
        ];
    }

    protected function detectCurrentCiServer(): ?CiInterface
    {
        $env = new Env();
        $ciServers = $this->getCiServers();

        foreach ($ciServers as $ciClass) {
            if (call_user_func([$ciClass, 'isDetected'], $env)) {
                return new $ciClass($env);
            }
        }

        return null;
    }
}
