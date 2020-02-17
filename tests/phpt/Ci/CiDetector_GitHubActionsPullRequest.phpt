--TEST--
Detect properties of GitHub Actions

--ENV--
LEIN_HOME=/usr/local/lib/lein
M2_HOME=/usr/share/apache-maven-3.6.2
BOOST_ROOT=/usr/local/share/boost/1.69.0
GOROOT_1_11_X64=/usr/local/go1.11
ANDROID_HOME=/usr/local/lib/android/sdk
JAVA_HOME_11_X64=/usr/lib/jvm/zulu-11-azure-amd64
ImageVersion=20191209.1
AGENT_TOOLSDIRECTORY=/opt/hostedtoolcache
LANG=C.UTF-8
INVOCATION_ID=0da474cddda344058bd754b447c0a48f
JAVA_HOME_12_X64=/usr/lib/jvm/zulu-12-azure-amd64
ANDROID_SDK_ROOT=/usr/local/lib/android/sdk
RUNNER_TOOL_CACHE=/opt/hostedtoolcache
JAVA_HOME=/usr/lib/jvm/zulu-8-azure-amd64
RUNNER_TRACKING_ID=github_f681674d-e8eb-47f7-9fcb-0aee53e58da1
GITHUB_ACTIONS=true
DOTNET_SKIP_FIRST_TIME_EXPERIENCE=1
USER=runner
GITHUB_HEAD_REF=
GITHUB_ACTOR=OndraM
GITHUB_ACTION=run333
GRADLE_HOME=/usr/share/gradle
PWD=/home/runner/work/ci-detector/ci-detector
HOME=/home/runner
GOROOT=/usr/local/go1.12
JOURNAL_STREAM=9:28471
JAVA_HOME_8_X64=/usr/lib/jvm/zulu-8-azure-amd64
RUNNER_TEMP=/home/runner/work/_temp
CONDA=/usr/share/miniconda
GOROOT_1_13_X64=/usr/local/go1.13
BOOST_ROOT_1_69_0=/usr/local/share/boost/1.69.0
RUNNER_WORKSPACE=/home/runner/work/ci-detector
GITHUB_REF=refs/heads/test-github
GITHUB_SHA=e24a68b0ac3f9d1afe29901943e94df2bf41c932
GOROOT_1_12_X64=/usr/local/go1.12
DEPLOYMENT_BASEPATH=/opt/runner
GITHUB_EVENT_PATH=/home/runner/work/_temp/_github_workflow/event.json
RUNNER_OS=Linux
GITHUB_BASE_REF=
VCPKG_INSTALLATION_ROOT=/usr/local/share/vcpkg
PERFLOG_LOCATION_SETTING=RUNNER_PERFLOG
JAVA_HOME_7_X64=/usr/lib/jvm/zulu-7-azure-amd64
RUNNER_USER=runner
SHLVL=1
GITHUB_REPOSITORY=OndraM/ci-detector
GITHUB_EVENT_NAME=pull_request
LEIN_JAR=/usr/local/lib/lein/self-installs/leiningen-2.9.1-standalone.jar
RUNNER_PERFLOG=/home/runner/perflog
GITHUB_WORKFLOW=PHP
ANT_HOME=/usr/share/ant
PATH=/usr/share/rust/.cargo/bin:/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/snap/bin
GITHUB_WORKSPACE=/home/runner/work/ci-detector/ci-detector
CHROME_BIN=/usr/bin/google-chrome
_=/usr/bin/env

--FILE--
<?php

require __DIR__ . '/../../../vendor/autoload.php';

$ci = (new OndraM\CiDetector\CiDetector())->detect();
echo "Is pull request:\n";
var_dump($ci->isPullRequest()->describe());

--EXPECT--
Is pull request:
string(3) "Yes"
