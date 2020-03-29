--TEST--
AWS CodeBuild: Detect properties of PR build

--ENV--
NODE_10_VERSION=10.19.0
ANDROID_SDK_MANAGER_VER=4333796
MAVEN_DOWNLOAD_SHA512=c35a1803a6e70a126e80b2b3ae33eed961f83ed74d18fcd16909b2d44d7dada3203f1ffe726c17ef8dcca2dcaa9fca676987befeadc9b9f759967a8cb77181c0
MAVEN_OPTS=-Dmaven.wagon.httpconnectionManager.maxPerRoute=2
CODEBUILD_LAST_EXIT=0
CODEBUILD_START_TIME=1585485347003
ANT_VERSION=1.10.6
CODEBUILD_BMR_URL=https://CODEBUILD_AGENT:3000
NODE_12_VERSION=12.16.1
JRE_8_HOME=/usr/lib/jvm/java-1.8.0-amazon-corretto/jre
DOCKER_BUCKET=download.docker.com
CODEBUILD_SOURCE_VERSION=pr/1486
ANDROID_SDK_PLATFORM_TOOLS_28=platforms;android-28
CODEBUILD_AGENT_ENDPOINT=http://127.0.0.1:7831
HOSTNAME=e62acebcd541
CODEBUILD_BUILD_ID=project-api-pr:cf59169d-ddc7-4292-a5ab-06e6f5b8c8c4
CODEBUILD_KMS_KEY_ID=arn:aws:kms:eu-west-1:911074024513:alias/aws/s3
JDK_DOWNLOAD_TAR=java-11-amazon-corretto-jdk.tar
POWERSHELL_DOWNLOAD_URL=https://github.com/PowerShell/PowerShell/releases/download/v6.2.1/powershell-6.2.1-linux-x64.tar.gz
PYTHON_PIP_VERSION=19.3.1
JRE_11_HOME=/opt/jvm/amazon-corretto-11
SRC_DIR=/usr/src
HOME=/root
OLDPWD=/codebuild/readonly
POWERSHELL_VERSION=6.2.1
JRE_HOME=/opt/jvm/amazon-corretto-11
CODEBUILD_GOPATH=/codebuild/output/src789268538
CODEBUILD_WEBHOOK_ACTOR_ACCOUNT_ID=461164
CODEBUILD_CI=true
GOENV_DISABLE_GOPATH=1
CODEBUILD_RESOLVED_SOURCE_VERSION=c150e3a3d2d89acd1b1222bf6f7a50b45a4218c0
CODEBUILD_WEBHOOK_TRIGGER=pr/1486
CODEBUILD_BUILD_NUMBER=558
CODEBUILD_BUILD_SUCCEEDING=1
GRADLE_DOWNLOADS_SHA256=14cd15fc8cc8705bd69dcfa3c8fefb27eb7027f5de4b47a8b279218f76895a91 5.4.1\n336b6898b491f6334502d8074a6b8c2d73ed83b92123106bd4bf837f04111043 4.10.3
CODEBUILD_BUILD_ARN=arn:aws:codebuild:eu-west-1:911074024513:build/project-api-pr:cf59169d-ddc7-4292-a5ab-06e6f5b8c8c4
AWS_CONTAINER_CREDENTIALS_RELATIVE_URI=/v2/credentials/69acda4f-0ac4-462f-a92e-9c82be9f0abd
MAVEN_HOME=/opt/maven
AWS_EXECUTION_ENV=AWS_ECS_EC2
ANT_DOWNLOAD_SHA512=c1a9694c3018e248000ff6f46d48af85f537ef3935e0d5256543c58a240084c0aff5289fd9e94cbc40d5442f3cc43592398047f2548fded40d9882be2b40750d
DOCKER_SHA256=c3c8833e227b61fe6ce0bc5c17f97fa547035bef4ef17cf6601f30b0f20f4ce5
RUBY_BUILD_SRC_DIR=/usr/local/rbenv/plugins/ruby-build
CODEBUILD_INITIATOR=GitHub-Hookshot/fc9e274
INSTALLED_GRADLE_VERSIONS=4.10.3 5.4.1
GRADLE_PATH=/usr/src/gradle
PROJECT_NAME=project-api
DIND_COMMIT=3b5fac462d21ca164b3778647420016315289034
AWS_DEFAULT_REGION=eu-west-1
AWS_ECR_CODEBUILD_URI=911074024513.dkr.ecr.eu-west-1.amazonaws.com/project-api-codebuild
PHP_73_VERSION=7.3.13
CODEBUILD_WEBHOOK_EVENT=PULL_REQUEST_CREATED
ECS_CONTAINER_METADATA_URI=http://169.254.170.2/v3/2cc84909-4e47-4bf1-a428-9bc1cc63da61
PHP_74_VERSION=7.4.1
CODEBUILD_EXECUTION_ROLE_BUILD=
DOTNET_31_SDK_VERSION=3.1.102
PATH=/root/.phpenv/shims:/root/.phpenv/bin:/root/.goenv/shims:/root/.goenv/bin:/go/bin:/root/.phpenv/shims:/root/.phpenv/bin:/root/.pyenv/shims:/root/.pyenv/bin:/root/.rbenv/shims:/usr/local/rbenv/bin:/usr/local/rbenv/shims:/root/.dotnet/:/root/.dotnet/tools/:/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/opt/tools:/usr/local/android-sdk-linux/tools:/usr/local/android-sdk-linux/tools/bin:/usr/local/android-sdk-linux/platform-tools
N_SRC_DIR=/usr/src/n
POWERSHELL_DOWNLOAD_SHA=E8287687C99162BF70FEFCC2E492F3B54F80BE880D86B9A0EC92C71B05C40013
RUBY_26_VERSION=2.6.5
CODEBUILD_LOG_PATH=cf59169d-ddc7-4292-a5ab-06e6f5b8c8c4
RUBY_27_VERSION=2.7.0
SBT_VERSION=1.2.8
ANDROID_SDK_EXTRAS=extras;android;m2repository extras;google;m2repository extras;google;google_play_services
DOCKER_CHANNEL=stable
AWS_DEFAULT_OUTPUT=json
CODEBUILD_BUILD_IMAGE=aws/codebuild/standard:4.0
CODEBUILD_SOURCE_REPO_URL=https://github.com/project-app/project-api.git
ANDROID_SDK_MANAGER_SHA256=92ffee5a1d98d856634e8b71132e8a95d96c83a63fde1099be3d86df3106def9
GITVERSION_VERSION=5.1.2
ANDROID_SDK_BUILD_TOOLS=build-tools;29.0.2
AWS_ACCOUNT_ID=911074024513
DEBIAN_FRONTEND=noninteractive
GOPATH=/go:/codebuild/output/src789268538
CODEBUILD_WEBHOOK_HEAD_REF=refs/heads/test/evn
AWS_REGION=eu-west-1
CODEBUILD_BUILD_URL=https://eu-west-1.console.aws.amazon.com/codebuild/home?region=eu-west-1#/builds/project-api-pr:cf59169d-ddc7-4292-a5ab-06e6f5b8c8c4/view/new
JAVA_8_HOME=/usr/lib/jvm/java-1.8.0-amazon-corretto
GRADLE_VERSION=5.4.1
DOCKER_VERSION=19.03.3
CODEBUILD_SRC_DIR=/codebuild/output/src789268538/src/github.com/project-app/project-api
CODEBUILD_PROJECT_UUID=83afc255-1a5a-4ded-a73e-105110a67956
MAVEN_VERSION=3.6.3
CODEBUILD_AUTH_TOKEN=9e925bea-f9d7-439a-920c-6f744548748d
CODEBUILD_CONTAINER_NAME=default
JAVA_11_HOME=/opt/jvm/amazon-corretto-11
ANDROID_SDK_BUILD_TOOLS_28=build-tools;28.0.3
JDK_8_HOME=/usr/lib/jvm/java-1.8.0-amazon-corretto
JDK_DOWNLOAD_SHA256=4cc9e65e6e3d036b18cfd5fd6c7843d48244e44a60350f7e45036f4825bd3812
JAVA_HOME=/opt/jvm/amazon-corretto-11
DOCKER_COMPOSE_VERSION=1.24.0
PWD=/codebuild/output/src789268538/src/github.com/project-app/project-api
CODEBUILD_FE_REPORT_ENDPOINT=https://codebuild.eu-west-1.amazonaws.com/
PYTHON_37_VERSION=3.7.6
ANDROID_HOME=/usr/local/android-sdk-linux
PYTHON_38_VERSION=3.8.1
GOLANG_12_VERSION=1.12.17
JDK_11_HOME=/opt/jvm/amazon-corretto-11
ANDROID_SDK_PLATFORM_TOOLS=platforms;android-29
CODEBUILD_WEBHOOK_BASE_REF=refs/heads/develop
RBENV_SRC_DIR=/usr/local/rbenv
GOLANG_13_VERSION=1.13.8
NUGET_XMLDOC_MODE=skip
JDK_HOME=/opt/jvm/amazon-corretto-11
GOLANG_14_VERSION=1.14.0


--FILE--
<?php

require __DIR__ . '/../../../vendor/autoload.php';

$ci = (new OndraM\CiDetector\CiDetector())->detect();
echo "Is pull request:\n";
var_dump($ci->isPullRequest()->describe());
echo "Git branch:\n";
var_dump($ci->getGitBranch());

--EXPECT--
Is pull request:
string(3) "Yes"
Git branch:
string(8) "test/evn"
