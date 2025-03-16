# My PHP Package

A simple PHP package.

## Installation

```bash
composer require wmsn-web/sdk-for-phonepe:^1.0
```

## Usage

### PhonePe PAY API

- Creating a index.php
```php
<?php
use Dwivedianuj9118\PhonePePaymentGateway\PhonePe;

require __DIR__ . '/vendor/autoload.php';

$config = new PhonePe('PHONEPE_MERCHANTID','PHONEPE_SALTKEY',PHONEPE_SALTINDEX);//merchantId,SaltKey,SaltIndex after onboarding PhonePe Payment gateway you will got this.
$merchantTransactionId='MUID' . substr(uniqid(), -6);// Uqique Randoe transcation Id
$merchantOrderId='Order'.mt_rand(1000,99999);// orderId
$amount=100;// Amount in Paisa or amount*100
$redirectUrl="/success.php";// Redirect Url after Payment success or fail
$mode="PRODUCTION"; // MODE or PAYMENT UAT(test) or PRODUCTION(production)
$callbackUrl="/success.php";//Callback Url after Payment success or fail get response
$mobileNumber=9876543210;//Mobile No
$data=$config->PaymentCall("$merchantTransactionId","$merchantOrderId","$amount","$redirectUrl","$callbackUrl","$mobileNumber","$mode");// call function to get response form phonepe like url,msg,status
//header('Location:'. $data['url']);//use when you directly want to redirect to phonepe gateway
echo $data['url']; // here you get url after initiated PhonePe gateway
```

