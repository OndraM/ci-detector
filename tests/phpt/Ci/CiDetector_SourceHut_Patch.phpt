--TEST--
SourceHut: Detect properties of PR build

--ENV--
BUILD_REASON=patchset
BUILD_SUBMITTER=hub.sr.ht
CI_NAME=sourcehut
HOME=/home/build
JOB_ID=484505
JOB_URL=https://builds.sr.ht/~ancarda/job/484505
LOGNAME=build
MAIL=/var/mail/build
PATCHSET_ID=21996
PATCHSET_URL=https://lists.sr.ht/~ancarda/dump-env/patches/21996
PATH=/bin:/usr/bin:/sbin:/usr/sbin
PWD=/home/build
SHELL=/bin/sh
SHLVL=2
SSH_CLIENT=172.17.0.1 49854 22
SSH_CONNECTION=172.17.0.1 49854 10.0.2.15 22
SSH_TTY=/dev/pts/0
TERM=xterm-256color
USER=build

--FILE--
<?php

require __DIR__ . '/../../../vendor/autoload.php';

\OndraM\CiDetector\Ci\PropertiesPrinterHelper::printPullRequestProperties();

--EXPECT--
Is pull request:
string(3) "Yes"
Branch:
string(0) ""
Target branch:
string(0) ""
