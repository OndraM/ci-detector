--TEST--
Bamboo: Detect properties of PR build

--ENV--
bamboo_agentId=360449
bamboo_agentWorkingDirectory=/var/atlassian/application-data/bamboo/xml-data/build-dir
bamboo_build_working_directory=/var/atlassian/application-data/bamboo/xml-data/build-dir/CD-CDOB0-JOB1
bamboo_buildFailed=false
bamboo_buildKey=CD-CDOB0-JOB1
bamboo_buildNumber=1
bamboo_buildPlanName=Plan Name - Foo Lorem ipsum - pr-branch - Default Job
bamboo_buildResultKey=CD-CDOB0-JOB1-1
bamboo_buildResultsUrl=https://bamboo.foo.bar/browse/CD-CDOB0-JOB1-1
bamboo_buildTimeStamp=2020-05-07T17:00:48.185Z
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
bamboo_plan_storageTag=plan-589831
bamboo_planKey=CD-CDOB0
bamboo_planName=Plan Name - Foo Lorem ipsum - pr-branch
bamboo_planRepository_1_branch=pr-branch
bamboo_planRepository_1_branchDisplayName=pr-branch
bamboo_planRepository_1_branchName=pr-branch
bamboo_planRepository_1_name=My repo name
bamboo_planRepository_1_previousRevision=d05c681b5018c8ce8110ee7823a56b688ca67aa1
bamboo_planRepository_1_repositoryUrl=ssh://git@bitbucket.org/foo/ci-detector
bamboo_planRepository_1_revision=d05c681b5018c8ce8110ee7823a56b688ca67aa1
bamboo_planRepository_1_type=bbCloud
bamboo_planRepository_1_username=
bamboo_planRepository_branch=pr-branch
bamboo_planRepository_branchDisplayName=pr-branch
bamboo_planRepository_branchName=pr-branch
bamboo_planRepository_name=My repo name
bamboo_planRepository_previousRevision=d05c681b5018c8ce8110ee7823a56b688ca67aa1
bamboo_planRepository_repositoryUrl=ssh://git@bitbucket.org/foo/ci-detector
bamboo_planRepository_revision=d05c681b5018c8ce8110ee7823a56b688ca67aa1
bamboo_planRepository_type=bbCloud
bamboo_planRepository_username=
bamboo_repository_524294_branch_name=pr-branch
bamboo_repository_524294_name=My repo name
bamboo_repository_524294_previous_revision_number=d05c681b5018c8ce8110ee7823a56b688ca67aa1
bamboo_repository_524294_revision_number=d05c681b5018c8ce8110ee7823a56b688ca67aa1
bamboo_repository_branch_name=pr-branch
bamboo_repository_name=My repo name
bamboo_repository_pr_key=1
bamboo_repository_pr_sourceBranch=pr-branch
bamboo_repository_pr_targetBranch=main
bamboo_repository_previous_revision_number=d05c681b5018c8ce8110ee7823a56b688ca67aa1
bamboo_repository_revision_number=d05c681b5018c8ce8110ee7823a56b688ca67aa1
bamboo_resultsUrl=https://bamboo.foo.bar/browse/CD-CDOB0-JOB1-1
bamboo_shortJobKey=JOB1
bamboo_shortJobName=Default Job
bamboo_shortPlanKey=CDOB0
bamboo_shortPlanName=Plan Name
bamboo_tmp_directory=/var/atlassian/application-data/bamboo/temp
BAMBOO_USER_HOME=/home/bamboo
BAMBOO_USER=bamboo
bamboo_working_directory=/var/atlassian/application-data/bamboo/xml-data/build-dir/CD-CDOB0-JOB1

--FILE--
<?php

require __DIR__ . '/../../../vendor/autoload.php';

\OndraM\CiDetector\Ci\PropertiesPrinterHelper::printPullRequestProperties();

--EXPECT--
Is pull request:
string(3) "Yes"
Git branch:
string(9) "pr-branch"
Target branch:
string(4) "main"
