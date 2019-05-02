<?php
namespace app\controller;

class Index extends BaseController
{
    public function index()
    {
        $data = [];
        $data['name'] = '张三';
        return json($data);
    }

    public function hello($name = 'ThinkPHP6')
    {
        return 'hello,' . $name;
    }
}
