<?php

namespace OndraM\CiDetector;

/**
 * Encapsulate access to the environment variables
 */
class Env
{
    /**
     * @param string $name Environment variable name
     * @return string|false Environment variable value or false if the variable does not exist
     */
    public function get($name)
    {
        return getenv($name);
    }
}
