--TEST--
Detect branch name for pull request builds on Travis CI

--ENV--
CI=true
CONTINUOUS_INTEGRATION=true
TRAVIS=true
TRAVIS_REPO_SLUG=OndraM/ci-detector
HAS_ANTARES_THREE_LITTLE_FRONZIES_BADGE=true
TRAVIS_PULL_REQUEST=333
TRAVIS_COMMIT=fad3f7bdbf3515d1e9285b8aa80feeff74507bdd
HAS_JOSH_K_SEAL_OF_APPROVAL=true
TRAVIS_OS_NAME=linux
TRAVIS_LANGUAGE=php
TRAVIS_JOB_NUMBER=1.2
TRAVIS_EVENT_TYPE=push
TRAVIS_BUILD_ID=148395135
TRAVIS_PHP_VERSION=7
TRAVIS_BRANCH=master
TRAVIS_COMMIT_RANGE=1a57e2b9204c^...fad3f7bdbf35
TRAVIS_JOB_ID=148395137
TRAVIS_BUILD_DIR=/home/travis/build/OndraM/ci-detector
TRAVIS_BUILD_NUMBER=1
TRAVIS_TAG=tag
TRAVIS_PULL_REQUEST_BRANCH=test-travis-branch

--FILE--
<?php

require __DIR__ . '/../../../vendor/autoload.php';

$ci = (new OndraM\CiDetector\CiDetector())->detect();
var_dump($ci->getGitBranch());

--EXPECT--
string(18) "test-travis-branch"
