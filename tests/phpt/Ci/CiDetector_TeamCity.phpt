--TEST--
TeamCity: Detect properties

--ENV--
BUILD_NUMBER=5
BUILD_VCS_NUMBER_CiDetector_HttpsGithubComOndraMCiDetectorRefsHeadsMain=1ee546f280c093f1e24ecc149db4a0a100c8d609
BUILD_VCS_NUMBER=1ee546f280c093f1e24ecc149db4a0a100c8d609
HOSTNAME=d4df8dab12df
TEAMCITY_BUILD_PROPERTIES_FILE=/opt/TeamCity/buildAgent/temp/buildTmp/teamcity.build7945248142905164474.properties
TEAMCITY_BUILDCONF_NAME=Build
TEAMCITY_CAPTURE_ENV="/usr/lib/jvm/java-8-openjdk-amd64/jre/bin/java" -jar "/opt/TeamCity/buildAgent/plugins/environment-fetcher/bin/env-fetcher.jar"
TEAMCITY_DATA_PATH=/var/lib/teamcity
TEAMCITY_GIT_PATH=/usr/bin/git
TEAMCITY_PROCESS_FLOW_ID=376437994027122
TEAMCITY_PROCESS_PARENT_FLOW_ID=
TEAMCITY_PROJECT_NAME=Ci Detector
TEAMCITY_VERSION=10.0 (build 42002)

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
echo "Repository name:\n";
var_dump($ci->getRepositoryName());
echo "Repository url:\n";
var_dump($ci->getRepositoryUrl());

--EXPECT--
Is CI detected:
bool(true)
Class:
string(29) "OndraM\CiDetector\Ci\TeamCity"
CI name:
string(8) "TeamCity"
Is pull request:
string(5) "Maybe"
Build number:
string(1) "5"
Build url:
string(0) ""
Git commit:
string(40) "1ee546f280c093f1e24ecc149db4a0a100c8d609"
Git branch:
string(0) ""
Repository name:
string(0) ""
Repository url:
string(0) ""
