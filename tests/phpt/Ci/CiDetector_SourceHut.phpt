--TEST--
SourceHut: Detect properties

--ENV--
CI_NAME=sourcehut
HOME=/home/build
JOB_ID=484504
JOB_URL=https://builds.sr.ht/~ancarda/job/484504
LOGNAME=build
MAIL=/var/mail/build
PATH=/bin:/usr/bin:/sbin:/usr/sbin
PWD=/home/build
SHELL=/bin/sh
SHLVL=2
SSH_CLIENT=172.17.0.1 38618 22
SSH_CONNECTION=172.17.0.1 38618 10.0.2.15 22
SSH_TTY=/dev/pts/0
TERM=xterm-256color
USER=build

--FILE--
<?php

require __DIR__ . '/../../../vendor/autoload.php';

\OndraM\CiDetector\Ci\PropertiesPrinterHelper::printAllProperties();

--EXPECT--
Is CI detected:
bool(true)
Class:
string(30) "OndraM\CiDetector\Ci\SourceHut"
CI name:
string(9) "SourceHut"
Is pull request:
string(2) "No"
Build number:
string(6) "484504"
Build url:
string(40) "https://builds.sr.ht/~ancarda/job/484504"
Commit:
string(0) ""
Branch:
string(0) ""
Target branch:
string(0) ""
Repository name:
string(0) ""
Repository url:
string(0) ""
