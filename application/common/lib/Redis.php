<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/8 0008
 * Time: 14:16
 */
namespace app\common\lib;

class Redis{

    public static $pre = "sms_";

    /*
     * 发送验证码
     */
    public static function smsKey($phone){
        return self::$pre.$phone;
    }

}