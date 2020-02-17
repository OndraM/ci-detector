--TEST--
Detect properties of GitLab CI

--ENV--
CI_PROJECT_NAME=ci-detector
CI_REGISTRY=registry.gitlab.com
HOSTNAME=runner-8a2f473d-project-1545369-concurrent-0
CI_PROJECT_URL=https://gitlab.com/foo/bar
PHP_FILENAME=php-7.0.10.tar.xz
CI_BUILD_BEFORE_SHA=1e50d546a67287e3111707283eb28bfff50584a9
CI_SERVER_VERSION=8.11.0-rc5-ee
CI_BUILD_ID=3265050
CI_PROJECT_ID=1545369
CI_RUNNER_ID=13977
CI_PIPELINE_ID=3993609
CI_BUILD_REF_NAME=test-gitlab
CI_BUILD_REF=1e50d546a67287e3111707283eb28bfff50584a9
CI_BUILD_STAGE=test
CI_PROJECT_DIR=/builds/OndraM/ci-detector
CI_RUNNER_TAGS=git-annex, mongo, postgres, mysql, ruby, linux, docker, shared
CI_REGISTRY_IMAGE=registry.gitlab.com/foo/bar
PWD=/builds/foo/bar
CI_SERVER_NAME=GitLab
CI_PROJECT_PATH=foo/bar
GITLAB_CI=true
CI_SERVER_REVISION=353eed7
CI_BUILD_NAME=job1
CI_SERVER=yes
CI=true
CI_PROJECT_NAMESPACE=foo
CI_BUILD_REPO=https://gitlab-ci-token:xxxxxx@gitlab.com/foo/bar.git
CI_RUNNER_DESCRIPTION=shared-runners-manager-1.gitlab.com
PHP_VERSION=7.0.10
CI_MERGE_REQUEST_ID=43

--FILE--
<?php

require __DIR__ . '/../../../vendor/autoload.php';

$ci = (new OndraM\CiDetector\CiDetector())->detect();
echo "Is pull request:\n";
var_dump($ci->isPullRequest()->describe());

--EXPECT--
Is pull request:
string(3) "Yes"
