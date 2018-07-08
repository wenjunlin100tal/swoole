<?php
namespace app\index\controller;

use app\common\lib\ali\Sms;
use app\common\lib\Util;

class Send
{
    /*
     * 发送验证码
     */
    public function index()
    {
        $phoneNum = request()->get('phone_num',0,'intval');
        if( empty($phoneNum) ){
            echo Util::show(0,'error');
            exit();
        }

//        header('Content-Type: text/plain; charset=utf-8');
//        $phone = 17784496304;
//        $code = 123456;
//        $result = Sms::sendSms($phone, $code);
//        var_dump($result);
    }

    public function hello($name = 'ThinkPHP5')
    {
        echo  'hello,' . $name;
    }

}
