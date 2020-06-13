--TEST--
GitHub Actions: Detect properties of PR build

--ENV--
_=/usr/bin/env
AGENT_TOOLSDIRECTORY=/opt/hostedtoolcache
ANDROID_HOME=/usr/local/lib/android/sdk
ANDROID_SDK_ROOT=/usr/local/lib/android/sdk
ANT_HOME=/usr/share/ant
BOOST_ROOT_1_69_0=/usr/local/share/boost/1.69.0
BOOST_ROOT=/usr/local/share/boost/1.69.0
CHROME_BIN=/usr/bin/google-chrome
CONDA=/usr/share/miniconda
DEPLOYMENT_BASEPATH=/opt/runner
DOTNET_SKIP_FIRST_TIME_EXPERIENCE=1
GITHUB_ACTION=run333
GITHUB_ACTIONS=true
GITHUB_ACTOR=OndraM
GITHUB_BASE_REF=main
GITHUB_EVENT_NAME=pull_request
GITHUB_EVENT_PATH=/home/runner/work/_temp/_github_workflow/event.json
GITHUB_HEAD_REF=feature/pr-branch
GITHUB_REF=refs/pull/62/merge
GITHUB_REPOSITORY=OndraM/ci-detector
GITHUB_SHA=e24a68b0ac3f9d1afe29901943e94df2bf41c932
GITHUB_WORKFLOW=PHP
GITHUB_WORKSPACE=/home/runner/work/ci-detector/ci-detector
GOROOT_1_11_X64=/usr/local/go1.11
GOROOT_1_12_X64=/usr/local/go1.12
GOROOT_1_13_X64=/usr/local/go1.13
GOROOT=/usr/local/go1.12
GRADLE_HOME=/usr/share/gradle
HOME=/home/runner
ImageVersion=20191209.1
INVOCATION_ID=0da474cddda344058bd754b447c0a48f
JAVA_HOME_11_X64=/usr/lib/jvm/zulu-11-azure-amd64
JAVA_HOME_12_X64=/usr/lib/jvm/zulu-12-azure-amd64
JAVA_HOME_7_X64=/usr/lib/jvm/zulu-7-azure-amd64
JAVA_HOME_8_X64=/usr/lib/jvm/zulu-8-azure-amd64
JAVA_HOME=/usr/lib/jvm/zulu-8-azure-amd64
JOURNAL_STREAM=9:28471
LANG=C.UTF-8
LEIN_HOME=/usr/local/lib/lein
LEIN_JAR=/usr/local/lib/lein/self-installs/leiningen-2.9.1-standalone.jar
M2_HOME=/usr/share/apache-maven-3.6.2
PATH=/usr/share/rust/.cargo/bin:/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/snap/bin
PERFLOG_LOCATION_SETTING=RUNNER_PERFLOG
PWD=/home/runner/work/ci-detector/ci-detector
RUNNER_OS=Linux
RUNNER_PERFLOG=/home/runner/perflog
RUNNER_TEMP=/home/runner/work/_temp
RUNNER_TOOL_CACHE=/opt/hostedtoolcache
RUNNER_TRACKING_ID=github_f681674d-e8eb-47f7-9fcb-0aee53e58da1
RUNNER_USER=runner
RUNNER_WORKSPACE=/home/runner/work/ci-detector
SHLVL=1
USER=runner
VCPKG_INSTALLATION_ROOT=/usr/local/share/vcpkg

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
string(17) "feature/pr-branch"
