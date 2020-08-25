# CI Detector

[![Latest Stable Version](https://img.shields.io/packagist/v/ondram/ci-detector.svg?style=flat-square)](https://packagist.org/packages/ondram/ci-detector)
[![Coverage Status](https://img.shields.io/coveralls/OndraM/ci-detector/main.svg?style=flat-square)](https://coveralls.io/r/OndraM/ci-detector)
[![GitHub Actions Build Status](https://img.shields.io/github/workflow/status/OndraM/ci-detector/PHP?style=flat-square&label=GitHub%20Actions%20build)](https://github.com/OndraM/ci-detector/actions)
[![Travis Build Status](https://img.shields.io/travis/OndraM/ci-detector.svg?style=flat-square&label=Travis%20build)](https://travis-ci.org/OndraM/ci-detector)
[![AppVeyor Build Status](https://img.shields.io/appveyor/ci/OndraM/ci-detector.svg?style=flat-square&label=AppVeyor%20build)](https://ci.appveyor.com/project/OndraM/ci-detector)

PHP library to detect continuous integration environment and to provide a unified interface to read the build information.

The detection is based on environment variables injected to the build environment by each of CI
server. However, these variables are named differently in each CI. This library contains adapter for each supported
CI server, which handles these differences, so you don't have to, and you can make your scripts (and especially CLI tools)
portable for multiple build environments.

## Supported continuous integration servers

These CI servers are currently recognized:

 - [AppVeyor](https://www.appveyor.com/)
 - [AWS CodeBuild](https://aws.amazon.com/codebuild/)
 - [Bamboo](https://www.atlassian.com/software/bamboo)
 - [Bitbucket Pipelines](https://bitbucket.org/product/features/pipelines)
 - [Buddy](https://buddy.works/)
 - [CircleCI](https://circleci.com/)
 - [Codeship](https://codeship.com/)
 - [continuousphp](https://continuousphp.com/)
 - [drone](https://drone.io/)
 - [GitHub Actions](https://github.com/features/actions)
 - [GitLab](https://about.gitlab.com/gitlab-ci/)
 - [Jenkins](https://www.jenkins.io/)
 - [TeamCity](https://www.jetbrains.com/teamcity/)
 - [Travis CI](https://travis-ci.org/)
 - [Wercker](https://devcenter.wercker.com/)

However not all information are provided by some CI servers. See table below.

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
    echo 'You are running this script on CI server!';
    $ci = $ciDetector->detect();    // Returns class implementing CiInterface or throws CiNotDetectedException

    // Example output when run in Travis:
    echo $ci->getCiName();                 // "Travis CI" - returns value of one of CiDetector::CI_* constants.
    echo $ci->isPullRequest()->describe(); // "No" - also note yes(), no() and maybe() methods which returns boolean
    echo $ci->getBuildNumber();            // "35.1"
    echo $ci->getBuildUrl();               // "https://travis-ci.org/OndraM/ci-detector/jobs/148395137"
    echo $ci->getGitCommit();              // "fad3f7bdbf3515d1e9285b8aa80feeff74507bdd"
    echo $ci->getGitBranch();              // "feature/foo-bar"
    echo $ci->getRepositoryName();         // "OndraM/ci-detector"
    echo $ci->getRepositoryUrl();          // "" (empty string) - unsupported on Travis, will return eg. "ssh://git@gitserver:7999/project/repo.git" on Jenkins etc.)

    // Conditional code for pull request:
    if ($ci->isPullRequest()->yes()) {
        echo 'This is pull request';
    }

    // Conditional code for specific CI server:
    if ($ci->getCiName() === OndraM\CiDetector\CiDetector::CI_JENKINS) {
        echo 'Current CI server is Jenkins';
    }
} else {
    echo 'This script is not run on CI server';
}
```

## Supported properties of each CI server

Most CI servers support (✔) detection of all information. However some don't expose
necessary environment variables, thus reading some information may be unsupported (❌).


| CI server                                              | Constant of `CiDetector` | `is​PullRequest` | `get​Git​Branch` | `get​Repository​Name` | `get​Repository​Url` | `get​Build​Url` |
|--------------------------------------------------------|----------------------|---|---|---|---|---|
| [AppVeyor](https://www.appveyor.com/)                  | `CI_APPVEYOR`        | ✔ | ✔ | ✔ | ❌ | ✔ |
| [AWS CodeBuild](https://aws.amazon.com/codebuild/)     | `CI_AWS_CODEBUILD`   | ✔ | ✔ | ❌ | ✔ | ✔ |
| [Bamboo](https://www.atlassian.com/software/bamboo)    | `CI_BAMBOO`          | ✔ | ✔ | ✔ | ✔ | ✔ |
| [Bitbucket Pipelines](https://bitbucket.org/product/features/pipelines)| `CI_BITBUCKET_PIPELINES` | ✔ | ✔ | ✔ | ✔ | ✔ |
| [Buddy](https://buddy.works/)                          | `CI_BUDDY`           | ✔ | ✔ | ✔ | ✔ | ✔ |
| [CircleCI](https://circleci.com/)                      | `CI_CIRCLE`          | ✔ | ✔ | ✔ | ✔ | ✔ |
| [Codeship](https://codeship.com/)                      | `CI_CODESHIP`        | ✔ | ✔ | ✔ | ❌ | ✔ |
| [continuousphp](https://continuousphp.com/)            | `CI_CONTINUOUSPHP`   | ✔ | ✔ | ❌ | ✔ | ✔ |
| [drone](https://drone.io/)                             | `CI_DRONE`           | ✔ | ✔ | ✔ | ✔ | ✔ |
| [GitHub Actions](https://github.com/features/actions)  | `CI_GITHUB_ACTIONS`  | ✔ | ✔ | ✔ | ✔ | ✔ |
| [GitLab](https://about.gitlab.com/gitlab-ci/)          | `CI_GITLAB`          | ✔ | ✔ | ✔ | ✔ | ✔ |
| [Jenkins](https://www.jenkins.io/)                     | `CI_JENKINS`         | ❌ | ✔ | ❌ | ✔ | ✔ |
| [TeamCity](https://www.jetbrains.com/teamcity/)        | `CI_TEAMCITY`        | ❌ | ❌ | ❌ | ❌ | ❌ |
| [Travis CI](https://travis-ci.org/)                    | `CI_TRAVIS`          | ✔ | ✔ | ✔ | ❌ | ✔ |
| [Wercker](https://devcenter.wercker.com/)              | `CI_WERCKER`         | ❌ | ✔ | ✔ | ❌ | ✔ |

## Testing

Check codestyle, static analysis and run unit-tests:

```sh
composer all
```

To automatically fix codestyle violations run:

```sh
composer fix
```

## Similar libraries for other languages

Similar "CI Info" libraries exists for some other languages, for example:

 - Go - [KlotzAndrew/ci-info](https://github.com/KlotzAndrew/ci-info)
 - JavaScript/Node.js - [watson/ci-info](https://github.com/watson/ci-info)
 - Python - [mgxd/ci-info](https://github.com/mgxd/ci-info)
 - Rust - [sagiegurari/ci_info](https://github.com/sagiegurari/ci_info)
