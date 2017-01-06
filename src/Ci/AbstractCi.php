<?php

namespace OndraM\CiDetector\Ci;

use OndraM\CiDetector\Env;

/**
 * Unified adapter to retrieve environment variables from current continuous integration server
 */
abstract class AbstractCi implements CiInterface
{
    /** @var Env */
    protected $env;

    /**
     * @param Env $env
     */
    public function __construct(Env $env)
    {
        $this->env = $env;
    }
}
