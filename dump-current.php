<?php

// Dump values from current environment

require_once __DIR__ . '/vendor/autoload.php';

$ci = \OndraM\CiDetector::detect();

if ($ci instanceof \OndraM\Ci\CiInterface) {
    var_dump($ci->getCiName());
    var_dump($ci->getBuildNumber());
    var_dump($ci->getBuildUrl());
    var_dump($ci->getGitCommit());
    var_dump($ci->getGitBranch());
    var_dump($ci->getRepositoryUrl());
} else {
    echo "No CI detected\n";
}
