<?php
namespace app\index\controller;

use app\common\lib\ali\Sms;

class Index
{
    public function index()
    {
        echo "ceshi";
        print_r($_GET);
        echo "hello word";
    }

    public function hello($name = 'ThinkPHP5')
    {
        echo  'hello,' . $name;
    }

    public function login()
    {

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
