--TEST--
Bamboo: Detect properties

--ENV--
bamboo_agentId=360449
bamboo_agentWorkingDirectory=/var/atlassian/application-data/bamboo/xml-data/build-dir
bamboo_build_working_directory=/var/atlassian/application-data/bamboo/xml-data/build-dir/CD-CDOB-JOB1
bamboo_buildFailed=false
bamboo_buildKey=CD-CDOB-JOB1
bamboo_buildNumber=1
bamboo_buildPlanName=Plan Name - Foo Lorem ipsum
bamboo_buildResultKey=CD-CDOB-JOB1-1
bamboo_buildResultsUrl=https://bamboo.foo.bar/browse/CD-CDOB-JOB1-1
bamboo_buildTimeStamp=2020-05-07T16:35:26.505Z
bamboo_capability_system_git_executable=/usr/bin/git
bamboo_capability_system_jdk_JDK_1_8_0_242=/opt/java/openjdk
bamboo_capability_system_jdk_JDK_1_8=/opt/java/openjdk
bamboo_capability_system_jdk_JDK=/opt/java/openjdk
bamboo_git_cache_directory=/var/atlassian/application-data/bamboo/xml-data/build-dir/_git-repositories-cache
BAMBOO_GROUP=bamboo
bamboo_hg_cache_directory=/var/atlassian/application-data/bamboo/xml-data/build-dir/_hg-repositories-cache
BAMBOO_HOME=/var/atlassian/application-data/bamboo
BAMBOO_INSTALL_DIR=/opt/atlassian/bamboo
BAMBOO_JMS_CONNECTION_PORT=54663
bamboo_plan_storageTag=plan-589829
bamboo_planKey=CD-CDOB
bamboo_planName=Plan Name - Foo Lorem ipsum
bamboo_planRepository_1_branch=main
bamboo_planRepository_1_branchDisplayName=main
bamboo_planRepository_1_branchName=main
bamboo_planRepository_1_name=My repo name
bamboo_planRepository_1_repositoryUrl=ssh://git@bitbucket.org/foo/ci-detector
bamboo_planRepository_1_revision=4e7f5fcf7802369224dba2095551c35e1e389551
bamboo_planRepository_1_type=bbCloud
bamboo_planRepository_1_username=
bamboo_planRepository_branch=main
bamboo_planRepository_branchDisplayName=main
bamboo_planRepository_branchName=main
bamboo_planRepository_name=My repo name
bamboo_planRepository_repositoryUrl=ssh://git@bitbucket.org/foo/ci-detector
bamboo_planRepository_revision=4e7f5fcf7802369224dba2095551c35e1e389551
bamboo_planRepository_type=bbCloud
bamboo_planRepository_username=
bamboo_repository_524293_branch_name=main
bamboo_repository_524293_name=My repo name
bamboo_repository_524293_revision_number=4e7f5fcf7802369224dba2095551c35e1e389551
bamboo_repository_branch_name=main
bamboo_repository_name=My repo name
bamboo_repository_revision_number=4e7f5fcf7802369224dba2095551c35e1e389551
bamboo_resultsUrl=https://bamboo.foo.bar/browse/CD-CDOB-JOB1-1
bamboo_shortJobKey=JOB1
bamboo_shortJobName=Default Job
bamboo_shortPlanKey=CDOB
bamboo_shortPlanName=Foo Lorem ipsum
bamboo_tmp_directory=/var/atlassian/application-data/bamboo/temp
BAMBOO_USER_HOME=/home/bamboo
BAMBOO_USER=bamboo
bamboo_working_directory=/var/atlassian/application-data/bamboo/xml-data/build-dir/CD-CDOB-JOB1


--FILE--
<?php

require __DIR__ . '/../../../vendor/autoload.php';

\OndraM\CiDetector\Ci\PropertiesPrinterHelper::printAllProperties();

--EXPECT--
Is CI detected:
bool(true)
Class:
string(27) "OndraM\CiDetector\Ci\Bamboo"
CI name:
string(6) "Bamboo"
Is pull request:
string(2) "No"
Build number:
string(1) "1"
Build url:
string(44) "https://bamboo.foo.bar/browse/CD-CDOB-JOB1-1"
Git commit:
string(40) "4e7f5fcf7802369224dba2095551c35e1e389551"
Git branch:
string(4) "main"
Repository name:
string(12) "My repo name"
Repository url:
string(39) "ssh://git@bitbucket.org/foo/ci-detector"
