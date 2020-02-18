# CI Detector

[![Latest Stable Version](https://img.shields.io/packagist/v/ondram/ci-detector.svg?style=flat-square)](https://packagist.org/packages/ondram/ci-detector)
[![Coverage Status](https://img.shields.io/coveralls/OndraM/ci-detector/master.svg?style=flat-square)](https://coveralls.io/r/OndraM/ci-detector)
[![GitHub Actions Build Status](https://img.shields.io/github/workflow/status/OndraM/ci-detector/PHP?style=flat-square&label=GitHub%20Actions%20build)](https://github.com/OndraM/ci-detector/actions)
[![Travis Build Status](https://img.shields.io/travis/OndraM/ci-detector.svg?style=flat-square&label=Travis%20build)](https://travis-ci.org/OndraM/ci-detector)
[![AppVeyor Build Status](https://img.shields.io/appveyor/ci/OndraM/ci-detector.svg?style=flat-square&label=AppVeyor%20build)](https://ci.appveyor.com/project/OndraM/ci-detector)

A simple PHP library to detect in what continuous integration server is the current script being run and to provide
unified interface to read the build properties.

The detection is based on environment variables injected to the build environment by each of continuous integration
server. However, these variables are named differently in each CI. This library contains adapter for each supported
CI server, which handles these differences so you don't have to, and you can make your scripts (and especially CLI tools)
portable for multiple build environments.

## Supported continuous integration servers

These CI servers are currently recognized:

 - [AppVeyor](https://www.appveyor.com/)
 - [Bamboo](https://www.atlassian.com/software/bamboo)
 - [CircleCI](https://circleci.com/)
 - [Codeship](https://codeship.com/)
 - [continuousphp](https://continuousphp.com/)
 - [drone](https://github.com/drone/drone/)
 - [GitHub Actions](https://github.com/features/actions)
 - [GitLab](https://about.gitlab.com/gitlab-ci/)
 - [Jenkins](https://jenkins.io/)
 - [TeamCity](https://www.jetbrains.com/teamcity/)
 - [Travis CI](https://travis-ci.org/)

If your favorite CI server is missing, feel free to send a pull-request!

## Standalone CLI version
If you want to use CI Detector as a standalone CLI command (ie. without using inside code of PHP project),
see [ci-detector-standalone](https://github.com/OndraM/ci-detector-standalone) repository, where you can
download CI Detector as a standalone PHAR file with simple command line interface.

## Installation

Install using [Composer](https://getcomposer.org/):

```sh
$ composer require ondram/ci-detector
```

Ci-detector requires PHP 7.1+, but if you need compatibility with PHP <7.1, you can still use old ci-detector version 2.x.

## Example usage

```php
<?php

$ciDetector = new \OndraM\CiDetector\CiDetector();

if ($ciDetector->isCiDetected()) {  // Make sure we are on CI environment
    $ci = $ciDetector->detect();    // Returns class implementing CiInterface or throws CiNotDetectedException

    // Example output when run in Travis:
    echo $ci->getCiName();                 // "Travis CI"
    echo $ci->isPullRequest()->describe(); // "No" - also note yes(), no() and maybe() methods which returns boolean
    echo $ci->getBuildNumber();            // "35.1"
    echo $ci->getBuildUrl();               // "https://travis-ci.org/OndraM/ci-detector/jobs/148395137"
    echo $ci->getGitCommit();              // "fad3f7bdbf3515d1e9285b8aa80feeff74507bdd"
    echo $ci->getGitBranch();              // "feature/foo-bar"
    echo $ci->getRepositoryName();         // "OndraM/ci-detector"
    echo $ci->getRepositoryUrl();          // "" (empty string) - unsupported on Travis, will return eg. "ssh://git@gitserver:7999/project/repo.git" on Jenkins etc.)
} else {
    echo "CI not detected";
}
```

## Testing

Check codestyle, static analysis and run unit-tests:

```sh
composer all
```

To automatically fix codestyle violations run:

```sh
vendor/bin/ecs check --fix ./src/ ./tests/
```
