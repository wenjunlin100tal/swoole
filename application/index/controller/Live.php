<?php
namespace app\index\controller;

class Live
{
    public function index()
    {

        return $this->fetch('login');
    }

    public function hello($name = 'ThinkPHP5')
    {
        echo  'hello,' . $name;
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
