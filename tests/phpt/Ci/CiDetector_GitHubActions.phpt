--TEST--
GitHub Actions: Detect properties

--ENV--
_=/usr/bin/env
AGENT_TOOLSDIRECTORY=/opt/hostedtoolcache
ANDROID_HOME=/usr/local/lib/android/sdk
ANDROID_SDK_ROOT=/usr/local/lib/android/sdk
ANT_HOME=/usr/share/ant
AZURE_EXTENSION_DIR=/opt/az/azcliextensions
BOOST_ROOT_1_69_0=/usr/local/share/boost/1.69.0
BOOST_ROOT_1_72_0=/usr/local/share/boost/1.72.0
CHROME_BIN=/usr/bin/google-chrome
CHROMEWEBDRIVER=/usr/local/share/chrome_driver
CI=true
CONDA=/usr/share/miniconda
DEBIAN_FRONTEND=noninteractive
DEPLOYMENT_BASEPATH=/opt/runner
DOTNET_NOLOGO="1"
DOTNET_SKIP_FIRST_TIME_EXPERIENCE="1"
GECKOWEBDRIVER=/usr/local/share/gecko_driver
GITHUB_ACTION=run2
GITHUB_ACTIONS=true
GITHUB_ACTOR=OndraM
GITHUB_API_URL=https://api.github.com
GITHUB_BASE_REF=
GITHUB_EVENT_NAME=push
GITHUB_EVENT_PATH=/home/runner/work/_temp/_github_workflow/event.json
GITHUB_GRAPHQL_URL=https://api.github.com/graphql
GITHUB_HEAD_REF=
GITHUB_JOB=tests
GITHUB_REF=refs/heads/test-github
GITHUB_REPOSITORY_OWNER=OndraM
GITHUB_REPOSITORY=OndraM/ci-detector
GITHUB_RUN_ID=135716608
GITHUB_RUN_NUMBER=50
GITHUB_SERVER_URL=https://github.com
GITHUB_SHA=b9173d9402ae3abca09f0b45b524a7567df05811
GITHUB_WORKSPACE=/home/runner/work/ci-detector/ci-detector
GOROOT_1_11_X64=/opt/hostedtoolcache/go/1.11.13/x64
GOROOT_1_12_X64=/opt/hostedtoolcache/go/1.12.17/x64
GOROOT_1_13_X64=/opt/hostedtoolcache/go/1.13.12/x64
GOROOT_1_14_X64=/opt/hostedtoolcache/go/1.14.4/x64
GOROOT=/opt/hostedtoolcache/go/1.14.4/x64
GRADLE_HOME=/usr/share/gradle
HOME=/home/runner
HOMEBREW_CELLAR="/home/linuxbrew/.linuxbrew/Cellar"
HOMEBREW_PREFIX="/home/linuxbrew/.linuxbrew"
HOMEBREW_REPOSITORY="/home/linuxbrew/.linuxbrew/Homebrew"
ImageOS=ubuntu18
ImageVersion=20200604.1
INVOCATION_ID=63a0b1d20f054a6986e98aaec53cdad5
JAVA_HOME_11_X64=/usr/lib/jvm/zulu-11-azure-amd64
JAVA_HOME_12_X64=/usr/lib/jvm/zulu-12-azure-amd64
JAVA_HOME_7_X64=/usr/lib/jvm/zulu-7-azure-amd64
JAVA_HOME_8_X64=/usr/lib/jvm/zulu-8-azure-amd64
JAVA_HOME=/usr/lib/jvm/zulu-8-azure-amd64
JOURNAL_STREAM=9:33245
LANG=C.UTF-8
LEIN_HOME=/usr/local/lib/lein
LEIN_JAR=/usr/local/lib/lein/self-installs/leiningen-2.9.3-standalone.jar
linting
M2_HOME=/usr/share/apache-maven-3.6.3
PATH=/home/runner/.composer/vendor/bin:/usr/share/rust/.cargo/bin:/home/runner/.config/composer/vendor/bin:/home/runner/.dotnet/tools:/snap/bin:/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/games:/usr/local/games:/home/linuxbrew/.linuxbrew/bin:/home/linuxbrew/.linuxbrew/sbin
PERFLOG_LOCATION_SETTING=RUNNER_PERFLOG
POWERSHELL_DISTRIBUTION_CHANNEL=GitHub-Actions-ubuntu18
PWD=/home/runner/work/ci-detector/ci-detector
RUNNER_OS=Linux
RUNNER_PERFLOG=/home/runner/perflog
RUNNER_TEMP=/home/runner/work/_temp
RUNNER_TOOL_CACHE=/opt/hostedtoolcache
RUNNER_TRACKING_ID=github_ad93cc31-146c-418c-907f-4ae302b9aa5f
RUNNER_USER=runner
RUNNER_WORKSPACE=/home/runner/work/ci-detector
SELENIUM_JAR_PATH=/usr/share/java/selenium-server-standalone.jar
SHLVL=1
SWIFT_PATH=/usr/share/swift/usr/bin
USER=runner
VCPKG_INSTALLATION_ROOT=/usr/local/share/vcpkg

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
string(34) "OndraM\CiDetector\Ci\GitHubActions"
CI name:
string(14) "GitHub Actions"
Is pull request:
string(2) "No"
Build number:
string(2) "50"
Build url:
string(92) "https://github.com/OndraM/ci-detector/commit/b9173d9402ae3abca09f0b45b524a7567df05811/checks"
Git commit:
string(40) "b9173d9402ae3abca09f0b45b524a7567df05811"
Git branch:
string(11) "test-github"
Repository name:
string(18) "OndraM/ci-detector"
Repository url:
string(37) "https://github.com/OndraM/ci-detector"
