--TEST--
Wercker: Detect properties

--ENV--
_=/usr/bin/env
BUILD=true
CI=true
GPG_KEYS=42670A7FE4D0441C8E4632349E4FDC074A4EF02D 5A52880781F755608BF815FC910DEB46F53EA312
HOME=/root
HOSTNAME=aa9624ccd2bb
OLDPWD=/pipeline/source
PATH=/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin
PHP_ASC_URL=https://www.php.net/distributions/php-7.4.9.tar.xz.asc
PHP_CFLAGS=-fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64
PHP_CPPFLAGS=-fstack-protector-strong -fpic -fpie -O2 -D_LARGEFILE_SOURCE -D_FILE_OFFSET_BITS=64
PHP_INI_DIR=/usr/local/etc/php
PHP_LDFLAGS=-Wl,-O1 -pie
PHP_MD5=
PHP_SHA256=23733f4a608ad1bebdcecf0138ebc5fd57cf20d6e0915f98a9444c3f747dc57b
PHP_URL=https://www.php.net/distributions/php-7.4.9.tar.xz
PHP_VERSION=7.4.9
PHPIZE_DEPS=autoconf 		dpkg-dev 		file 		g++ 		gcc 		libc-dev 		make 		pkg-config 		re2c
PWD=/pipeline/source
SHLVL=1
TERM=xterm-256color
WERCKER_APPLICATION_ID=5f44d44981c9e96000160c65
WERCKER_APPLICATION_NAME=ci-detector
WERCKER_APPLICATION_OWNER_NAME=OndraM
WERCKER_APPLICATION_URL=https://app.wercker.com/#applications/5f44d44981c9e96000160c65
WERCKER_BUILD_ID=5f44d73f7e99680008040147
WERCKER_BUILD_URL=https://app.wercker.com/OndraM/ci-detector/runs/build/5f44d73f7e99680008040147
WERCKER_CACHE_DIR=/pipeline/cache
WERCKER_GIT_BRANCH=test-wercker
WERCKER_GIT_COMMIT=929d637c83efed51a6a0f210aed89f1adb874401
WERCKER_GIT_DOMAIN=github.com
WERCKER_GIT_OWNER=OndraM
WERCKER_GIT_REPOSITORY=ci-detector
WERCKER_GIT_TAG=
WERCKER_MAIN_PIPELINE_STARTED=1598347071
WERCKER_OUTPUT_DIR=/pipeline/output
WERCKER_PIPELINE_DIR=/pipeline
WERCKER_REPORT_ARTIFACTS_DIR=/report/script-e711d2c9-ec8a-494a-8fa4-06b606b95a02/artifacts
WERCKER_REPORT_DIR=/pipeline/report
WERCKER_REPORT_MESSAGE_FILE=/report/script-e711d2c9-ec8a-494a-8fa4-06b606b95a02/message.txt
WERCKER_REPORT_NUMBERS_FILE=/report/script-e711d2c9-ec8a-494a-8fa4-06b606b95a02/numbers.ini
WERCKER_ROOT=/pipeline/source
WERCKER_RUN_ID=5f44d73f7e99680008040147
WERCKER_RUN_URL=https://app.wercker.com/OndraM/ci-detector/runs/build/5f44d73f7e99680008040147
WERCKER_SOURCE_DIR=/pipeline/source
WERCKER_STARTED_BY=ondram
WERCKER_STEP_ID=script-e711d2c9-ec8a-494a-8fa4-06b606b95a02
WERCKER_STEP_NAME=script
WERCKER_STEP_OWNER=wercker
WERCKER_STEP_ROOT=/pipeline/script-e711d2c9-ec8a-494a-8fa4-06b606b95a02
WERCKER=true

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
echo "Is pull request:\n";
var_dump($ci->isPullRequest()->describe());
echo "Build number:\n";
var_dump($ci->getBuildNumber());
echo "Build url:\n";
var_dump($ci->getBuildUrl());
echo "Git commit:\n";
var_dump($ci->getGitCommit());
echo "Git branch:\n";
var_dump($ci->getGitBranch());
echo "Target branch:\n";
var_dump($ci->getTargetBranch());
echo "Repository name:\n";
var_dump($ci->getRepositoryName());
echo "Repository url:\n";
var_dump($ci->getRepositoryUrl());

--EXPECT--
Is CI detected:
bool(true)
Class:
string(28) "OndraM\CiDetector\Ci\Wercker"
CI name:
string(7) "Wercker"
Is pull request:
string(5) "Maybe"
Build number:
string(24) "5f44d73f7e99680008040147"
Build url:
string(78) "https://app.wercker.com/OndraM/ci-detector/runs/build/5f44d73f7e99680008040147"
Git commit:
string(40) "929d637c83efed51a6a0f210aed89f1adb874401"
Git branch:
string(12) "test-wercker"
Target branch:
string(0) ""
Repository name:
string(18) "OndraM/ci-detector"
Repository url:
string(0) ""
