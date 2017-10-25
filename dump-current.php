<?php declare(strict_types = 1);

// Dump values from current environment

require_once __DIR__ . '/vendor/autoload.php';

$ciDetector = new \OndraM\CiDetector\CiDetector();

if (!$ciDetector->isCiDetected()) {
    exit("No CI detected");
}

$ci = $ciDetector->detect();

$methodsToDump = [
    'getCiName',
    'getBuildNumber',
    'getBuildUrl',
    'getGitCommit',
    'getGitBranch',
    'getRepositoryUrl',
];

foreach ($methodsToDump as $method) {
    echo '$ci->' . $method . '()' . "\n";
    var_dump($ci->$method());
    echo "\n";
}
