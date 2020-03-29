--TEST--
AWS CodeBuild: Detect properties

--ENV--
NODE_10_VERSION=10.19.0
ANDROID_SDK_MANAGER_VER=4333796
MAVEN_DOWNLOAD_SHA512=c35a1803a6e70a126e80b2b3ae33eed961f83ed74d18fcd16909b2d44d7dada3203f1ffe726c17ef8dcca2dcaa9fca676987befeadc9b9f759967a8cb77181c0
MAVEN_OPTS=-Dmaven.wagon.httpconnectionManager.maxPerRoute=2
CODEBUILD_LAST_EXIT=0
CODEBUILD_START_TIME=1585485986820
ANT_VERSION=1.10.6
CODEBUILD_BMR_URL=https://CODEBUILD_AGENT:3000
NODE_12_VERSION=12.16.1
JRE_8_HOME=/usr/lib/jvm/java-1.8.0-amazon-corretto/jre
DOCKER_BUCKET=download.docker.com
CODEBUILD_SOURCE_VERSION=test/evn
ANDROID_SDK_PLATFORM_TOOLS_28=platforms;android-28
CODEBUILD_AGENT_ENDPOINT=http://127.0.0.1:7831
HOSTNAME=202d63ee90d4
CODEBUILD_BUILD_ID=project-api-pr:449b6959-c0f7-41ac-aac8-7fec365d3004
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
CODEBUILD_GOPATH=/codebuild/output/src341076892
CODEBUILD_CI=true
GOENV_DISABLE_GOPATH=1
CODEBUILD_RESOLVED_SOURCE_VERSION=c150e3a3d2d89acd1b1222bf6f7a50b45a4218c0
CODEBUILD_BUILD_NUMBER=559
CODEBUILD_BUILD_SUCCEEDING=1
GRADLE_DOWNLOADS_SHA256=14cd15fc8cc8705bd69dcfa3c8fefb27eb7027f5de4b47a8b279218f76895a91 5.4.1\n336b6898b491f6334502d8074a6b8c2d73ed83b92123106bd4bf837f04111043 4.10.3
CODEBUILD_BUILD_ARN=arn:aws:codebuild:eu-west-1:911074024513:build/project-api-pr:449b6959-c0f7-41ac-aac8-7fec365d3004
AWS_CONTAINER_CREDENTIALS_RELATIVE_URI=/v2/credentials/9ab844f8-d292-41ec-b0b9-3895d1901405
MAVEN_HOME=/opt/maven
AWS_EXECUTION_ENV=AWS_ECS_EC2
ANT_DOWNLOAD_SHA512=c1a9694c3018e248000ff6f46d48af85f537ef3935e0d5256543c58a240084c0aff5289fd9e94cbc40d5442f3cc43592398047f2548fded40d9882be2b40750d
DOCKER_SHA256=c3c8833e227b61fe6ce0bc5c17f97fa547035bef4ef17cf6601f30b0f20f4ce5
RUBY_BUILD_SRC_DIR=/usr/local/rbenv/plugins/ruby-build
CODEBUILD_INITIATOR=radim
INSTALLED_GRADLE_VERSIONS=4.10.3 5.4.1
GRADLE_PATH=/usr/src/gradle
PROJECT_NAME=project-api
DIND_COMMIT=3b5fac462d21ca164b3778647420016315289034
AWS_DEFAULT_REGION=eu-west-1
AWS_ECR_CODEBUILD_URI=911074024513.dkr.ecr.eu-west-1.amazonaws.com/project-api-codebuild
PHP_73_VERSION=7.3.13
ECS_CONTAINER_METADATA_URI=http://169.254.170.2/v3/788d7be3-4280-454e-8f3e-ab9ee035ee04
PHP_74_VERSION=7.4.1
CODEBUILD_EXECUTION_ROLE_BUILD=
DOTNET_31_SDK_VERSION=3.1.102
PATH=/root/.phpenv/shims:/root/.phpenv/bin:/root/.goenv/shims:/root/.goenv/bin:/go/bin:/root/.phpenv/shims:/root/.phpenv/bin:/root/.pyenv/shims:/root/.pyenv/bin:/root/.rbenv/shims:/usr/local/rbenv/bin:/usr/local/rbenv/shims:/root/.dotnet/:/root/.dotnet/tools/:/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/opt/tools:/usr/local/android-sdk-linux/tools:/usr/local/android-sdk-linux/tools/bin:/usr/local/android-sdk-linux/platform-tools
N_SRC_DIR=/usr/src/n
POWERSHELL_DOWNLOAD_SHA=E8287687C99162BF70FEFCC2E492F3B54F80BE880D86B9A0EC92C71B05C40013
RUBY_26_VERSION=2.6.5
CODEBUILD_LOG_PATH=449b6959-c0f7-41ac-aac8-7fec365d3004
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
GOPATH=/go:/codebuild/output/src341076892
AWS_REGION=eu-west-1
CODEBUILD_BUILD_URL=https://eu-west-1.console.aws.amazon.com/codebuild/home?region=eu-west-1#/builds/project-api-pr:449b6959-c0f7-41ac-aac8-7fec365d3004/view/new
JAVA_8_HOME=/usr/lib/jvm/java-1.8.0-amazon-corretto
GRADLE_VERSION=5.4.1
DOCKER_VERSION=19.03.3
CODEBUILD_SRC_DIR=/codebuild/output/src341076892/src/github.com/project-app/project-api
CODEBUILD_PROJECT_UUID=83afc255-1a5a-4ded-a73e-105110a67956
MAVEN_VERSION=3.6.3
CODEBUILD_AUTH_TOKEN=ce79b1c8-ee3b-4981-bb63-86162d6548b2
CODEBUILD_CONTAINER_NAME=default
JAVA_11_HOME=/opt/jvm/amazon-corretto-11
ANDROID_SDK_BUILD_TOOLS_28=build-tools;28.0.3
JDK_8_HOME=/usr/lib/jvm/java-1.8.0-amazon-corretto
JDK_DOWNLOAD_SHA256=4cc9e65e6e3d036b18cfd5fd6c7843d48244e44a60350f7e45036f4825bd3812
JAVA_HOME=/opt/jvm/amazon-corretto-11
DOCKER_COMPOSE_VERSION=1.24.0
PWD=/codebuild/output/src341076892/src/github.com/project-app/project-api
CODEBUILD_FE_REPORT_ENDPOINT=https://codebuild.eu-west-1.amazonaws.com/
PYTHON_37_VERSION=3.7.6
ANDROID_HOME=/usr/local/android-sdk-linux
PYTHON_38_VERSION=3.8.1
GOLANG_12_VERSION=1.12.17
JDK_11_HOME=/opt/jvm/amazon-corretto-11
ANDROID_SDK_PLATFORM_TOOLS=platforms;android-29
RBENV_SRC_DIR=/usr/local/rbenv
GOLANG_13_VERSION=1.13.8
NUGET_XMLDOC_MODE=skip
JDK_HOME=/opt/jvm/amazon-corretto-11
GOLANG_14_VERSION=1.14.0

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
