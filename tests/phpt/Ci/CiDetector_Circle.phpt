--TEST--
Circle CI: Detect properties

--ENV--
CI_PULL_REQUEST=
CI_PULL_REQUESTS=
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

\OndraM\CiDetector\Ci\PropertiesPrinterHelper::printAllProperties();

--EXPECT--
Is CI detected:
bool(true)
Class:
string(27) "OndraM\CiDetector\Ci\Circle"
CI name:
string(8) "CircleCI"
Is pull request:
string(2) "No"
Build number:
string(4) "1337"
Build url:
string(47) "https://circleci.com/gh/OndraM/ci-detector/1337"
Git commit:
string(40) "fad3f7bdbf3515d1e9285b8aa80feeff74507bdd"
Git branch:
string(13) "test-circleci"
Repository name:
string(18) "OndraM/ci-detector"
Repository url:
string(37) "https://github.com/OndraM/ci-detector"
