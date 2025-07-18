--TEST--
Claude Code: Do not detect ClaudeCode if not set

--ENV--
CLAUDECODE=0

--FILE--
<?php

require __DIR__ . '/../../../vendor/autoload.php';

$ciDetector = new \OndraM\CiDetector\CiDetector();

var_dump($ciDetector->isCiDetected());

--EXPECT--
bool(false)