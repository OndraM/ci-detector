--TEST--
Detect properties of Circle CI

--ENV--
CIRCLE_BUILD_NUM=1337
CIRCLE_NODE_TOTAL=1
CIRCLE_ARTIFACTS=/tmp/circle-artifacts.UZ1pVXp
CI_PULL_REQUESTS=
CIRCLE_PROJECT_USERNAME=OndraM
CIRCLE_NODE_INDEX=0
CIRCLE_COMPARE_URL=https://github.com/OndraM/ci-detector/compare/dd26fa7b1c1e...fad3f7bdbf35
CIRCLE_BRANCH=test-circleci
CI_PULL_REQUEST=
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

echo "Is CI detected:\n";
var_dump((new OndraM\CiDetector\CiDetector())->isCiDetected());

$ci = (new OndraM\CiDetector\CiDetector())->detect();
echo "Class:\n";
var_dump(get_class($ci));
echo "CI name:\n";
var_dump($ci->getCiName());
echo "Build number:\n";
var_dump($ci->getBuildNumber());
echo "Build url:\n";
var_dump($ci->getBuildUrl());
echo "Git commit:\n";
var_dump($ci->getGitCommit());
echo "Git branch:\n";
var_dump($ci->getGitBranch());
echo "Repository url:\n";
var_dump($ci->getRepositoryUrl());

--EXPECT--
Is CI detected:
bool(true)
Class:
string(27) "OndraM\CiDetector\Ci\Circle"
CI name:
string(8) "CircleCI"
Build number:
string(4) "1337"
Build url:
string(47) "https://circleci.com/gh/OndraM/ci-detector/1337"
Git commit:
string(40) "fad3f7bdbf3515d1e9285b8aa80feeff74507bdd"
Git branch:
string(13) "test-circleci"
Repository url:
string(37) "https://github.com/OndraM/ci-detector"
