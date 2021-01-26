--TEST--
GitLab CI: Detect properties

--ENV--
CI_BUILD_BEFORE_SHA=1e50d546a67287e3111707283eb28bfff50584a9
CI_BUILD_ID=3265050
CI_BUILD_NAME=job1
CI_BUILD_REF_NAME=test-gitlab
CI_BUILD_REF=1e50d546a67287e3111707283eb28bfff50584a9
CI_BUILD_REPO=https://gitlab-ci-token:xxxxxx@gitlab.com/foo/bar.git
CI_BUILD_STAGE=test
CI_PIPELINE_ID=3993609
CI_PROJECT_DIR=/builds/OndraM/ci-detector
CI_PROJECT_ID=1545369
CI_PROJECT_NAME=ci-detector
CI_PROJECT_NAMESPACE=foo
CI_PROJECT_PATH=foo/bar
CI_PROJECT_URL=https://gitlab.com/foo/bar
CI_REGISTRY_IMAGE=registry.gitlab.com/foo/bar
CI_REGISTRY=registry.gitlab.com
CI_RUNNER_DESCRIPTION=shared-runners-manager-1.gitlab.com
CI_RUNNER_ID=13977
CI_RUNNER_TAGS=git-annex, mongo, postgres, mysql, ruby, linux, docker, shared
CI_SERVER_NAME=GitLab
CI_SERVER_REVISION=353eed7
CI_SERVER_VERSION=8.11.0-rc5-ee
CI_SERVER=yes
CI=true
GITLAB_CI=true
HOSTNAME=runner-8a2f473d-project-1545369-concurrent-0
PHP_FILENAME=php-7.0.10.tar.xz
PHP_VERSION=7.0.10
PWD=/builds/foo/bar

--FILE--
<?php

require __DIR__ . '/../../../vendor/autoload.php';

\OndraM\CiDetector\Ci\PropertiesPrinterHelper::printAllProperties();

--EXPECT--
Is CI detected:
bool(true)
Class:
string(27) "OndraM\CiDetector\Ci\GitLab"
CI name:
string(6) "GitLab"
Is pull request:
string(2) "No"
Build number:
string(7) "3265050"
Build url:
string(41) "https://gitlab.com/foo/bar/builds/3265050"
Commit:
string(40) "1e50d546a67287e3111707283eb28bfff50584a9"
Branch:
string(11) "test-gitlab"
Repository name:
string(7) "foo/bar"
Repository url:
string(53) "https://gitlab-ci-token:xxxxxx@gitlab.com/foo/bar.git"
