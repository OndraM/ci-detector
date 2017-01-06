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
string(27) "OndraM\CiDetector\Ci\GitLab"
CI name:
string(6) "GitLab"
Build number:
string(7) "3265050"
Build url:
string(41) "https://gitlab.com/foo/bar/builds/3265050"
Git commit:
string(40) "1e50d546a67287e3111707283eb28bfff50584a9"
Git branch:
string(11) "test-gitlab"
Repository url:
string(53) "https://gitlab-ci-token:xxxxxx@gitlab.com/foo/bar.git"
