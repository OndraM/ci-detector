--TEST--
AWS CodeBuild: Detect properties

--ENV--
CODEBUILD_LAST_EXIT=0
CODEBUILD_START_TIME=1585485986820
CODEBUILD_BMR_URL=https://CODEBUILD_AGENT:3000
CODEBUILD_SOURCE_VERSION=test/evn
CODEBUILD_AGENT_ENDPOINT=http://127.0.0.1:7831
HOSTNAME=202d63ee90d4
CODEBUILD_BUILD_ID=project-api-pr:449b6959-c0f7-41ac-aac8-7fec365d3004
CODEBUILD_KMS_KEY_ID=arn:aws:kms:eu-west-1:911074024513:alias/aws/s3
SRC_DIR=/usr/src
HOME=/root
OLDPWD=/codebuild/readonly
CODEBUILD_CI=true
CODEBUILD_RESOLVED_SOURCE_VERSION=c150e3a3d2d89acd1b1222bf6f7a50b45a4218c0
CODEBUILD_BUILD_NUMBER=559
CODEBUILD_BUILD_SUCCEEDING=1
CODEBUILD_BUILD_ARN=arn:aws:codebuild:eu-west-1:911074024513:build/project-api-pr:449b6959-c0f7-41ac-aac8-7fec365d3004
AWS_CONTAINER_CREDENTIALS_RELATIVE_URI=/v2/credentials/9ab844f8-d292-41ec-b0b9-3895d1901405
AWS_EXECUTION_ENV=AWS_ECS_EC2
CODEBUILD_INITIATOR=radim
PROJECT_NAME=project-api
DIND_COMMIT=3b5fac462d21ca164b3778647420016315289034
AWS_DEFAULT_REGION=eu-west-1
AWS_ECR_CODEBUILD_URI=911074024513.dkr.ecr.eu-west-1.amazonaws.com/project-api-codebuild
PHP_73_VERSION=7.3.13
ECS_CONTAINER_METADATA_URI=http://169.254.170.2/v3/788d7be3-4280-454e-8f3e-ab9ee035ee04
PHP_74_VERSION=7.4.1
CODEBUILD_EXECUTION_ROLE_BUILD=
DOTNET_31_SDK_VERSION=3.1.102
CODEBUILD_LOG_PATH=449b6959-c0f7-41ac-aac8-7fec365d3004
AWS_DEFAULT_OUTPUT=json
CODEBUILD_BUILD_IMAGE=aws/codebuild/standard:4.0
CODEBUILD_SOURCE_REPO_URL=https://github.com/project-app/project-api.git
GITVERSION_VERSION=5.1.2
AWS_ACCOUNT_ID=911074024513
DEBIAN_FRONTEND=noninteractive
AWS_REGION=eu-west-1
CODEBUILD_BUILD_URL=https://eu-west-1.console.aws.amazon.com/codebuild/home?region=eu-west-1#/builds/project-api-pr:449b6959-c0f7-41ac-aac8-7fec365d3004/view/new
CODEBUILD_SRC_DIR=/codebuild/output/src341076892/src/github.com/project-app/project-api
CODEBUILD_PROJECT_UUID=83afc255-1a5a-4ded-a73e-105110a67956
CODEBUILD_AUTH_TOKEN=ce79b1c8-ee3b-4981-bb63-86162d6548b2
CODEBUILD_CONTAINER_NAME=default
PWD=/codebuild/output/src341076892/src/github.com/project-app/project-api
CODEBUILD_FE_REPORT_ENDPOINT=https://codebuild.eu-west-1.amazonaws.com/
NUGET_XMLDOC_MODE=skip

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
string(33) "OndraM\CiDetector\Ci\AwsCodeBuild"
CI name:
string(13) "AWS CodeBuild"
Is pull request:
string(2) "No"
Build number:
string(3) "559"
Build url:
string(141) "https://eu-west-1.console.aws.amazon.com/codebuild/home?region=eu-west-1#/builds/project-api-pr:449b6959-c0f7-41ac-aac8-7fec365d3004/view/new"
Git commit:
string(40) "c150e3a3d2d89acd1b1222bf6f7a50b45a4218c0"
Git branch:
string(0) ""
Repository name:
string(0) ""
Repository url:
string(46) "https://github.com/project-app/project-api.git"
