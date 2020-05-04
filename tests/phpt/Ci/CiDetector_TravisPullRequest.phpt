--TEST--
Travis CI: Detect properties of PR build

--ENV--
CI=true
CONTINUOUS_INTEGRATION=true
HAS_ANTARES_THREE_LITTLE_FRONZIES_BADGE=true
HAS_JOSH_K_SEAL_OF_APPROVAL=true
TRAVIS_BRANCH=master
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
TRAVIS_PULL_REQUEST_BRANCH=test-travis-branch
TRAVIS_PULL_REQUEST=333
TRAVIS_REPO_SLUG=OndraM/ci-detector
TRAVIS_TAG=tag
TRAVIS=true

--FILE--
<?php

require __DIR__ . '/../../../vendor/autoload.php';

$ci = (new OndraM\CiDetector\CiDetector())->detect();
echo "Is pull request:\n";
var_dump($ci->isPullRequest()->describe());
echo "Git branch:\n";
var_dump($ci->getGitBranch());

--EXPECT--
Is pull request:
string(3) "Yes"
Git branch:
string(18) "test-travis-branch"
