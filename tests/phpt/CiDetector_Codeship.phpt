--TEST--
Detect properties of Codeship

--ENV--
CI_COMMIT_ID=26e646685c1e625939f6b2de0e5f30b59cc34d60
CODESHIP=TRUE
CI_COMMITTER_NAME=Ondej Machulda
COMMIT_ID=26e646685c1e625939f6b2de0e5f30b59cc34d60
CI_PULL_REQUEST=false
CI_REPO_NAME=OndraM/ci-detector
CI_COMMITTER_USERNAME=OndraM
CI_COMMITTER_EMAIL=ondrej.machulda@gmail.com
PARALLEL_TEST_PROCESSORS=4
RAILSONFIRE=TRUE
CI_NAME=codeship
CI_BRANCH=test-codeship
CI=true
CI_MESSAGE=Add support for Codeship
CI_BUILD_URL=https://codeship.com/projects/169447/builds/17594878
CI_BUILD_NUMBER=17594878

--FILE--
<?php

require __DIR__ . '/../../vendor/autoload.php';

$ci = OndraM\CiDetector::detect();
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

--EXPECT--
Class:
string(18) "OndraM\Ci\Codeship"
CI name:
string(8) "Codeship"
Build number:
string(8) "17594878"
Build url:
string(52) "https://codeship.com/projects/169447/builds/17594878"
Git commit:
string(40) "26e646685c1e625939f6b2de0e5f30b59cc34d60"
