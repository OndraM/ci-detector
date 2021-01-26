<?php
declare(strict_types=1);

namespace OndraM\CiDetector\Ci;

use OndraM\CiDetector\CiDetector;

class PropertiesPrinterHelper
{
    public static function printAllProperties(): void
    {
        echo "Is CI detected:\n";
        var_dump((new CiDetector())->isCiDetected());

        $ci = (new CiDetector())->detect();
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
        echo "Commit:\n";
        var_dump($ci->getCommit());
        echo "Branch:\n";
        var_dump($ci->getBranch());
        echo "Repository name:\n";
        var_dump($ci->getRepositoryName());
        echo "Repository url:\n";
        var_dump($ci->getRepositoryUrl());
    }

    public static function printPullRequestProperties(): void
    {
        $ci = (new CiDetector())->detect();
        echo "Is pull request:\n";
        var_dump($ci->isPullRequest()->describe());
        echo "Branch:\n";
        var_dump($ci->getBranch());
        echo "Target branch:\n";
        var_dump($ci->getTargetBranch());
    }
}
