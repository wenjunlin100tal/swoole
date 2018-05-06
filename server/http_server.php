<?php

$http = new swoole_http_server("0.0.0.0",9507);

$http->set([
   'enable_static_handler' => true,
    'document_root' => '/var/www/html/swoole/swoole/public/static'
]);

$http->on('request', function ($request, $response) {

//    $response->header("Content-Type", "text/html; charset=utf-8");
    $response->cookie('singwa','xssss',time()+1800);
    $response->end("sss",json_encode($request->get) );
});

$http->start();