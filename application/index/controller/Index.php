<?php
namespace app\index\controller;

class Index
{
    public function index()
    {
        print_r($_GET);
        echo "hello word2";
    }

    public function hello($name = 'ThinkPHP5')
    {
        echo  'hello,' . $name;
    }
}
