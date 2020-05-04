--TEST--
Circle CI: Detect properties of PR build
--ENV--
CI_PULL_REQUEST=https://github.com/OndraM/ci-detector/pull/43
CI_PULL_REQUESTS=https://github.com/OndraM/ci-detector/pull/43
CI_REPORTS=/tmp/circle-junit.gBW8B4r
CI=true
CIRCLE_ARTIFACTS=/tmp/circle-artifacts.UZ1pVXp
CIRCLE_BRANCH=test-circleci
CIRCLE_BUILD_IMAGE=ubuntu-12.04
CIRCLE_BUILD_NUM=1337
CIRCLE_BUILD_URL=https://circleci.com/gh/OndraM/ci-detector/1337
CIRCLE_COMPARE_URL=https://github.com/OndraM/ci-detector/compare/dd26fa7b1c1e...fad3f7bdbf35
CIRCLE_NODE_INDEX=0
CIRCLE_NODE_TOTAL=1
CIRCLE_PREVIOUS_BUILD_NUM=1336
CIRCLE_PROJECT_REPONAME=ci-detector
CIRCLE_PROJECT_USERNAME=OndraM
CIRCLE_REPOSITORY_URL=https://github.com/OndraM/ci-detector
CIRCLE_SHA1=fad3f7bdbf3515d1e9285b8aa80feeff74507bdd
CIRCLE_TEST_REPORTS=/tmp/circle-junit.gBW8B4r
CIRCLE_USERNAME=OndraM
CIRCLECI=true

--FILE--
<?php

require __DIR__ . '/../../../vendor/autoload.php';

$ci = (new OndraM\CiDetector\CiDetector())->detect();
echo "Is pull request:\n";
var_dump($ci->isPullRequest()->describe());

--EXPECT--
Is pull request:
string(3) "Yes"
