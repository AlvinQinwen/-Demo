<?php
/**
 * Created by PhpStorm.
 * User: 小王同学
 * Date: 2018/7/17
 * Time: 19:11
 */
defined('BASEPATH') OR exit('No direct script access allowed');
class Msg extends CI_Controller{
    public function index(){
        $this->load->model('MsgModel');
        $msgs = $this->MsgModel->all();
        $this->load->view('msg/index',[
            'msgs' => $msgs
        ]);
    }
}