<?php
namespace app\index\controller;

use app\common\lib\ali\Sms;
use app\common\lib\Redis;
use app\common\lib\Util;

class Send
{
    /*
     * 发送验证码
     */
    public function login()
    {
        $phoneNum = request()->get('phone_num',0,'intval');
        if( empty($phoneNum) ){
            return Util::show(config('code.error'),'error');
        }

        //随机数
        $code = rand(1000,9999);
        try{
            $result = Sms::sendSms($phoneNum, $code);
        }catch (\Exception $e){
            return Util::show(config('code.error'),'短信发送失败');
        }
//        header('Content-Type: text/plain; charset=utf-8');
        if($result->Code === "OK"){
            //redis保存
            $redis = new \Swoole\Coroutine\Redis();
            $redis->connect(config('redis.host'), config('redis.port') );
            $redis->set(Redis::smsKey($phoneNum).$phoneNum, $code, config('redis.out_time') );
        }

    }

    public function hello($name = 'ThinkPHP5')
    {
        echo  'hello,' . $name;
    }

}
