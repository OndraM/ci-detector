--TEST--
Jenkins CI: Detect properties

--ENV--
BUILD_CAUSE=MANUALTRIGGER
BUILD_DISPLAY_NAME=#1337
BUILD_ID=2016-07-29_20-30-09
BUILD_NUMBER=1337
BUILD_TAG=jenkins-foo_job_name-1337
BUILD_URL=http://jenkins.foo/job/foo_job_name/1337/
GIT_BRANCH=origin/branchname
GIT_COMMIT=11cc783de14cf438a41a60af7cd148a43da74ccd
GIT_PREVIOUS_COMMIT=783de14cf438a41a60af7cd148a43da74ccd11cc
GIT_URL=ssh://git@gitserver:7999/project/repo.git
HUDSON_SERVER_COOKIE=foo
JENKINS_SERVER_COOKIE=foobar
JENKINS_URL=http://jenkins.foo/
JOB_NAME=foo_job_name
JOB_URL=http://jenkins.foo/job/foo_job_name/
WORKSPACE=/srv/jenkins/workspace/foo_job_name

--FILE--
<?php

require __DIR__ . '/../../../vendor/autoload.php';

\OndraM\CiDetector\Ci\PropertiesPrinterHelper::printAllProperties();

--EXPECT--
Is CI detected:
bool(true)
Class:
string(28) "OndraM\CiDetector\Ci\Jenkins"
CI name:
string(7) "Jenkins"
Is pull request:
string(5) "Maybe"
Build number:
string(4) "1337"
Build url:
string(41) "http://jenkins.foo/job/foo_job_name/1337/"
Commit:
string(40) "11cc783de14cf438a41a60af7cd148a43da74ccd"
Branch:
string(17) "origin/branchname"
Repository name:
string(0) ""
Repository url:
string(41) "ssh://git@gitserver:7999/project/repo.git"
