--TEST--
Codeship: Detect properties of PR build

--ENV--
CI_BRANCH=test-codeship
CI_BUILD_NUMBER=17594878
CI_BUILD_URL=https://codeship.com/projects/169447/builds/17594878
CI_COMMIT_ID=26e646685c1e625939f6b2de0e5f30b59cc34d60
CI_COMMITTER_EMAIL=ondrej.machulda@gmail.com
CI_COMMITTER_NAME=Ondej Machulda
CI_COMMITTER_USERNAME=OndraM
CI_MESSAGE=Add support for Codeship
CI_NAME=codeship
CI_PULL_REQUEST=43
CI_REPO_NAME=OndraM/ci-detector
CI=true
CODESHIP=TRUE
COMMIT_ID=26e646685c1e625939f6b2de0e5f30b59cc34d60
PARALLEL_TEST_PROCESSORS=4
RAILSONFIRE=TRUE

--FILE--
<?php

require __DIR__ . '/../../../vendor/autoload.php';

\OndraM\CiDetector\Ci\PropertiesPrinterHelper::printPullRequestProperties();

--EXPECT--
Is pull request:
string(3) "Yes"
Branch:
string(13) "test-codeship"
Target branch:
string(0) ""
