--TEST--
Detect properties of Drone CI

--ENV--
DRONE_COMMIT_AUTHOR_AVATAR=https://avatars0.githubusercontent.com/u/793041?v=4
DRONE_BRANCH=test-drone
DRONE_JOB_FINISHED=1510195883
CI=drone
HOSTNAME=641fabf80a16
DRONE_COMMIT_AUTHOR=OndraM
DRONE_REPO_LINK=https://github.com/OndraM/ci-detector
CI_BUILD_STARTED=1510195880
CI_BUILD_NUMBER=2
PHP_INI_DIR=/usr/local/etc/php
CI_WORKSPACE=/drone/src/github.com/OndraM/ci-detector/commit/3986f34176d2a641fc11bc41a3875c67bdc46aa5
CI_SYSTEM_LINK=http://drone.local
CI_BUILD_LINK=https://github.com/OndraM/ci-detector/commit/3986f34176d2a641fc11bc41a3875c67bdc46aa5
SHLVL=2
HOME=/root
DRONE_COMMIT_BRANCH=test-drone
DRONE_REPO_SCM=git
DRONE_BUILD_STATUS=success
PHP_LDFLAGS=-Wl,-O1 -Wl,--hash-style=both -pie
CI_BUILD_EVENT=push
CI_JOB_NUMBER=1
CI_JOB_STARTED=1510195880
PHP_CFLAGS=-fstack-protector-strong -fpic -fpie -O2
PHP_MD5=
CI_REPO_NAME=OndraM/ci-detector
CI_BUILD_CREATED=1510195880
DRONE_ARCH=linux/amd64
CI_COMMIT_SHA=3986f34176d2a641fc11bc41a3875c67bdc46aa5
CI_COMMIT_AUTHOR_EMAIL=ondrej.machulda@gmail.com
PHP_VERSION=7.1.10
CI_COMMIT_REF=refs/heads/test-drone
GPG_KEYS=A917B1ECDA84AEC2B568FED6F50ABC807BD5DCD0 528995BFEDFBA7191D46839EF9BA0ADA31CBD89E
DRONE_REPO_BRANCH=test-drone
DRONE_COMMIT_MESSAGE=Test Drone CI build
PHP_CPPFLAGS=-fstack-protector-strong -fpic -fpie -O2
PHP_ASC_URL=https://secure.php.net/get/php-7.1.10.tar.xz.asc/from/this/mirror
CI_BUILD_FINISHED=1510195883
DRONE_JOB_STATUS=success
DRONE_REMOTE_URL=https://github.com/OndraM/ci-detector.git
PHP_URL=https://secure.php.net/get/php-7.1.10.tar.xz/from/this/mirror
CI_REPO=OndraM/ci-detector
DRONE_REPO_OWNER=OndraM
CI_COMMIT_AUTHOR_NAME=OndraM
CI_COMMIT_AUTHOR_AVATAR=https://avatars0.githubusercontent.com/u/793041?v=4
DRONE=true
PATH=/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin
DRONE_BUILD_STARTED=1510195880
DRONE_BUILD_NUMBER=2
CI_JOB_FINISHED=1510195883
DRONE_BUILD_LINK=http://drone.local/OndraM/ci-detector/2
DRONE_WORKSPACE=/drone/src/github.com/OndraM/ci-detector/commit/3986f34176d2a641fc11bc41a3875c67bdc46aa5
CI_COMMIT_AUTHOR=OndraM
CI_REPO_LINK=https://github.com/OndraM/ci-detector
CI_REPO_REMOTE=https://github.com/OndraM/ci-detector.git
CI_COMMIT_BRANCH=test-drone
DRONE_COMMIT=3986f34176d2a641fc11bc41a3875c67bdc46aa5
SHELL=/bin/sh
CI_SYSTEM_ARCH=linux/amd64
DRONE_JOB_NUMBER=1
DRONE_JOB_STARTED=1510195880
DRONE_BUILD_EVENT=push
DRONE_COMMIT_AUTHOR_EMAIL=ondrej.machulda@gmail.com
DRONE_REPO_NAME=ci-detector
DRONE_BUILD_CREATED=1510195880
DRONE_COMMIT_SHA=3986f34176d2a641fc11bc41a3875c67bdc46aa5
CI_BUILD_STATUS=success
CI_SYSTEM_NAME=drone
DRONE_COMMIT_REF=refs/heads/test-drone
PHPIZE_DEPS=autoconf 		dpkg-dev dpkg 		file 		g++ 		gcc 		libc-dev 		make 		pcre-dev 		pkgconf 		re2c
PWD=/drone/src/github.com/OndraM/ci-detector/commit/3986f34176d2a641fc11bc41a3875c67bdc46aa5
DRONE_COMMIT_LINK=https://github.com/OndraM/ci-detector/commit/3986f34176d2a641fc11bc41a3875c67bdc46aa5
DRONE_BUILD_FINISHED=1510195883
PHP_SHA256=2b8efa771a2ead0bb3ae67b530ca505b5b286adc873cca9ce97a6e1d6815c50b
DRONE_REPO=OndraM/ci-detector
CI_COMMIT_MESSAGE=Test Drone CI build
CI_SYSTEM=drone
CI_REMOTE_URL=https://github.com/OndraM/ci-detector.git
CI_JOB_STATUS=success

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
string(26) "OndraM\CiDetector\Ci\Drone"
CI name:
string(5) "drone"
Build number:
string(1) "2"
Build url:
string(39) "http://drone.local/OndraM/ci-detector/2"
Git commit:
string(40) "3986f34176d2a641fc11bc41a3875c67bdc46aa5"
Git branch:
string(10) "test-drone"
Repository url:
string(37) "https://github.com/OndraM/ci-detector"
