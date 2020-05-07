--TEST--
Travis CI: Detect properties

--ENV--
CI=true
CONTINUOUS_INTEGRATION=true
HAS_ANTARES_THREE_LITTLE_FRONZIES_BADGE=true
HAS_JOSH_K_SEAL_OF_APPROVAL=true
TRAVIS_BRANCH=test-travis-branch
TRAVIS_BUILD_DIR=/home/travis/build/OndraM/ci-detector
TRAVIS_BUILD_ID=148395135
TRAVIS_BUILD_NUMBER=1
TRAVIS_COMMIT_RANGE=1a57e2b9204c^...fad3f7bdbf35
TRAVIS_COMMIT=fad3f7bdbf3515d1e9285b8aa80feeff74507bdd
TRAVIS_EVENT_TYPE=push
TRAVIS_JOB_ID=148395137
TRAVIS_JOB_NUMBER=1.2
TRAVIS_LANGUAGE=php
TRAVIS_OS_NAME=linux
TRAVIS_PHP_VERSION=7
TRAVIS_PULL_REQUEST=false
TRAVIS_REPO_SLUG=OndraM/ci-detector
TRAVIS_TAG=tag
TRAVIS=true

--FILE--
<?php

require __DIR__ . '/../../../vendor/autoload.php';

echo "Is CI detected:\n";
var_dump((new OndraM\CiDetector\CiDetector())->isCiDetected());

$ci = (new OndraM\CiDetector\CiDetector())->detect();
echo "Class:\n";
var_dump(get_class($ci));
echo "CI name:\n";
var_dump($ci->getCiName());
echo "Is pull request:\n";
var_dump($ci->isPullRequest()->describe());
echo "Build number:\n";
var_dump($ci->getBuildNumber());
echo "Build url:\n";
var_dump($ci->getBuildUrl());
echo "Git commit:\n";
var_dump($ci->getGitCommit());
echo "Git branch:\n";
var_dump($ci->getGitBranch());
echo "Repository name:\n";
var_dump($ci->getRepositoryName());
echo "Repository url:\n";
var_dump($ci->getRepositoryUrl());

--EXPECT--
Is CI detected:
bool(true)
Class:
string(27) "OndraM\CiDetector\Ci\Travis"
CI name:
string(9) "Travis CI"
Is pull request:
string(2) "No"
Build number:
string(3) "1.2"
Build url:
string(55) "https://travis-ci.org/OndraM/ci-detector/jobs/148395137"
Git commit:
string(40) "fad3f7bdbf3515d1e9285b8aa80feeff74507bdd"
Git branch:
string(18) "test-travis-branch"
Repository name:
string(18) "OndraM/ci-detector"
Repository url:
string(0) ""
