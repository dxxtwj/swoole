<?php
namespace app\index\controller;

class Index
{
    public function index()
    {
        echo 'i按时到东萨和的撒大骚动';
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }
}
