--TEST--
Travis CI: Detect properties of PR build

--ENV--
_=/usr/bin/env
ANSI_CLEAR=\033[0K
ANSI_GREEN=\033[32;1m
ANSI_RED=\033[31;1m
ANSI_RESET=\033[0m
ANSI_YELLOW=\033[33;1m
APT_KEY_DONT_WARN_ON_DANGEROUS_USAGE=1
CI=true
COMPOSER_NO_INTERACTION=1
CONTINUOUS_INTEGRATION=true
DBUS_SESSION_BUS_ADDRESS=unix:path=/run/user/2000/bus
DEBIAN_FRONTEND=noninteractive
ELIXIR_VERSION=1.7.4
FOO_TEST_ENV=value
GEM_HOME=/home/travis/.rvm/gems/ruby-2.7.1
GEM_PATH=/home/travis/.rvm/gems/ruby-2.7.1:/home/travis/.rvm/gems/ruby-2.7.1@global
GIT_ASKPASS=echo
GOPATH=/home/travis/gopath
GOROOT=/home/travis/.gimme/versions/go1.11.1.linux.amd64
HAS_ANTARES_THREE_LITTLE_FRONZIES_BADGE=true
HAS_JOSH_K_SEAL_OF_APPROVAL=true
HISTCONTROL=ignoredups:ignorespace
HISTFILESIZE=2000
HISTSIZE=1000
HOME=/home/travis
IRBRC=/home/travis/.rvm/rubies/ruby-2.7.1/.irbrc
JAVA_HOME=/usr/local/lib/jvm/openjdk11
JRUBY_OPTS= --client -J-XX:+TieredCompilation -J-XX:TieredStopAtLevel=1 -J-Xss2m -Xcompile.invokedynamic=false
LANG=en_US.UTF-8
LANGUAGE=en_US.UTF-8
LC_ALL=en_US.UTF-8
LC_CTYPE=en_US.UTF-8
LOGNAME=travis
MANPATH=/home/travis/.nvm/versions/node/v10.16.0/share/man:/home/travis/.kiex/elixirs/elixir-1.7.4/man:/home/travis/.rvm/rubies/ruby-2.7.1/share/man:/usr/local/cmake-3.16.8/man:/usr/local/clang-7.0.0/share/man:/usr/local/man:/usr/local/share/man:/usr/share/man:/home/travis/.rvm/man
MERB_ENV=test
MIX_ARCHIVES=/home/travis/.kiex/mix/elixir-1.7.4
MOTD_SHOWN=pam
MY_RUBY_HOME=/home/travis/.rvm/rubies/ruby-2.7.1
MYSQL_UNIX_PORT=/var/run/mysqld/mysqld.sock
NVM_BIN=/home/travis/.nvm/versions/node/v10.16.0/bin
NVM_CD_FLAGS=
NVM_DIR=/home/travis/.nvm
NVM_INC=/home/travis/.nvm/versions/node/v10.16.0/include/node
OLDPWD=/home/travis/build
PAGER=cat
PATH=/home/travis/bin:/home/travis/.local/bin:/usr/local/lib/jvm/openjdk11/bin:/opt/pyenv/shims:/home/travis/.phpenv/shims:/home/travis/perl5/perlbrew/bin:/home/travis/.nvm/versions/node/v10.16.0/bin:/home/travis/.kiex/elixirs/elixir-1.7.4/bin:/home/travis/.kiex/bin:/home/travis/.rvm/gems/ruby-2.7.1/bin:/home/travis/.rvm/gems/ruby-2.7.1@global/bin:/home/travis/.rvm/rubies/ruby-2.7.1/bin:/home/travis/gopath/bin:/home/travis/.gimme/versions/go1.11.1.linux.amd64/bin:/usr/local/maven-3.6.3/bin:/usr/local/cmake-3.16.8/bin:/usr/local/clang-7.0.0/bin:/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/snap/bin:/home/travis/.rvm/bin:/home/travis/.phpenv/bin:/opt/pyenv/bin:/home/travis/.yarn/bin
PERLBREW_HOME=/home/travis/.perlbrew
PERLBREW_ROOT=/home/travis/perl5/perlbrew
PERLBREW_SHELLRC_VERSION=0.89
PS1=${debian_chroot:+($debian_chroot)}\u@\h:\w\$
PS4=+
PWD=/home/travis/build/OndraM/ci-detector
PYENV_ROOT=/opt/pyenv
PYENV_SHELL=bash
PYTHON_CFLAGS=-g -fstack-protector --param=ssp-buffer-size=4 -Wformat -Werror=format-security
PYTHON_CONFIGURE_OPTS=--enable-unicode=ucs4 --with-wide-unicode --enable-shared --enable-ipv6 --enable-loadable-sqlite-extensions --with-computed-gotos
RACK_ENV=test
RAILS_ENV=test
RBENV_SHELL=bash
RUBY_VERSION=ruby-2.7.1
rvm_bin_path=/home/travis/.rvm/bin
rvm_path=/home/travis/.rvm
rvm_prefix=/home/travis
rvm_version=1.29.10 (latest)
SHELL=/bin/bash
SHLVL=1
SSH_CLIENT=10.16.1.16 40268 22
SSH_CONNECTION=10.16.1.16 40268 10.30.1.222 22
SSH_TTY=/dev/pts/0
TERM=xterm
TRAVIS_ALLOW_FAILURE=false
TRAVIS_APP_HOST=build.travis-ci.com
TRAVIS_APT_PROXY=http://build-cache.travisci.net
TRAVIS_ARCH=amd64
TRAVIS_BRANCH=main
TRAVIS_BUILD_DIR=/home/travis/build/OndraM/ci-detector
TRAVIS_BUILD_ID=208848666
TRAVIS_BUILD_NUMBER=524
TRAVIS_BUILD_STAGE_NAME=
TRAVIS_BUILD_WEB_URL=https://travis-ci.com/OndraM/ci-detector/builds/208848666
TRAVIS_CMD=env
TRAVIS_COMMIT_MESSAGE=Merge ff1f4e7f85eacb89a76a434e8d038e13c4b46e8a into dc78d69a83b22190ba68b13bde0c1a2eaedd5f0a
TRAVIS_COMMIT_RANGE=dc78d69a83b22190ba68b13bde0c1a2eaedd5f0a...ff1f4e7f85eacb89a76a434e8d038e13c4b46e8a
TRAVIS_COMMIT=854df4f976f83ecccb5ede1fb3bf9bdebdc07d84
TRAVIS_CPU_ARCH=amd64
TRAVIS_DIST=focal
TRAVIS_ENABLE_INFRA_DETECTION=true
TRAVIS_EVENT_TYPE=pull_request
TRAVIS_HOME=/home/travis
TRAVIS_INFRA=unknown
TRAVIS_INIT=systemd
TRAVIS_INTERNAL_RUBY_REGEX=^ruby-(2\.[0-4]\.[0-9]|1\.9\.3)
TRAVIS_JOB_ID=460445057
TRAVIS_JOB_NAME=
TRAVIS_JOB_NUMBER=524.1
TRAVIS_JOB_WEB_URL=https://travis-ci.com/OndraM/ci-detector/jobs/460445057
TRAVIS_LANGUAGE=php
TRAVIS_OS_NAME=linux
TRAVIS_OSX_IMAGE=
TRAVIS_PHP_VERSION=7.4
TRAVIS_PRE_CHEF_BOOTSTRAP_TIME=2020-12-15T10:00:08
TRAVIS_PULL_REQUEST_BRANCH=feature/pr-branch
TRAVIS_PULL_REQUEST_SHA=ff1f4e7f85eacb89a76a434e8d038e13c4b46e8a
TRAVIS_PULL_REQUEST_SLUG=OndraM/ci-detector
TRAVIS_PULL_REQUEST=90
TRAVIS_REPO_SLUG=OndraM/ci-detector
TRAVIS_ROOT=/
TRAVIS_SECURE_ENV_VARS=false
TRAVIS_STACK_FEATURES=generic basic ruby_interpreter
TRAVIS_STACK_JOB_BOARD_REGISTER=/.job-board-register.yml
TRAVIS_STACK_LANGUAGES=__ubuntu_2004__ c c++ cplusplus cpp ruby python go java php node_js smalltalk csharp perl rust erlang
TRAVIS_STACK_NAME=ubuntu_2004
TRAVIS_STACK_NODE_ATTRIBUTES=/.node-attributes.yml
TRAVIS_STACK_TIMESTAMP=2020-12-15 10:00:19 UTC
TRAVIS_SUDO=true
TRAVIS_TAG=
TRAVIS_TEST_RESULT=
TRAVIS_TIMER_ID=003e6850
TRAVIS_TIMER_START_TIME=1608041357714496275
TRAVIS_TMPDIR=/tmp/tmp.6GWlRMnrBy
TRAVIS_UID=2000
TRAVIS=true
TZ=UTC
USER=travis
XDG_DATA_DIRS=/usr/local/share:/usr/share:/var/lib/snapd/desktop
XDG_RUNTIME_DIR=/run/user/2000
XDG_SESSION_CLASS=user
XDG_SESSION_ID=3
XDG_SESSION_TYPE=tty

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
string(17) "feature/pr-branch"
Target branch:
string(4) "main"
