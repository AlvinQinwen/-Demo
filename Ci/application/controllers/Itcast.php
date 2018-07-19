<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Itcast extends CI_Controller
{
    public function index()
    {

        $this->load->model('msg');
        $msgs = $this->msg->all();
        foreach($msgs as $msg){
            print_r($msg);
        }



        $data1 = '张三';
        $data2 = [ 'name' => '李四', 'age'  => 18, 'sex'  => '男'];
        $data3 = [
            [ 'name' => '李四1', 'age'  => 181, 'sex'  => '男1'],
            [ 'name' => '李四2', 'age'  => 182, 'sex'  => '男2'],
            [ 'name' => '李四3', 'age'  => 183, 'sex'  => '男3']
        ];

        $this->load->view('Itcast/index',[
            'data1' => $data1,
            'data2' => $data2,
            'data3' => $data3
        ]);
    }

    public function test()
    {
        echo 888;
    }
}
