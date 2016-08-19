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
 - [CircleCI](https://circleci.com/)
 - [Bamboo](https://www.atlassian.com/software/bamboo)
 - [TeamCity](https://www.jetbrains.com/teamcity/)
 - [GitLab](https://about.gitlab.com/gitlab-ci/)
 
More (like Codeship) may come soon (or you can send a pull request).

## Installation

Install using [Composer](http://getcomposer.org/):

```sh
$ composer require ondram/ci-detector
```

## Example usage

```php
<?php

$ci = OndraM\CiDetector::detect(); // Will return instance implementing CiInterface

// Example outputs when run in Travis
echo $ci->getCiName(); // "Travis CI"
echo $ci->getBuildNumber(); // "35.1"
echo $ci->getBuildUrl(); // https://travis-ci.org/OndraM/ci-detector/jobs/148395137
echo $ci->getGitCommit(); // fad3f7bdbf3515d1e9285b8aa80feeff74507bdd

```

```php
// false is returned from the CiDetector::detect() method if CI server was not detected

$ci = OndraM\CiDetector::detect();
var_dump($ci); // bool(false)

```
