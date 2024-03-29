<?php

namespace App\Services;

use L4dno\Sdk;
class PaymentManager
{
    public static function createPayment($nick, $coupon) {
        $serverId = env('EASYDONATE_SERVER_ID');
        $productId = env('EASYDONATE_PRODUCT_ID');
        $secret = env('EASYDONATE_SECRET');

        $sdk = new Sdk($secret);
        return $sdk->payment()->setCustomer($nick)->setServerId($serverId)->setProducts([$productId => 1])->setSuccessUrl(route('successbuy'))->setCoupon($coupon)->create(true);
    }

    public static function getPrice() {
        $productId = env('EASYDONATE_PRODUCT_ID');
        $secret = env('EASYDONATE_SECRET');

        $sdk = new Sdk($secret);

        return $sdk->getProduct($productId)->price;
    }
}
