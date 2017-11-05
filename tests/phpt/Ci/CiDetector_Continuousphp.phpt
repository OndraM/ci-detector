--TEST--
Detect properties of Continuousphp CI

--ENV--
CPHP_GIT_REF=refs/heads/test-continuousphp-branch
NVM_CD_FLAGS=
PHPBREW_PATH=/home/cphp/.phpbrew/php/php-7.1.0/bin
PHPBREW_BIN=/home/cphp/.phpbrew/bin
SHELL=/bin/bash
SSH_CLIENT=172.18.0.1 39008 22
PHPBREW_ROOT=/home/cphp/.phpbrew
CPHP_PR_ID=
LC_ALL=en_US.UTF-8
NVM_DIR=/usr/local/src/nvm
USER=cphp
PHPBREW_SET_PROMPT=1
GIT_SSH=/usr/bin/git_ssh.sh
RBENV_ROOT=/opt/rbenv
MAIL=/var/mail/cphp
PHPBREW_HOME=/home/cphp/.phpbrew
PHPBREW_VERSION_REGEX=^([[:digit:]]+\.){2}[[:digit:]]+((alpha|beta|RC)[[:digit:]]+)?$
PWD=/home/cphp/data/container/31b581f1-95bf-4d09-b458-8d0da757bc8d/workspace
JAVA_HOME=/usr/lib/jvm/java-7-openjdk-amd64
CPHP_TOKEN=<CPHP_TOKEN>
PHPBREW_LOOKUP_PREFIX=
LANG=en_US.UTF-8
PATH_WITHOUT_PHPBREW=/usr/local/src/nvm/versions/node/v6.9.2/bin:/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/games:/usr/local/games
PS1=\w > \u@\h [$(phpbrew_current_php_version)]\n\$
CPHP_BUILT_BY=OndraM
RBENV_SHELL=bash
SHLVL=1
HOME=/home/cphp
LANGUAGE=en_US.UTF-8
CONTINUOUSPHP=continuousphp
LOGNAME=cphp
CPHP_BUILD_ID=31b581f1-95bf-4d09-b458-8d0da757bc8d
SSH_CONNECTION=172.18.0.1 39008 172.18.0.2 22
NVM_BIN=/usr/local/src/nvm/versions/node/v6.9.2/bin
GITHUB_TOKEN=<GITHUB_TOKEN>
CPHP_GIT_COMMIT=87bf5720b148a6fee6c8e70888800a4360a13e08
PHPBREW_PHP=php-7.1.0
_=/usr/bin/env
OLDPWD=/home/cphp

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
string(34) "OndraM\CiDetector\Ci\Continuousphp"
CI name:
string(13) "continuousphp"
Build number:
string(36) "31b581f1-95bf-4d09-b458-8d0da757bc8d"
Build url:
string(0) ""
Git commit:
string(40) "87bf5720b148a6fee6c8e70888800a4360a13e08"
Git branch:
string(25) "test-continuousphp-branch"
Repository url:
string(0) ""
