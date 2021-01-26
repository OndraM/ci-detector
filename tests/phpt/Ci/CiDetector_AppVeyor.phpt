--TEST--
AppVeyor: Detect properties

--ENV--
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
APPVEYOR_REPO_COMMIT_AUTHOR_EMAIL=ondrej.machulda@gmail.com
APPVEYOR_REPO_COMMIT_AUTHOR=Ondrej Machulda
APPVEYOR_REPO_COMMIT_MESSAGE=Foo bar message
APPVEYOR_REPO_COMMIT_TIMESTAMP=2017-05-26T14:48:13.0000000Z
APPVEYOR_REPO_COMMIT=11cc783de14cf438a41a60af7cd148a43da74cce
APPVEYOR_REPO_NAME=OndraM/ci-detector
APPVEYOR_REPO_PROVIDER=gitHub
APPVEYOR_REPO_SCM=git
APPVEYOR_REPO_TAG=false
APPVEYOR_URL=https://ci.appveyor.com
APPVEYOR=True
CI=True
HOMEDRIVE=C:
HOMEPATH=\Users\appveyor
OS=Windows_NT
Platform=x64
SystemDrive=C:
SystemRoot=C:\Windows
USERDOMAIN_ROAMINGPROFILE=APPVYR-WIN
USERDOMAIN=APPVYR-WIN
USERNAME=appveyor
windir=C:\Windows

--FILE--
<?php

require __DIR__ . '/../../../vendor/autoload.php';

\OndraM\CiDetector\Ci\PropertiesPrinterHelper::printAllProperties();

--EXPECT--
Is CI detected:
bool(true)
Class:
string(29) "OndraM\CiDetector\Ci\AppVeyor"
CI name:
string(8) "AppVeyor"
Is pull request:
string(2) "No"
Build number:
string(2) "37"
Build url:
string(65) "https://ci.appveyor.com/project/OndraM/ci-detector/builds/8791806"
Git commit:
string(40) "11cc783de14cf438a41a60af7cd148a43da74cce"
Git branch:
string(10) "branchname"
Repository name:
string(18) "OndraM/ci-detector"
Repository url:
string(0) ""
