<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/8 0008
 * Time: 13:41
 */
namespace app\common\lib;
class Util{
    /**
     * @param $status
     * @param string $message
     * @param array $data
     */
    public static function show($status, $message = '', $data = [] ){
        $result = array(
            'status' => $status,
            'message' => $message,
            'data' => $data,
        );
        echo json_encode($result);
    }
}