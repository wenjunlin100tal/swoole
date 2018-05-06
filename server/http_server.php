<?php

$http = new swoole_http_server("0.0.0.0",9507);

$http->set([
    'enable_static_handler' => true,
    'document_root' => '/var/www/html/swoole/swoole/public/static',
    'worker_num' => 5,
]);

$http->on('WorkerStart',function (swoole_server $server , $worker_id){
    // 定义应用目录
    define('APP_PATH', __DIR__ . '/../application/');
    // 加载框架引导文件
    require __DIR__ . '/../thinkphp/base.php';
//    require __DIR__ . '/../thinkphp/start.php';

});

$http->on('request', function ($request, $response) {

//    $response->header("Content-Type", "text/html; charset=utf-8");
    $response->cookie('singwa','xssss',time()+1800);
    $response->end("sss",json_encode($request->get) );
});

$http->start();