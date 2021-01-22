<?php declare(strict_types=1);

// Dump values from current environment

require_once __DIR__ . '/vendor/autoload.php';

$ciDetector = new \OndraM\CiDetector\CiDetector();

if (!$ciDetector->isCiDetected()) {
    exit('No CI detected' . "\n");
}

$ci = $ciDetector->detect();

echo '$ci->getCiName()' . "\n";
var_dump($ci->getCiName());
echo "\n" . '$ci->getBuildNumber()' . "\n";
var_dump($ci->getBuildNumber());
echo "\n" . '$ci->getBuildUrl()' . "\n";
var_dump($ci->getBuildUrl());
echo "\n" . '$ci->getCommit()' . "\n";
var_dump($ci->getCommit());
echo "\n" . '$ci->getBranch()' . "\n";
var_dump($ci->getBranch());
echo "\n" . '$ci->getTargetBranch()' . "\n";
var_dump($ci->getTargetBranch());
echo "\n" . '$ci->getRepositoryName()' . "\n";
var_dump($ci->getRepositoryName());
echo "\n" . '$ci->getRepositoryUrl()' . "\n";
var_dump($ci->getRepositoryUrl());

echo "\n" . '$ci->isPullRequest()->describe()' . "\n";
var_dump($ci->isPullRequest()->describe());
