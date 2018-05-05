<?php
namespace app\index\controller;

class Index
{
    public function index()
    {

//        print_r($_GET);
        print_r($_SERVER['PATH_INFO']);
        echo "hello word";
    }

    public function hello($name = 'ThinkPHP5')
    {
        echo  'hello,' . $name;
    }
}
