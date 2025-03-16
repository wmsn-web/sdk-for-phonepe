<?php
require __DIR__ . '/vendor/autoload.php';

use WmsnWeb\SdkForPhonepe\PhonePe;

$example = new PhonePe('PHONEPE_MERCHANTID','PHONEPE_SALTKEY',1);
echo $example->testCheck(); // Should print: Hello from Packagist!
