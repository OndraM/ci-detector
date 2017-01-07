--TEST--
Detect properties of Jenkins CI

--ENV--
bamboo_buildResultsUrl=https://bamboo.foo.bar/browse/KEY-FOO-JOB1-3
bamboo_resultsUrl=https://bamboo.foo.bar/browse/KEY-FOO-JOB1-3
bamboo_shortPlanName=Plan Name
bamboo_buildNumber=3
bamboo_buildResultKey=KEY-FOO-JOB1-3
bamboo_buildPlanName=Plan Name - Foo Lorem ipsum - Default Job
bamboo_shortJobName=Default Job
bamboo_planName=Plan Name - Foo Lorem ipsum
bamboo_planKey=KEY-FOO
bamboo_planRepository_1_revision=3e01b71b3434c0441b24563f1c180bc615f9467d
bamboo_planRepository_1_repositoryUrl=ssh://git@gitserver:7999/project/repo.git
bamboo_planRepository_1_previousRevision=e01b71b3434c0441b24563f1c180bc615f9467d3
bamboo_planRepository_1_branch=branch-name
bamboo_planRepository_1_name=Repo name
bamboo_repository_2818049_git_repositoryUrl=ssh://git@gitserver:7999/project/repo.git
bamboo_repository_2818049_revision_number=3e01b71b3434c0441b24563f1c180bc615f9467d
bamboo_repository_2818049_previous_revision_number=e01b71b3434c0441b24563f1c180bc615f9467d3
bamboo_repository_2818049_git_branch=branch-name
bamboo_repository_2818049_name=Repo name
bamboo_repository_2818049_branch_name=branch-name
bamboo_planRepository_revision=3e01b71b3434c0441b24563f1c180bc615f9467d
bamboo_planRepository_previousRevision=e01b71b3434c0441b24563f1c180bc615f9467d3
bamboo_planRepository_repositoryUrl=ssh://git@gitserver:7999/project/repo.git
bamboo_planRepository_name=Repo name
bamboo_planRepository_branchName=branch-name
bamboo_planRepository_branch=branch-name
bamboo_buildTimeStamp=2016-07-29T22:48:02.891+02:00
bamboo_shortPlanKey=foo
bamboo_buildKey=KEY-FOO-JOB1
bamboo_shortJobKey=JOB1

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
string(27) "OndraM\CiDetector\Ci\Bamboo"
CI name:
string(6) "Bamboo"
Build number:
string(1) "3"
Build url:
string(44) "https://bamboo.foo.bar/browse/KEY-FOO-JOB1-3"
Git commit:
string(40) "3e01b71b3434c0441b24563f1c180bc615f9467d"
Git branch:
string(11) "branch-name"
Repository url:
string(41) "ssh://git@gitserver:7999/project/repo.git"
