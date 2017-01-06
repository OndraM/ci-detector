--TEST--
Access environment variables
--ENV--
FOO=bar

--FILE--
<?php

require __DIR__ . '/../../vendor/autoload.php';

$env = new OndraM\CiDetector\Env();

var_dump($env->get('FOO'));
var_dump($env->get('NOT_EXISTING'));

--EXPECT--
string(3) "bar"
bool(false)
