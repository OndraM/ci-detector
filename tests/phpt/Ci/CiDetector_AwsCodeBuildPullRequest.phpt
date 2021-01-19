--TEST--
AWS CodeBuild: Detect properties of PR build

--ENV--
AWS_ACCOUNT_ID=911074024513
AWS_CONTAINER_CREDENTIALS_RELATIVE_URI=/v2/credentials/69acda4f-0ac4-462f-a92e-9c82be9f0abd
AWS_DEFAULT_OUTPUT=json
AWS_DEFAULT_REGION=eu-west-1
AWS_ECR_CODEBUILD_URI=911074024513.dkr.ecr.eu-west-1.amazonaws.com/project-api-codebuild
AWS_EXECUTION_ENV=AWS_ECS_EC2
AWS_REGION=eu-west-1
CODEBUILD_AGENT_ENDPOINT=http://127.0.0.1:7831
CODEBUILD_AUTH_TOKEN=9e925bea-f9d7-439a-920c-6f744548748d
CODEBUILD_BMR_URL=https://CODEBUILD_AGENT:3000
CODEBUILD_BUILD_ARN=arn:aws:codebuild:eu-west-1:911074024513:build/project-api-pr:cf59169d-ddc7-4292-a5ab-06e6f5b8c8c4
CODEBUILD_BUILD_ID=project-api-pr:cf59169d-ddc7-4292-a5ab-06e6f5b8c8c4
CODEBUILD_BUILD_IMAGE=aws/codebuild/standard:4.0
CODEBUILD_BUILD_NUMBER=558
CODEBUILD_BUILD_SUCCEEDING=1
CODEBUILD_BUILD_URL=https://eu-west-1.console.aws.amazon.com/codebuild/home?region=eu-west-1#/builds/project-api-pr:cf59169d-ddc7-4292-a5ab-06e6f5b8c8c4/view/new
CODEBUILD_CI=true
CODEBUILD_CONTAINER_NAME=default
CODEBUILD_EXECUTION_ROLE_BUILD=
CODEBUILD_FE_REPORT_ENDPOINT=https://codebuild.eu-west-1.amazonaws.com/
CODEBUILD_INITIATOR=GitHub-Hookshot/fc9e274
CODEBUILD_KMS_KEY_ID=arn:aws:kms:eu-west-1:911074024513:alias/aws/s3
CODEBUILD_LAST_EXIT=0
CODEBUILD_LOG_PATH=cf59169d-ddc7-4292-a5ab-06e6f5b8c8c4
CODEBUILD_PROJECT_UUID=83afc255-1a5a-4ded-a73e-105110a67956
CODEBUILD_RESOLVED_SOURCE_VERSION=c150e3a3d2d89acd1b1222bf6f7a50b45a4218c0
CODEBUILD_SOURCE_REPO_URL=https://github.com/project-app/project-api.git
CODEBUILD_SOURCE_VERSION=pr/1486
CODEBUILD_SRC_DIR=/codebuild/output/src789268538/src/github.com/project-app/project-api
CODEBUILD_START_TIME=1585485347003
CODEBUILD_WEBHOOK_ACTOR_ACCOUNT_ID=461164
CODEBUILD_WEBHOOK_BASE_REF=refs/heads/develop
CODEBUILD_WEBHOOK_EVENT=PULL_REQUEST_CREATED
CODEBUILD_WEBHOOK_HEAD_REF=refs/heads/test/pr-branch
CODEBUILD_WEBHOOK_TRIGGER=pr/1486
DEBIAN_FRONTEND=noninteractive
DIND_COMMIT=3b5fac462d21ca164b3778647420016315289034
DOTNET_31_SDK_VERSION=3.1.102
ECS_CONTAINER_METADATA_URI=http://169.254.170.2/v3/2cc84909-4e47-4bf1-a428-9bc1cc63da61
GITVERSION_VERSION=5.1.2
HOME=/root
HOSTNAME=e62acebcd541
NUGET_XMLDOC_MODE=skip
OLDPWD=/codebuild/readonly
PHP_73_VERSION=7.3.13
PHP_74_VERSION=7.4.1
PROJECT_NAME=project-api
PWD=/codebuild/output/src789268538/src/github.com/project-app/project-api
SRC_DIR=/usr/src

--FILE--
<?php

require __DIR__ . '/../../../vendor/autoload.php';

$ci = (new OndraM\CiDetector\CiDetector())->detect();
echo "Is pull request:\n";
var_dump($ci->isPullRequest()->describe());
echo "Git branch:\n";
var_dump($ci->getBranch());
echo "Target branch:\n";
var_dump($ci->getTargetBranch());

--EXPECT--
Is pull request:
string(3) "Yes"
Git branch:
string(14) "test/pr-branch"
Target branch:
string(0) ""
