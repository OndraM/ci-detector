--TEST--
Drone CI: Detect properties of PR build

--ENV--
CI_BUILD_CREATED=1510195880
CI_BUILD_EVENT=push
CI_BUILD_FINISHED=1510195883
CI_BUILD_LINK=https://github.com/OndraM/ci-detector/commit/3986f34176d2a641fc11bc41a3875c67bdc46aa5
CI_BUILD_NUMBER=2
CI_BUILD_STARTED=1510195880
CI_BUILD_STATUS=success
CI_COMMIT_AUTHOR_AVATAR=https://avatars0.githubusercontent.com/u/793041?v=4
CI_COMMIT_AUTHOR_EMAIL=ondrej.machulda@gmail.com
CI_COMMIT_AUTHOR_NAME=OndraM
CI_COMMIT_AUTHOR=OndraM
CI_COMMIT_BRANCH=test-drone
CI_COMMIT_MESSAGE=Test Drone CI build
CI_COMMIT_REF=refs/heads/test-drone
CI_COMMIT_SHA=3986f34176d2a641fc11bc41a3875c67bdc46aa5
CI_JOB_FINISHED=1510195883
CI_JOB_NUMBER=1
CI_JOB_STARTED=1510195880
CI_JOB_STATUS=success
CI_REMOTE_URL=https://github.com/OndraM/ci-detector.git
CI_REPO_LINK=https://github.com/OndraM/ci-detector
CI_REPO_NAME=OndraM/ci-detector
CI_REPO_REMOTE=https://github.com/OndraM/ci-detector.git
CI_REPO=OndraM/ci-detector
CI_SYSTEM_ARCH=linux/amd64
CI_SYSTEM_LINK=http://drone.local
CI_SYSTEM_NAME=drone
CI_SYSTEM=drone
CI_WORKSPACE=/drone/src/github.com/OndraM/ci-detector/commit/3986f34176d2a641fc11bc41a3875c67bdc46aa5
CI=drone
DRONE_ARCH=linux/amd64
DRONE_BRANCH=test-drone
DRONE_BUILD_CREATED=1510195880
DRONE_BUILD_EVENT=push
DRONE_BUILD_FINISHED=1510195883
DRONE_BUILD_LINK=http://drone.local/OndraM/ci-detector/2
DRONE_BUILD_NUMBER=2
DRONE_BUILD_STARTED=1510195880
DRONE_BUILD_STATUS=success
DRONE_COMMIT_AUTHOR_AVATAR=https://avatars0.githubusercontent.com/u/793041?v=4
DRONE_COMMIT_AUTHOR_EMAIL=ondrej.machulda@gmail.com
DRONE_COMMIT_AUTHOR=OndraM
DRONE_COMMIT_BRANCH=test-drone
DRONE_COMMIT_LINK=https://github.com/OndraM/ci-detector/commit/3986f34176d2a641fc11bc41a3875c67bdc46aa5
DRONE_COMMIT_MESSAGE=Test Drone CI build
DRONE_COMMIT_REF=refs/heads/test-drone
DRONE_COMMIT_SHA=3986f34176d2a641fc11bc41a3875c67bdc46aa5
DRONE_COMMIT=3986f34176d2a641fc11bc41a3875c67bdc46aa5
DRONE_JOB_FINISHED=1510195883
DRONE_JOB_NUMBER=1
DRONE_JOB_STARTED=1510195880
DRONE_JOB_STATUS=success
DRONE_PULL_REQUEST=43
DRONE_REMOTE_URL=https://github.com/OndraM/ci-detector.git
DRONE_REPO_BRANCH=test-drone
DRONE_REPO_LINK=https://github.com/OndraM/ci-detector
DRONE_REPO_NAME=ci-detector
DRONE_REPO_OWNER=OndraM
DRONE_REPO_SCM=git
DRONE_REPO=OndraM/ci-detector
DRONE_WORKSPACE=/drone/src/github.com/OndraM/ci-detector/commit/3986f34176d2a641fc11bc41a3875c67bdc46aa5
DRONE=true
GPG_KEYS=A917B1ECDA84AEC2B568FED6F50ABC807BD5DCD0 528995BFEDFBA7191D46839EF9BA0ADA31CBD89E
HOME=/root
HOSTNAME=641fabf80a16
PATH=/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin
PHP_ASC_URL=https://secure.php.net/get/php-7.1.10.tar.xz.asc/from/this/mirror
PHP_CFLAGS=-fstack-protector-strong -fpic -fpie -O2
PHP_CPPFLAGS=-fstack-protector-strong -fpic -fpie -O2
PHP_INI_DIR=/usr/local/etc/php
PHP_LDFLAGS=-Wl,-O1 -Wl,--hash-style=both -pie
PHP_MD5=
PHP_SHA256=2b8efa771a2ead0bb3ae67b530ca505b5b286adc873cca9ce97a6e1d6815c50b
PHP_URL=https://secure.php.net/get/php-7.1.10.tar.xz/from/this/mirror
PHP_VERSION=7.1.10
PHPIZE_DEPS=autoconf 		dpkg-dev dpkg 		file 		g++ 		gcc 		libc-dev 		make 		pcre-dev 		pkgconf 		re2c
PWD=/drone/src/github.com/OndraM/ci-detector/commit/3986f34176d2a641fc11bc41a3875c67bdc46aa5
SHELL=/bin/sh
SHLVL=2

--FILE--
<?php

require __DIR__ . '/../../../vendor/autoload.php';

$ci = (new OndraM\CiDetector\CiDetector())->detect();
echo "Is pull request:\n";
var_dump($ci->isPullRequest()->describe());
echo "Git branch:\n";
var_dump($ci->getBranch());
echo "Target branch:\n";
var_dump($ci->getTargetBranch());

--EXPECT--
Is pull request:
string(3) "Yes"
Git branch:
string(10) "test-drone"
Target branch:
string(0) ""
