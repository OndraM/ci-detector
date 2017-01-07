<?php

// Dump values from current environment

require_once __DIR__ . '/vendor/autoload.php';

$ciDetector = new \OndraM\CiDetector\CiDetector();

if ($ciDetector->isCiDetected()) {
    exit("No CI detected");
}

$ci = $ciDetector->detect();

var_dump($ci->getCiName());
var_dump($ci->getBuildNumber());
var_dump($ci->getBuildUrl());
var_dump($ci->getGitCommit());
var_dump($ci->getGitBranch());
var_dump($ci->getRepositoryUrl());
