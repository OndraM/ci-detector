--TEST--
Throw an exception if CI server is not detected but detect() method is called

--ENV--

--FILE--
<?php

require __DIR__ . '/../../../vendor/autoload.php';

try {
    (new OndraM\CiDetector\CiDetector())->detect();
} catch (OndraM\CiDetector\Exception\CiNotDetectedException $e) {
    echo $e->getMessage();
}

--EXPECT--
No CI server detected in current environment
