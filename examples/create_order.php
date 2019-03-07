<?php

require_once '../vendor/autoload.php';

$config = require_once '../eshanghu.php';

$eshanghu = new \Eshanghu\Eshanghu($config);

$outTradeNo = 'A123123';
$subject = '商品名称';
$totalFee = 1; // 单位：分
$extra = 'diy your self';

$response = $eshanghu->create($outTradeNo, $subject, $totalFee, $extra);

var_dump($response);

//SUCCESS:
//array(4) {
//    ["order_sn"]=>
//  string(16) "2019030723170822"
//    ["out_trade_no"]=>
//  string(7) "A123123"
//    ["code_url"]=>
//  string(35) "weixin://wxpay/bizpayurl?pr=f3kYiAm"
//    ["sign"]=>
//  string(32) "BAAE27C137DEC7EF300B9E8CCD48D36C"
//}