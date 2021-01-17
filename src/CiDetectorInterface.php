<?php declare(strict_types=1);

namespace OndraM\CiDetector;

use OndraM\CiDetector\Ci\CiInterface;
use OndraM\CiDetector\Exception\CiNotDetectedException;

/**
 * Unified way to get environment variables from current continuous integration server
 */
interface CiDetectorInterface
{
    /**
     * Is current environment an recognized CI server?
     */
    public function isCiDetected(): bool;

    /**
     * Detect current CI server and return instance of its settings
     *
     * @throws CiNotDetectedException
     */
    public function detect(): CiInterface;
}
