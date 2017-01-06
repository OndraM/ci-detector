# Changelog

<!-- There is always Unreleased section on the top. Subsections (Added, Changed, Fixed, Removed) should be added as needed. -->

## Unreleased
- BC: The `detect()` method of `CiDetector` class is no longer static.

## 1.1.0 - 2017-01-06
- Add `getGitBranch()` method to detect Git branch of the build (supported by all CIs except TeamCity).
- Add `getRepositoryUrl()` method to detect repository source URL (not supported Codeship, TeamCity, Travis).

## 1.0.0 - 2016-08-20
- Initial release supporting Jenkins, Travis CI, Bamboo, CircleCI, Codeship, GitLab and TeamCity services.
