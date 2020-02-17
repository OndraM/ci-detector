--TEST--
Detect properties of Codeship

--ENV--
CI_COMMIT_ID=26e646685c1e625939f6b2de0e5f30b59cc34d60
CODESHIP=TRUE
CI_COMMITTER_NAME=Ondej Machulda
COMMIT_ID=26e646685c1e625939f6b2de0e5f30b59cc34d60
CI_PULL_REQUEST=43
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

require __DIR__ . '/../../../vendor/autoload.php';

$ci = (new OndraM\CiDetector\CiDetector())->detect();
echo "Is pull request:\n";
var_dump($ci->isPullRequest()->describe());

--EXPECT--
Is pull request:
string(3) "Yes"
