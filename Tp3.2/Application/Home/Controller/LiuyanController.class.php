<?php
/**
 * Created by PhpStorm.
 * User: 小王同学
 * Date: 2018/7/16
 * Time: 15:26
 */
namespace Home\Controller;

use Think\Controller;
class LiuyanController extends Controller{
    public function index(){
        $msgs = M('msg')->select();
        $this->assign('msgs',$msgs);
        $this->display('index');
    }

    public  function add(){
        if(IS_POST){
            $postData = I('post.');
            $postData['create_at'] = $postData['update_at'] = time();
            $rs = M('msg')->add($postData);
            if($rs){
                $this->success('添加成功',U('liuyan/index'));
            }else{
                $this->error('添加失败');
            }
        }
    }

    public function select(){
        $start_time = I('start_time');
        $end_time = I('end_time');
        $start = strtotime($start_time);
        $end = strtotime($end_time);

        $result = M('msg')->where("create_at>'$start' and create_at <= '$end'")->select();
        if(!$result){
            echo '无数据';
        }else{
            dump($result);
        }
    }
}