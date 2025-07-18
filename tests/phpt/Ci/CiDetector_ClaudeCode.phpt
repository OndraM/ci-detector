--TEST--
Claude Code: Detect properties

--ENV--
CLAUDECODE=1

--FILE--
<?php

require __DIR__ . '/../../../vendor/autoload.php';

\OndraM\CiDetector\Ci\PropertiesPrinterHelper::printAllProperties();

--EXPECT--
Is CI detected:
bool(true)
Class:
string(31) "OndraM\CiDetector\Ci\ClaudeCode"
CI name:
string(11) "Claude Code"
Is pull request:
string(5) "Maybe"
Build number:
string(0) ""
Build url:
string(0) ""
Commit:
string(0) ""
Branch:
string(0) ""
Target branch:
string(0) ""
Repository name:
string(0) ""
Repository url:
string(0) ""