# CI detector

[![Latest Stable Version](https://img.shields.io/packagist/v/ondram/ci-detector.svg?style=flat-square)](https://packagist.org/packages/ondram/ci-detector)
[![Build Status](https://img.shields.io/travis/OndraM/ci-detector.svg?style=flat-square)](https://travis-ci.org/OndraM/ci-detector)
[![License](https://img.shields.io/packagist/l/ondram/ci-detector.svg?style=flat-square)](https://packagist.org/packages/ondram/ci-detector)

Simple PHP library to detect in what continuous integration server is current script being run and to provide unified 
interface for accessing the build properties.
 
The detection is based on environment variables injected to the build environment by each of continuous integration 
server. However, these variables are named differently in each CI. This library contains adapter for each supported
CI server which handles these differences so you don't have to and you can make your scripts (and especially CLI tools)
portable for multiple build environments.

## Supported continuous integration servers

These CI servers are currently recognized: 

 - [Jenkins](https://jenkins.io/)
 - [Travis CI](https://travis-ci.org/)
 - [Bamboo](https://www.atlassian.com/software/bamboo)
 - [CircleCI](https://circleci.com/)
 - [Codeship](https://codeship.com/)
 - [GitLab](https://about.gitlab.com/gitlab-ci/)
 - [TeamCity](https://www.jetbrains.com/teamcity/)

If your favorite CI server is missing, feel free to send a pull-request!

## Installation

Install using [Composer](http://getcomposer.org/):

```sh
$ composer require ondram/ci-detector
```

## Example usage

```php
<?php

$ci = OndraM\CiDetector::detect(); // Will return false or instance implementing CiInterface

if (!$ci instanceof OndraM\Ci\CiInterface) {
    // false is returned from the CiDetector::detect() method if CI server was not detected
    echo "CI not detected";
} else {
    // Example outputs when run in Travis
    echo $ci->getCiName();          // "Travis CI"
    echo $ci->getBuildNumber();     // "35.1"
    echo $ci->getBuildUrl();        // "https://travis-ci.org/OndraM/ci-detector/jobs/148395137"
    echo $ci->getGitCommit();       // "fad3f7bdbf3515d1e9285b8aa80feeff74507bdd"
    echo $ci->getGitBranch();       // "feature/foo-bar"
    echo $ci->getRepositoryUrl();   // "" (empty string) - unsupported on Travis, will return eg. "ssh://git@gitserver:7999/project/repo.git" on Jenkins etc.)
}
```
