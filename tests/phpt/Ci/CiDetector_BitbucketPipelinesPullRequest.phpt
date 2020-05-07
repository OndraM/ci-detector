--TEST--
Bitbucket Pipelines: Detect properties of PR build

--ENV--
BITBUCKET_BRANCH=feature/bitbucket
BITBUCKET_BUILD_NUMBER=4
BITBUCKET_CLONE_DIR=/opt/atlassian/pipelines/agent/build
BITBUCKET_COMMIT=8d081548cabb
BITBUCKET_DOCKER_HOST_INTERNAL=10.39.145.17
BITBUCKET_GIT_HTTP_ORIGIN=http://bitbucket.org/ondrejmachulda/ci-detector
BITBUCKET_GIT_SSH_ORIGIN=git@bitbucket.org:ondrejmachulda/ci-detector.git
BITBUCKET_PR_DESTINATION_BRANCH=master
BITBUCKET_PR_DESTINATION_COMMIT=88a27cd7f221
BITBUCKET_PR_ID=2
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

$ci = (new OndraM\CiDetector\CiDetector())->detect();
echo "Is pull request:\n";
var_dump($ci->isPullRequest()->describe());
echo "Git branch:\n";
var_dump($ci->getGitBranch());

--EXPECT--
Is pull request:
string(3) "Yes"
Git branch:
string(17) "feature/bitbucket"
