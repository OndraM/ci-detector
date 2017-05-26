<?php

// Dump values from current environment

require_once __DIR__ . '/vendor/autoload.php';

$ciDetector = new \OndraM\CiDetector\CiDetector();

if (!$ciDetector->isCiDetected()) {
    exit("No CI detected");
}

$ci = $ciDetector->detect();

echo 'Output of "$ci->getCiName()":' . "\n";
var_dump($ci->getCiName());
echo 'Output of "$ci->getBuildNumber()":' . "\n";
var_dump($ci->getBuildNumber());
echo 'Output of "$ci->getBuildUrl()":' . "\n";
var_dump($ci->getBuildUrl());
echo 'Output of "$ci->getGitCommit()":' . "\n";
var_dump($ci->getGitCommit());
echo 'Output of "$ci->getGitBranch()":' . "\n";
var_dump($ci->getGitBranch());
echo 'Output of "$ci->getRepositoryUrl()":' . "\n";
var_dump($ci->getRepositoryUrl());
