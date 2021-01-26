--TEST--
Bitbucket Pipelines: Detect properties

--ENV--
BITBUCKET_BRANCH=main
BITBUCKET_BUILD_NUMBER=5
BITBUCKET_CLONE_DIR=/opt/atlassian/pipelines/agent/build
BITBUCKET_COMMIT=c4f71a535de986600303936780f815721ebbe0c5
BITBUCKET_DOCKER_HOST_INTERNAL=10.39.202.217
BITBUCKET_GIT_HTTP_ORIGIN=http://bitbucket.org/ondrejmachulda/ci-detector
BITBUCKET_GIT_SSH_ORIGIN=git@bitbucket.org:ondrejmachulda/ci-detector.git
BITBUCKET_PROJECT_KEY=CD
BITBUCKET_PROJECT_UUID={e291bb4c-af79-4a1c-bbaf-2a246f8a4f21}
BITBUCKET_REPO_FULL_NAME=ondrejmachulda/ci-detector
BITBUCKET_REPO_IS_PRIVATE=true
BITBUCKET_REPO_OWNER_UUID={5a50dd52-5ab7-4225-831c-4db9451375a2}
BITBUCKET_REPO_OWNER=ondrejmachulda
BITBUCKET_REPO_SLUG=ci-detector
BITBUCKET_REPO_UUID={fe99db34-e979-40be-b383-c1a7738b52f7}
BITBUCKET_STEP_RUN_NUMBER=1
BITBUCKET_STEP_TRIGGERER_UUID={5a50dd52-5ab7-4225-831c-4db9451375a2}
BITBUCKET_WORKSPACE=ondrejmachulda
CI=true

--FILE--
<?php

require __DIR__ . '/../../../vendor/autoload.php';

\OndraM\CiDetector\Ci\PropertiesPrinterHelper::printAllProperties();

--EXPECT--
Is CI detected:
bool(true)
Class:
string(39) "OndraM\CiDetector\Ci\BitbucketPipelines"
CI name:
string(19) "Bitbucket Pipelines"
Is pull request:
string(2) "No"
Build number:
string(1) "5"
Build url:
string(80) "http://bitbucket.org/ondrejmachulda/ci-detector/addon/pipelines/home#!/results/5"
Commit:
string(40) "c4f71a535de986600303936780f815721ebbe0c5"
Branch:
string(4) "main"
Target branch:
string(0) ""
Repository name:
string(26) "ondrejmachulda/ci-detector"
Repository url:
string(54) "ssh://git@bitbucket.org:ondrejmachulda/ci-detector.git"
