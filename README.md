## 云尔易付支付扩展包

网址：[http://www.yuneryi.com](http://www.yuneryi.com)

注意，v2.1及之前版本对应易商户API的v1接口版本。

## 用法

首先，您需要安装依赖：

```
composer install
```

### 创建订单


```php
<?php
require_once '../vendor/autoload.php';
$config = require_once '../eshanghu.php';
$eshanghu = new \Eshanghu\Eshanghu($config);
$outTradeNo = 'A123123';
$subject = '商品名称';
$totalFee = 1; // 单位：分
$extra = 'diy your self';
$response = $eshanghu->create($outTradeNo, $subject, $totalFee, $extra);
```

### 查询订单

```php
<?php
require_once '../vendor/autoload.php';
$config = require_once '../eshanghu.php';
$eshanghu = new \Eshanghu\Eshanghu($config);
$outTradeNo = 'A123123123123';
$response = $eshanghu->queryUseOutTradeNo($outTradeNo);
var_dump($response);
```
