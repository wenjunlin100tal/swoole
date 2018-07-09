<?php
namespace app\index\controller;

use think\Controller;

class Login extends Controller
{
    public function index()
    {
        $phoneNum = intval($_GET['phone_num']);
        $code = intval($_GET['code'] );
        

    }


    public function sms()
    {
        header('Content-Type: text/plain; charset=utf-8');
        $phone = 17784496304;
        $code = 123456;
//        $result = Sms::sendSms($phone, $code);
//        var_dump($result);
    }
}
