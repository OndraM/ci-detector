--TEST--
Detect properties of Jenkins CI

--ENV--
BUILD_URL=http://jenkins.foo/job/foo_job_name/1337/
HUDSON_SERVER_COOKIE=foo
BUILD_TAG=jenkins-foo_job_name-1337
GIT_PREVIOUS_COMMIT=783de14cf438a41a60af7cd148a43da74ccd11cc
GIT_COMMIT=11cc783de14cf438a41a60af7cd148a43da74ccd
WORKSPACE=/srv/jenkins/workspace/foo_job_name
JOB_URL=http://jenkins.foo/job/foo_job_name/
JOB_NAME=foo_job_name
BUILD_DISPLAY_NAME=#1337
JENKINS_URL=http://jenkins.foo/
BUILD_CAUSE=MANUALTRIGGER
BUILD_ID=2016-07-29_20-30-09
GIT_BRANCH=origin/branchname
GIT_URL=ssh://git@gitserver:7999/project/repo.git
JENKINS_SERVER_COOKIE=foobar
BUILD_NUMBER=1337

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
string(28) "OndraM\CiDetector\Ci\Jenkins"
CI name:
string(7) "Jenkins"
Build number:
string(4) "1337"
Build url:
string(41) "http://jenkins.foo/job/foo_job_name/1337/"
Git commit:
string(40) "11cc783de14cf438a41a60af7cd148a43da74ccd"
Git branch:
string(17) "origin/branchname"
Repository url:
string(41) "ssh://git@gitserver:7999/project/repo.git"
