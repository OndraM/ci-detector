--TEST--
Detect properties of Circle CI

--ENV--
CIRCLE_BUILD_NUM=1337
CIRCLE_NODE_TOTAL=1
CIRCLE_ARTIFACTS=/tmp/circle-artifacts.UZ1pVXp
CI_PULL_REQUESTS=https://github.com/OndraM/ci-detector/pull/43
CIRCLE_PROJECT_USERNAME=OndraM
CIRCLE_NODE_INDEX=0
CIRCLE_COMPARE_URL=https://github.com/OndraM/ci-detector/compare/dd26fa7b1c1e...fad3f7bdbf35
CIRCLE_BRANCH=test-circleci
CI_PULL_REQUEST=https://github.com/OndraM/ci-detector/pull/43
CIRCLE_USERNAME=OndraM
CIRCLE_PREVIOUS_BUILD_NUM=1336
CI_REPORTS=/tmp/circle-junit.gBW8B4r
CIRCLE_BUILD_URL=https://circleci.com/gh/OndraM/ci-detector/1337
CIRCLECI=true
CIRCLE_BUILD_IMAGE=ubuntu-12.04
CIRCLE_SHA1=fad3f7bdbf3515d1e9285b8aa80feeff74507bdd
CI=true
CIRCLE_REPOSITORY_URL=https://github.com/OndraM/ci-detector
CIRCLE_TEST_REPORTS=/tmp/circle-junit.gBW8B4r
CIRCLE_PROJECT_REPONAME=ci-detector

--FILE--
<?php

require __DIR__ . '/../../../vendor/autoload.php';

$ci = (new OndraM\CiDetector\CiDetector())->detect();
echo "Is pull request:\n";
var_dump($ci->isPullRequest()->describe());

--EXPECT--
Is pull request:
string(3) "Yes"
