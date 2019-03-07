<?php

require_once '../vendor/autoload.php';

$config = require_once '../eshanghu.php';

$eshanghu = new \Eshanghu\Eshanghu($config);

$outTradeNo = 'A123123123123';

$response = $eshanghu->queryUseOutTradeNo($outTradeNo);

var_dump($response);

//array(5) {
//    ["status"]=>
//  int(0)
//  ["total_fee"]=>
//  int(1)
//  ["order_sn"]=>
//  string(16) "2019030723170822"
//    ["out_trade_no"]=>
//  string(7) "A123123"
//    ["sign"]=>
//  string(32) "0FA7E7D0E4195CAB203966F03EFF2E44"
//}
