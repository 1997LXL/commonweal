<?php


namespace app\sample\controller;


use think\Request;  //注入

class Test
{
    public function hello(){

        $all=Request::instance()->get();
        var_dump($all);
//        $id=Request::instance()->param('id');
//        $name=Request::instance()->param('name');
//        $age=Request::instance()->param('age');
//        echo $id;
//        echo '|';
//        echo $name;
//        echo '|';
//        echo $age;
//        echo '|';
//        return 'hello,00';
    }
}