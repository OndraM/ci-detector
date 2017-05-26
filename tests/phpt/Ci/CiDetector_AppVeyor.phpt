--TEST--
Detect properties of AppVeyor

--ENV--
APPVEYOR=True
APPVEYOR_ACCOUNT_NAME=OndraM
APPVEYOR_API_URL=http://localhost:1563/
APPVEYOR_BUILD_FOLDER=C:\projects\ci-detector
APPVEYOR_BUILD_ID=8791806
APPVEYOR_BUILD_NUMBER=37
APPVEYOR_BUILD_VERSION=1.3.37
APPVEYOR_BUILD_WORKER_IMAGE=Visual Studio 2017
APPVEYOR_JOB_ID=kjsgl2y74ky79q5g
APPVEYOR_JOB_NUMBER=1
APPVEYOR_PROJECT_ID=321955
APPVEYOR_PROJECT_NAME=ci-detector
APPVEYOR_PROJECT_SLUG=ci-detector
APPVEYOR_REPO_BRANCH=branchname
APPVEYOR_REPO_COMMIT=11cc783de14cf438a41a60af7cd148a43da74cce
APPVEYOR_REPO_COMMIT_AUTHOR=Ondrej Machulda
APPVEYOR_REPO_COMMIT_AUTHOR_EMAIL=ondrej.machulda@gmail.com
APPVEYOR_REPO_COMMIT_MESSAGE=Foo bar message
APPVEYOR_REPO_COMMIT_TIMESTAMP=2017-05-26T14:48:13.0000000Z
APPVEYOR_REPO_NAME=OndraM/ci-detector
APPVEYOR_REPO_PROVIDER=gitHub
APPVEYOR_REPO_SCM=git
APPVEYOR_REPO_TAG=false
APPVEYOR_URL=https://ci.appveyor.com
CI=True
HOMEDRIVE=C:
HOMEPATH=\Users\appveyor
OS=Windows_NT
Platform=x64
SystemDrive=C:
SystemRoot=C:\Windows
USERDOMAIN=APPVYR-WIN
USERDOMAIN_ROAMINGPROFILE=APPVYR-WIN
USERNAME=appveyor
windir=C:\Windows

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
string(29) "OndraM\CiDetector\Ci\AppVeyor"
CI name:
string(8) "AppVeyor"
Build number:
string(2) "37"
Build url:
string(63) "https://ci.appveyor.com/project/OndraM/ci-detector/build/1.3.37"
Git commit:
string(40) "11cc783de14cf438a41a60af7cd148a43da74cce"
Git branch:
string(10) "branchname"
Repository url:
string(0) ""
