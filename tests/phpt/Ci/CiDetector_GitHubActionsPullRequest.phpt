--TEST--
GitHub Actions: Detect properties of PR build

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
GITHUB_BASE_REF=main
GITHUB_EVENT_NAME=pull_request
GITHUB_EVENT_PATH=/home/runner/work/_temp/_github_workflow/event.json
GITHUB_GRAPHQL_URL=https://api.github.com/graphql
GITHUB_HEAD_REF=feature/pr-branch
GITHUB_JOB=tests
GITHUB_REF=refs/pull/75/merge
GITHUB_REPOSITORY_OWNER=OndraM
GITHUB_REPOSITORY=OndraM/ci-detector
GITHUB_RUN_ID=135750285
GITHUB_RUN_NUMBER=53
GITHUB_SERVER_URL=https://github.com
GITHUB_SHA=fabce0da324c977490b1d9e682c3bcaa6e96494b
GITHUB_WORKFLOW=Tests and linting
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
INVOCATION_ID=0f1b263f46754b1a8f3fa605eb77082b
JAVA_HOME_11_X64=/usr/lib/jvm/zulu-11-azure-amd64
JAVA_HOME_12_X64=/usr/lib/jvm/zulu-12-azure-amd64
JAVA_HOME_7_X64=/usr/lib/jvm/zulu-7-azure-amd64
JAVA_HOME_8_X64=/usr/lib/jvm/zulu-8-azure-amd64
JAVA_HOME=/usr/lib/jvm/zulu-8-azure-amd64
JOURNAL_STREAM=9:31270
LANG=C.UTF-8
LEIN_HOME=/usr/local/lib/lein
LEIN_JAR=/usr/local/lib/lein/self-installs/leiningen-2.9.3-standalone.jar
M2_HOME=/usr/share/apache-maven-3.6.3
PATH=/home/runner/.composer/vendor/bin:/usr/share/rust/.cargo/bin:/home/runner/.config/composer/vendor/bin:/home/runner/.dotnet/tools:/snap/bin:/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/games:/usr/local/games:/home/linuxbrew/.linuxbrew/bin:/home/linuxbrew/.linuxbrew/sbin
PERFLOG_LOCATION_SETTING=RUNNER_PERFLOG
POWERSHELL_DISTRIBUTION_CHANNEL=GitHub-Actions-ubuntu18
PWD=/home/runner/work/ci-detector/ci-detector
RUNNER_OS=Linux
RUNNER_PERFLOG=/home/runner/perflog
RUNNER_TEMP=/home/runner/work/_temp
RUNNER_TOOL_CACHE=/opt/hostedtoolcache
RUNNER_TRACKING_ID=github_ef4f0d82-ba50-40bf-898d-2280f29f87e2
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

\OndraM\CiDetector\Ci\PropertiesPrinterHelper::printPullRequestProperties();

--EXPECT--
Is pull request:
string(3) "Yes"
Branch:
string(17) "feature/pr-branch"
Target branch:
string(4) "main"
