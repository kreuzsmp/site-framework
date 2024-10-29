<?php

namespace App\Services;

use L4dno\Sdk;
class PaymentManager
{
    public static function createPayment($nick, $coupon, $email, $type = 'pass') {
        $serverId = env('EASYDONATE_SERVER_ID');
        $secret = env('EASYDONATE_SECRET');

        $productId = self::getProductId($type);

        $sdk = new Sdk($secret);
        return $sdk->payment()->setCustomer($nick)->setServerId($serverId)->setProducts([$productId => 1])->setSuccessUrl(route('successbuy'))->setCoupon($coupon)->setEmail($email)->create(true);
    }

    protected static function getProductId($type)
    {
        switch ($type) {
            case "pass":
                $productId = env('EASYDONATE_PRODUCT_PASS_ID');
                break;
            case "sponsor1":
                $productId = env('EASYDONATE_PRODUCT_SPONSOR1_ID');
                break;
            case "sponsor6":
                $productId = env('EASYDONATE_PRODUCT_SPONSOR6_ID');
                break;
            case "sponsor12":
                $productId = env('EASYDONATE_PRODUCT_SPONSOR12_ID');
                break;
        }

        return $productId;
    }

//    public static function getPrice($type = 'pass') {
//        $secret = env('EASYDONATE_SECRET');
//        $productId = self::getProductId($type);
//
//        $sdk = new Sdk($secret);
//
//        return $sdk->getProduct($productId)->price;
//    }
}
