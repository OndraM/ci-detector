--TEST--
Continuousphp CI: Detect properties

--ENV--
_=/usr/bin/env
CONTINUOUSPHP=continuousphp
CPHP_BUILD_ID=31b581f1-95bf-4d09-b458-8d0da757bc8d
CPHP_BUILT_BY=OndraM
CPHP_GIT_COMMIT=87bf5720b148a6fee6c8e70888800a4360a13e08
CPHP_GIT_REF=refs/heads/test-continuousphp-branch
CPHP_PR_ID=
CPHP_TOKEN=<CPHP_TOKEN>
GIT_SSH=/usr/bin/git_ssh.sh
GITHUB_TOKEN=<GITHUB_TOKEN>
HOME=/home/cphp
JAVA_HOME=/usr/lib/jvm/java-7-openjdk-amd64
LANG=en_US.UTF-8
LANGUAGE=en_US.UTF-8
LC_ALL=en_US.UTF-8
LOGNAME=cphp
MAIL=/var/mail/cphp
NVM_BIN=/usr/local/src/nvm/versions/node/v6.9.2/bin
NVM_CD_FLAGS=
NVM_DIR=/usr/local/src/nvm
OLDPWD=/home/cphp
PATH_WITHOUT_PHPBREW=/usr/local/src/nvm/versions/node/v6.9.2/bin:/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/games:/usr/local/games
PHPBREW_BIN=/home/cphp/.phpbrew/bin
PHPBREW_HOME=/home/cphp/.phpbrew
PHPBREW_LOOKUP_PREFIX=
PHPBREW_PATH=/home/cphp/.phpbrew/php/php-7.1.0/bin
PHPBREW_PHP=php-7.1.0
PHPBREW_ROOT=/home/cphp/.phpbrew
PHPBREW_SET_PROMPT=1
PHPBREW_VERSION_REGEX=^([[:digit:]]+\.){2}[[:digit:]]+((alpha|beta|RC)[[:digit:]]+)?$
PS1=\w > \u@\h [$(phpbrew_current_php_version)]\n\$
PWD=/home/cphp/data/container/31b581f1-95bf-4d09-b458-8d0da757bc8d/workspace
RBENV_ROOT=/opt/rbenv
RBENV_SHELL=bash
SHELL=/bin/bash
SHLVL=1
SSH_CLIENT=172.18.0.1 39008 22
SSH_CONNECTION=172.18.0.1 39008 172.18.0.2 22
USER=cphp

--FILE--
<?php

require __DIR__ . '/../../../vendor/autoload.php';

\OndraM\CiDetector\Ci\PropertiesPrinterHelper::printAllProperties();

--EXPECT--
Is CI detected:
bool(true)
Class:
string(34) "OndraM\CiDetector\Ci\Continuousphp"
CI name:
string(13) "continuousphp"
Is pull request:
string(2) "No"
Build number:
string(36) "31b581f1-95bf-4d09-b458-8d0da757bc8d"
Build url:
string(0) ""
Git commit:
string(40) "87bf5720b148a6fee6c8e70888800a4360a13e08"
Git branch:
string(25) "test-continuousphp-branch"
Repository name:
string(0) ""
Repository url:
string(0) ""
