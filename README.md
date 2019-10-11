# gaode-sdk
高德地图 SDK

## 安装

`composer require hanson/gaode-sdk -vvv`

## 使用

```php
$gaode = new \Hanson\Gaode\Gaode([
    'key' => 'b725ee82ee2e4af3ac46951b0cca0af5',
]);

// 地址编码
$gaode->regeo([
    'location' => '23.12299,113.26412'
]);

// 地址你编码
$gaode->geo($params);

// 步行路径规划
$gaode->directionWalking($parms);

// 骑行路径规划
$gaode->directionWalking($parms);

// 公交车路径规划
$gaode->directionTransit($parms);

// 驾车路径规划
$gaode->directionDriving($parms);

// 距离测量
$gaode->distance($parms);

// 地址输入提示
$gaode->inputTips($parms);
```
