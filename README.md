# CI detector

Simple PHP library to detect in what continuous integration server is current script being run and to provide unified 
interface for accessing the build properties.
 
The detection is based on environment variables injected to the build environment by each of continuous integration 
server. However, these variables are named differently in each CI. This library contains adapter for each supported
CI server which handles these differences so you don't have to and you can make your scripts portable for multiple build
environments.

## Supported continuous integration servers

These CI servers are currently recognized: 

 - [Jenkins](https://jenkins.io/)
 - [Travis CI](https://travis-ci.org/)
 
More coming soon - Circle CI, TeamCity, Bamboo... (or send a pull request).

## Example usage

```php
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
