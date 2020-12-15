--TEST--
Azure Pipelines: Detect properties of PR build

--ENV--
_=/usr/bin/env
AGENT_ACCEPTTEEEULA=True
AGENT_BUILDDIRECTORY=/home/vsts/work/1
AGENT_DISABLELOGPLUGIN_TESTFILEPUBLISHERPLUGIN=true
AGENT_DISABLELOGPLUGIN_TESTRESULTLOGPLUGIN=true
AGENT_HOMEDIRECTORY=/home/vsts/agents/2.179.0
AGENT_ID=8
AGENT_JOBNAME=Job
AGENT_JOBSTATUS=Succeeded
AGENT_MACHINENAME=fv-az783-646
AGENT_NAME=Hosted Agent
AGENT_OS=Linux
AGENT_OSARCHITECTURE=X64
AGENT_READONLYVARIABLES=true
AGENT_RETAINDEFAULTENCODING=false
AGENT_ROOTDIRECTORY=/home/vsts/work
AGENT_TEMPDIRECTORY=/home/vsts/work/_temp
AGENT_TOOLSDIRECTORY=/opt/hostedtoolcache
AGENT_USEWORKSPACEID=true
AGENT_VERSION=2.179.0
AGENT_WORKFOLDER=/home/vsts/work
agent.jobstatus=Succeeded
ANDROID_HOME=/usr/local/lib/android/sdk
ANDROID_SDK_ROOT=/usr/local/lib/android/sdk
ANT_HOME=/usr/share/ant
AZURE_EXTENSION_DIR=/opt/az/azcliextensions
AZURE_HTTP_USER_AGENT=VSTS_2e131413-79df-4e40-91c0-9e590bd31772_build_1_0
BOOST_ROOT_1_72_0=/opt/hostedtoolcache/boost/1.72.0/x64
BUILD_ARTIFACTSTAGINGDIRECTORY=/home/vsts/work/1/a
BUILD_BINARIESDIRECTORY=/home/vsts/work/1/b
BUILD_BUILDID=4
BUILD_BUILDNUMBER=20201215.4
BUILD_BUILDURI=vstfs:///Build/Build/4
BUILD_CONTAINERID=11768849
BUILD_DEFINITIONNAME=OndraM.ci-detector
BUILD_DEFINITIONVERSION=1
BUILD_QUEUEDBY=GitHub
BUILD_QUEUEDBYID=1c70362c-270e-4d1a-9894-423bada88d4b
BUILD_REASON=PullRequest
BUILD_REPOSITORY_CLEAN=False
BUILD_REPOSITORY_GIT_SUBMODULECHECKOUT=False
BUILD_REPOSITORY_ID=OndraM/ci-detector
BUILD_REPOSITORY_LOCALPATH=/home/vsts/work/1/s
BUILD_REPOSITORY_NAME=OndraM/ci-detector
BUILD_REPOSITORY_PROVIDER=GitHub
BUILD_REPOSITORY_URI=https://github.com/OndraM/ci-detector
BUILD_REQUESTEDFOR=GitHub
BUILD_REQUESTEDFOREMAIL=
BUILD_REQUESTEDFORID=1c70362c-270e-4d1a-9894-423bada88d4b
BUILD_SOURCEBRANCH=refs/pull/89/merge
BUILD_SOURCEBRANCHNAME=merge
BUILD_SOURCESDIRECTORY=/home/vsts/work/1/s
BUILD_SOURCEVERSION=f44ad676029757f70d7fc848d4bdf13b771c279b
BUILD_SOURCEVERSIONAUTHOR=Ondřej Machulda
BUILD_SOURCEVERSIONMESSAGE=Merge db49327fe5e5bfea81fb88cdbbf24e283538c395 into dc78d69a83b22190ba68b13bde0c1a2eaedd5f0a
BUILD_STAGINGDIRECTORY=/home/vsts/work/1/a
CHROME_BIN=/usr/bin/google-chrome
CHROMEWEBDRIVER=/usr/local/share/chrome_driver
COMMON_TESTRESULTSDIRECTORY=/home/vsts/work/1/TestResults
CONDA=/usr/share/miniconda
DEBIAN_FRONTEND=noninteractive
DOTNET_MULTILEVEL_LOOKUP="0"
DOTNET_NOLOGO="1"
DOTNET_SKIP_FIRST_TIME_EXPERIENCE="1"
ENDPOINT_URL_SYSTEMVSSCONNECTION=https://dev.azure.com/ondrejmachulda/
GECKOWEBDRIVER=/usr/local/share/gecko_driver
GIT_TERMINAL_PROMPT=0
GOROOT_1_13_X64=/opt/hostedtoolcache/go/1.13.15/x64
GOROOT_1_14_X64=/opt/hostedtoolcache/go/1.14.12/x64
GOROOT_1_15_X64=/opt/hostedtoolcache/go/1.15.5/x64
GOROOT=/opt/hostedtoolcache/go/1.14.12/x64
GRADLE_HOME=/usr/share/gradle
HOME=/home/vsts
HOMEBREW_CELLAR="/home/linuxbrew/.linuxbrew/Cellar"
HOMEBREW_PREFIX="/home/linuxbrew/.linuxbrew"
HOMEBREW_REPOSITORY="/home/linuxbrew/.linuxbrew/Homebrew"
ImageOS=ubuntu18
ImageVersion=20201129.1
INVOCATION_ID=bda61ff61ac4483788d931defe67a23e
JAVA_HOME_11_X64=/usr/lib/jvm/adoptopenjdk-11-hotspot-amd64
JAVA_HOME_12_X64=/usr/lib/jvm/adoptopenjdk-12-hotspot-amd64
JAVA_HOME_7_X64=/usr/lib/jvm/zulu-7-azure-amd64
JAVA_HOME_8_X64=/usr/lib/jvm/adoptopenjdk-8-hotspot-amd64
JAVA_HOME=/usr/lib/jvm/adoptopenjdk-8-hotspot-amd64
JOURNAL_STREAM=9:30780
LANG=C.UTF-8
LEIN_HOME=/usr/local/lib/lein
LEIN_JAR=/usr/local/lib/lein/self-installs/leiningen-2.9.4-standalone.jar
M2_HOME=/usr/share/apache-maven-3.6.3
MSDEPLOY_HTTP_USER_AGENT=VSTS_2e131413-79df-4e40-91c0-9e590bd31772_build_1_0
PATH=/home/linuxbrew/.linuxbrew/bin:/home/linuxbrew/.linuxbrew/sbin:/opt/pipx_bin:/usr/share/rust/.cargo/bin:/home/runner/.config/composer/vendor/bin:/home/runner/.dotnet/tools:/snap/bin:/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/games:/usr/local/games:/snap/bin
PHPVERSION=7.4
PIPELINE_WORKSPACE=/home/vsts/work/1
PIPX_BIN_DIR="/opt/pipx_bin"
PIPX_HOME="/opt/pipx"
POWERSHELL_DISTRIBUTION_CHANNEL=Azure-DevOps-ubuntu18
PWD=/home/vsts/work/1/s
RESOURCES_TRIGGERINGALIAS=
RESOURCES_TRIGGERINGCATEGORY=
RUNNER_TOOLSDIRECTORY=/opt/hostedtoolcache
SELENIUM_JAR_PATH=/usr/share/java/selenium-server-standalone.jar
SHLVL=1
SWIFT_PATH=/usr/share/swift/usr/bin
SYSTEM_ARTIFACTSDIRECTORY=/home/vsts/work/1/a
SYSTEM_COLLECTIONID=2e131413-79df-4e40-91c0-9e590bd31772
SYSTEM_COLLECTIONURI=https://dev.azure.com/ondrejmachulda/
SYSTEM_CULTURE=en-US
SYSTEM_DEFAULTWORKINGDIRECTORY=/home/vsts/work/1/s
SYSTEM_DEFINITIONID=1
SYSTEM_DEFINITIONNAME=OndraM.ci-detector
SYSTEM_ENABLEACCESSTOKEN=SecretVariable
SYSTEM_HOSTTYPE=build
SYSTEM_ISSCHEDULED=False
SYSTEM_JOBATTEMPT=1
SYSTEM_JOBDISPLAYNAME=Job
SYSTEM_JOBID=12f1170f-54f2-53f3-20dd-22fc7dff55f9
SYSTEM_JOBIDENTIFIER=Job.__default
SYSTEM_JOBNAME=__default
SYSTEM_JOBPARALLELISMTAG=Private
SYSTEM_JOBPOSITIONINPHASE=1
SYSTEM_JOBTIMEOUT=60
SYSTEM_PHASEATTEMPT=1
SYSTEM_PHASEDISPLAYNAME=Job
SYSTEM_PHASEID=3a3a2a60-14c7-570b-14a4-fa42ad92f52a
SYSTEM_PHASENAME=Job
SYSTEM_PIPELINESTARTTIME=2020-12-15 13:49:00+00:00
SYSTEM_PLANID=d3629006-0807-48d1-9de4-fcb89a11e57d
SYSTEM_PULLREQUEST_ISFORK=False
SYSTEM_PULLREQUEST_MERGEDAT=
SYSTEM_PULLREQUEST_PULLREQUESTID=540266026
SYSTEM_PULLREQUEST_PULLREQUESTNUMBER=89
SYSTEM_PULLREQUEST_SOURCEBRANCH=feature/azure-pipelines
SYSTEM_PULLREQUEST_SOURCECOMMITID=db49327fe5e5bfea81fb88cdbbf24e283538c395
SYSTEM_PULLREQUEST_SOURCEREPOSITORYURI=https://github.com/OndraM/ci-detector
SYSTEM_PULLREQUEST_TARGETBRANCH=main
SYSTEM_SERVERTYPE=Hosted
SYSTEM_STAGEATTEMPT=1
SYSTEM_STAGEDISPLAYNAME=__default
SYSTEM_STAGEID=96ac2280-8cb4-5df5-99de-dd2da759617d
SYSTEM_STAGENAME=__default
SYSTEM_TASKDEFINITIONSURI=https://dev.azure.com/ondrejmachulda/
SYSTEM_TASKDISPLAYNAME=dump env
SYSTEM_TASKINSTANCEID=5caf77c8-9b10-50ef-b5c7-ca89c63e1c86
SYSTEM_TASKINSTANCENAME=CmdLine2
SYSTEM_TEAMFOUNDATIONCOLLECTIONURI=https://dev.azure.com/ondrejmachulda/
SYSTEM_TEAMFOUNDATIONSERVERURI=https://dev.azure.com/ondrejmachulda/
SYSTEM_TEAMPROJECT=ci-detector
SYSTEM_TEAMPROJECTID=48440e73-a9f9-45c7-bbdd-3ff745878df5
SYSTEM_TIMELINEID=d3629006-0807-48d1-9de4-fcb89a11e57d
SYSTEM_TOTALJOBSINPHASE=1
SYSTEM_WORKFOLDER=/home/vsts/work
SYSTEM=build
TASK_DISPLAYNAME=dump env
TF_BUILD=True
USER=vsts
VCPKG_INSTALLATION_ROOT=/usr/local/share/vcpkg
VSTS_AGENT_PERFLOG=/home/vsts/perflog
VSTS_PROCESS_LOOKUP_ID=vsts_5c5c4526-1f29-4bfd-a6a1-c505d7522652

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
string(23) "feature/azure-pipelines"
