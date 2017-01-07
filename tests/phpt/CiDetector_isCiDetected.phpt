--TEST--
Return false from the isCiDetected() method if the CI server is not detected

--ENV--

--FILE--
<?php

require __DIR__ . '/../../vendor/autoload.php';

var_dump((new OndraM\CiDetector\CiDetector())->isCiDetected());

--EXPECT--
bool(false)
