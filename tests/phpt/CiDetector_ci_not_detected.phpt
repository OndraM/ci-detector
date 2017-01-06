--TEST--
Return false if CI server is not detected

--ENV--

--FILE--
<?php

require __DIR__ . '/../../vendor/autoload.php';

var_dump((new OndraM\CiDetector\CiDetector())->detect());

--EXPECT--
bool(false)
